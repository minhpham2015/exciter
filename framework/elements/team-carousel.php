<?php
class WPBakeryShortCode_bt_team_carousel extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'layout' => 'default',
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'rows' => 1,
			'items' => '',
			'margin' => '',
			'loop' => '',
			'autoplay' => '',
			'autoplayhoverpause' => '',
			'smartspeed' => '',
			'nav' => '',
			'dots' => '',
			'nav_dots' => 'nav-dot-default',
			
			'category' => '',
			'posts_per_page' => 10,
			'orderby' => 'none',
			'order' => 'none',
			
			'img_size' => '',
			'readmore_text' => 'Read More',
			
			'items_md' => '',
			'items_sm' => '',
			'items_xs' => '',
			'nav_xs' => '',
			'dots_xs' => '',
			
			'css' => ''
			
		), $atts));
		
		$space_class = ( ! empty( $margin ) ) ? 'space'.$margin : 'space0';
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-team-carousel-element',
			$layout,
			$nav_dots,
			$space_class,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		/* Owl */
		$owl_attributes = array();
		$owl_attributes['items'] = ( ! empty( $items ) ) ? $items : 4;
		$owl_attributes['margin'] = ( ! empty( $margin ) ) ? (int)$margin : 0;
		$owl_attributes['loop'] = ( ! empty( $loop ) ) ? true : false;
		$owl_attributes['autoplay'] = ( ! empty( $autoplay ) ) ? true : false;
		$owl_attributes['autoplayHoverPause'] = ( ! empty( $autoplayhoverpause ) ) ? true : false;
		$owl_attributes['smartSpeed'] = ( ! empty( $smartspeed ) ) ? (int)$smartspeed : 500;
		$owl_attributes['nav'] = ( ! empty( $nav ) ) ? true : false;
		if ( ! empty( $nav ) ) $owl_attributes['navText'] = array('<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>');
		$owl_attributes['dots']= ( ! empty( $dots ) ) ? true : false;
		
		if($items != 1){
			$items_md = ( ! empty( $items_md ) ) ? $items_md : 3;
			$items_sm = ( ! empty( $items_sm ) ) ? $items_sm : 2;
			$items_xs = ( ! empty( $items_xs ) ) ? $items_xs : 1;
		}else{
			$items_md = $items_sm = $items_xs = 1;
		}
		
		if(! empty( $nav )){
			$nav_xs = ( ! empty( $nav_xs ) ) ? false : true;
		}else{
			$nav_xs = false;
		}
		
		if(! empty( $dots )){
			$dots_xs = ( ! empty( $dots_xs ) ) ? false : true;
		}else{
			$dots_xs = false;
		}
		
		$owl_attributes['responsive'] = array(
			1200 => array(
				'items' => $items
			),
			992 => array(
				'items' => $items_md
			),
			768 => array(
				'items' => $items_sm
			),
			0 => array(
				'items' => $items_xs,
				'nav' => $nav_xs,
				'dots' => $dots_xs
			),
		);
		
		
		$owl_json = json_encode($owl_attributes);
		
		
		/* Query */
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		
		$args = array(
			'posts_per_page' => $posts_per_page,
			'paged' => $paged,
			'orderby' => $orderby,
			'order' => $order,
			'post_type' => 'team',
			'post_status' => 'publish');
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$taxonomy = array();
			foreach ((array) $cats as $cat){
				$taxonomy[] = trim($cat);
			}
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'team_category',
					'field' => 'slug',
					'terms' => $taxonomy
				)
			);
		}
		$wp_query = new WP_Query($args);
		
		wp_enqueue_script('exciter-owl-carousel');
		wp_enqueue_style('exciter-owl-carousel');
		
		ob_start();
		if ( $wp_query->have_posts() ) {
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>">
				<div class="owl-carousel" data-owl="<?php echo esc_attr($owl_json); ?>">
					<?php
						if($rows == 1){
							while ( $wp_query->have_posts() ) { $wp_query->the_post();
								require get_template_directory().'/framework/elements/team_layouts/'.$layout.'.php';
							}
						}else{
							$post_count = $wp_query->post_count;
							$count = 0;
							while ( $wp_query->have_posts() ) { $wp_query->the_post();
								if($count == 0 || $count%$rows == 0) echo '<div class="bt-items">';
									require get_template_directory().'/framework/elements/team_layouts/'.$layout.'.php';
									$count++;
								if($count == $post_count || $count%$rows == 0) echo '</div>';
							}
						}
					?>
				</div>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						if ($('.bt-team-carousel-element .owl-carousel').length) {
							$('.bt-team-carousel-element .owl-carousel').each(function() {
								$(this).owlCarousel($(this).data('owl'));
							});
						}
					});
				</script>
			</div>
		<?php
		} else {
			echo 'Post not found!';
		}
		wp_reset_query();
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => __('Team Carousel', 'exciter'),
	'base' => 'bt_team_carousel',
	'category' => __('BT Elements', 'exciter'),
	'icon' => 'bt-icon',
    'params' => array(
		vc_map_add_css_animation(),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Element ID', 'exciter'),
			'param_name' => 'el_id',
			'value' => '',
			'description' => esc_html__( 'Enter element ID (Note: make sure it is unique and valid).', 'exciter' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Extra Class', 'exciter'),
			'param_name' => 'el_class',
			'value' => '',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'exciter' )
		),
		array (
			'type' => 'bt_taxonomy',
			'taxonomy' => 'team_category',
			'heading' => esc_html__( 'Categories', 'exciter' ),
			'param_name' => 'category',
			'group' => __('Data Setting', 'exciter'),
			'description' => esc_html__( 'Note: By default, all your members will be displayed. If you want to narrow output, select category(s) above. Only selected categories will be displayed.', 'exciter' )
		),
		array (
			'type' => 'textfield',
			'heading' => esc_html__( 'Count', 'exciter' ),
			'param_name' => 'posts_per_page',
			'value' => 10,
			'group' => __('Data Setting', 'exciter'),
			'description' => esc_html__( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', 'exciter' )
		),
		array (
			'type' => 'dropdown',
			'heading' => esc_html__( 'Order by', 'exciter' ),
			'param_name' => 'orderby',
			'value' => array (
					'None' => 'none',
					'Title' => 'title',
					'Date' => 'date',
					'ID' => 'ID'
			),
			'group' => __('Data Setting', 'exciter'),
			'description' => esc_html__( 'Select order type.', 'exciter' )
		),
		array (
			'type' => 'dropdown',
			'heading' => esc_html__( 'Order', 'exciter' ),
			'param_name' => 'order',
			'value' => Array (
					'None' => 'none',
					'ASC' => 'ASC',
					'DESC' => 'DESC'
			),
			'group' => __('Data Setting', 'exciter'),
			'description' => esc_html__( 'Select sorting order.', 'exciter' )
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Layout', 'exciter'),
			'param_name' => 'layout',
			'value' => array(
				'Default' => 'default',
				'Layout 1' => 'layout1'
			),
			'admin_label' => true,
			'group' => __('Item Setting', 'exciter'),
			'description' => __('Select layout of items display in this element.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Image size', 'exciter' ),
			'param_name' => 'img_size',
			'value' => 'thumbnail',
			'group' => __('Item Setting', 'exciter'),
			'description' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'exciter' ),
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Readmore Text', 'exciter'),
			'param_name' => 'readmore_text',
			'value' => 'Read More',
			'group' => __('Item Setting', 'exciter'),
			'description' => __('Please, Enter text of label button readmore in this element.', 'exciter')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Items', 'exciter'),
			'param_name' => 'rows',
			'value' => array(
				'1 Row' => 1,
				'2 Rows' => 2,
				'3 Rows' => 3
				
			),
			'group' => __('Owl Setting', 'exciter'),
			'description' => __('The number of rows you want to see on the screen.', 'exciter')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Items', 'exciter'),
			'param_name' => 'items',
			'value' => array(
				'4 Items' => 4,
				'3 Items' => 3,
				'2 Items' => 2,
				'1 Item' => 1
			),
			'group' => __('Owl Setting', 'exciter'),
			'description' => __('The number of items you want to see on the screen.', 'exciter')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Margin', 'exciter'),
			'param_name' => 'margin',
			'value' => array(
				'0px' => 0,
				'10px' => 10,
				'20px' => 20,
				'30px' => 30
			),
			'group' => __('Owl Setting', 'exciter'),
			'description' => __('Margin-right(px) on item.', 'exciter')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Loop', 'exciter'),
			'param_name' => 'loop',
			'value' => '',
			'group' => __('Owl Setting', 'exciter'),
			'description' => __('Infinity loop. Duplicate last and first items to get loop illusion.', 'exciter')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Autoplay.', 'exciter'),
			'param_name' => 'autoplay',
			'value' => '',
			'group' => __('Owl Setting', 'exciter'),
			'description' => __('Autoplay.', 'exciter')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('AutoplayHoverPause', 'exciter'),
			'param_name' => 'autoplayhoverpause',
			'value' => '',
			'group' => __('Owl Setting', 'exciter'),
			'description' => __('Pause on mouse hover.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('SmartSpeed', 'exciter'),
			'param_name' => 'smartspeed',
			'value' => 500,
			'group' => __('Owl Setting', 'exciter'),
			'description' => esc_html__( 'Speed Calculate.', 'exciter' )
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Nav', 'exciter'),
			'param_name' => 'nav',
			'value' => '',
			'group' => __('Owl Setting', 'exciter'),
			'description' => __('Show next/prev buttons.', 'exciter')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Dots', 'exciter'),
			'param_name' => 'dots',
			'value' => '',
			'group' => __('Owl Setting', 'exciter'),
			'description' => __('Show dots navigation.', 'exciter')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Nav & Dots Style', 'exciter'),
			'param_name' => 'nav_dots',
			'value' => array(
				'Default' => 'nav-dots-default',
				'Exciter Style' => 'nav-dots-exciter'
			),
			'group' => __('Owl Setting', 'exciter'),
			'description' => __('Select nav and dots style display in this element.', 'exciter')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Items Medium Screen', 'exciter'),
			'param_name' => 'items_md',
			'value' => array(
				'Auto' => '',
				'4 Items' => 4,
				'3 Items' => 3,
				'2 Items' => 2,
				'1 Item' => 1
			),
			'group' => __('Responsive', 'exciter'),
			'description' => __('The number of items you want to see on the screen(>=992px and <1199px).', 'exciter')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Items Small Screen', 'exciter'),
			'param_name' => 'items_sm',
			'value' => array(
				'Auto' => '',
				'4 Items' => 4,
				'3 Items' => 3,
				'2 Items' => 2,
				'1 Item' => 1
			),
			'group' => __('Responsive', 'exciter'),
			'description' => __('The number of items you want to see on the screen(>=768px and <992px).', 'exciter')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Items Extra Screen', 'exciter'),
			'param_name' => 'items_xs',
			'value' => array(
				'Auto' => '',
				'4 Items' => 4,
				'3 Items' => 3,
				'2 Items' => 2,
				'1 Item' => 1
			),
			'group' => __('Responsive', 'exciter'),
			'description' => __('The number of items you want to see on the screen(<768px).', 'exciter')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Disable Nav On Extra Screen', 'exciter'),
			'param_name' => 'nav_xs',
			'value' => '',
			'group' => __('Responsive', 'exciter'),
			'description' => __('Disable next/prev buttons on the screen(<768px).', 'exciter')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Disable Dots On Extra Screen', 'exciter'),
			'param_name' => 'dots_xs',
			'value' => '',
			'group' => __('Responsive', 'exciter'),
			'description' => __('Disable dots navigation on the screen(<768px).', 'exciter')
		),
		
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'exciter' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'exciter' ),
		)
	)
));
