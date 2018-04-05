<?php
class exciter_Post_List_Widget extends exciter_Widget {
	function __construct() {
		parent::__construct(
			'exciter_post_list', // Base ID
			__('Post List', 'exciter'), // Name
			array('description' => __('Display a list of your posts on your site.', 'exciter'),) // Args
        );
		
		$this->settings           = array(
			'title'  => array(
				'type'  => 'text',
				'std'   => esc_html__( 'Post List', 'exciter' ),
				'label' => esc_html__( 'Title', 'exciter' )
			),
			'category' => array(
				'type'   => 'exciter_taxonomy',
				'std'    => '',
				'label'  => esc_html__( 'Categories', 'exciter' ),
			),
			'posts_per_page' => array(
				'type'  => 'number',
				'step'  => 1,
				'min'   => 1,
				'max'   => '',
				'std'   => 3,
				'label' => esc_html__( 'Number of posts to show', 'exciter' )
			),
			'orderby' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => esc_html__( 'Order by', 'exciter' ),
				'options' => array(
					'none'   => esc_html__( 'None', 'exciter' ),
					'comment_count'  => esc_html__( 'Comment Count', 'exciter' ),
					'title'  => esc_html__( 'Title', 'exciter' ),
					'date'   => esc_html__( 'Date', 'exciter' ),
					'ID'  => esc_html__( 'ID', 'exciter' ),
				)
			),
			'order' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => esc_html__( 'Order', 'exciter' ),
				'options' => array(
					'none'  => esc_html__( 'None', 'exciter' ),
					'asc'  => esc_html__( 'ASC', 'exciter' ),
					'desc' => esc_html__( 'DESC', 'exciter' ),
				)
			),
			'el_class'  => array(
				'type'  => 'text',
				'std'   => '',
				'label' => esc_html__( 'Extra Class', 'exciter' )
			)
		);
	}
	
	function widget( $args, $instance ) {

		ob_start();
		global $post;
		extract( $args );
                
		$title                  = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );
		$category               = isset($instance['category'])? $instance['category'] : '';
		$posts_per_page         = absint( $instance['posts_per_page'] );
		$orderby                = sanitize_title( $instance['orderby'] );
		$order                  = sanitize_title( $instance['order'] );
		$el_class               = sanitize_title( $instance['el_class'] );
                
		echo ''.$before_widget;

		if ( $title )
				echo ''.$before_title . $title . $after_title;
		
		$query_args = array(
			'posts_per_page' => $posts_per_page,
			'orderby' => $orderby,
			'order' => $order,
			'post_type' => 'post',
			'post_status' => 'publish');
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$category = array();
			foreach ((array) $cats as $cat) :
			$category[] = trim($cat);
			endforeach;
			$query_args['tax_query'] = array(
									array(
										'taxonomy' => 'category',
										'field' => 'slug',
										'terms' => $category
									)
							);
		}
		
		$wp_query = new WP_Query($query_args);                
		
		if ($wp_query->have_posts()){
			?>
			<ul class="bt-post-list">
				<?php while ($wp_query->have_posts()){ $wp_query->the_post(); ?>
					<li>
						<?php 
							/* get thumbnail */
							if( has_post_thumbnail() ){
								$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
								echo '<a href="'.get_the_permalink().'"><div class="bt-thumb" style="background: url('.esc_url($thumbnail_data[0]).') no-repeat center center / cover, #333"></div></a>';
							}
						?>
						<div class="bt-term"><?php the_terms( get_the_ID(), 'category', '', '' ); ?></div>
						<h3 class="bt-title" title="<?php the_title(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<ul class="bt-meta">
							<li><?php echo get_the_date('M d, Y'); ?></li>
							<li><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></li>
						</ul>
					</li>
				<?php } ?>
			</ul>
		<?php 
		}
		
		wp_reset_postdata();

		echo ''.$after_widget;
                
		$content = ob_get_clean();

		echo ''.$content;
		
	}
}
/* Class exciter_Post_List_Widget */
function exciter_post_list_widget() {
    register_widget('exciter_Post_List_Widget');
}

add_action('widgets_init', 'exciter_post_list_widget');
