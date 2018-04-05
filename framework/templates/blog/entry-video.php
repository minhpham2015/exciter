<?php
	global $exciter_options;
	$post_title = isset($exciter_options['post_title']) ? $exciter_options['post_title']: true;
	$post_featured = isset($exciter_options['post_featured']) ? $exciter_options['post_featured']: true;
	$post_image_size = isset($exciter_options['post_image_size']) ? $exciter_options['post_image_size']: '';
	$post_meta = isset($exciter_options['post_meta']) ? $exciter_options['post_meta']: true;
	$post_meta_author = isset($exciter_options['post_meta_author']) ? $exciter_options['post_meta_author']: true;
	$post_meta_author_label = isset($exciter_options['post_meta_author_label'])&&$exciter_options['post_meta_author_label'] ? $exciter_options['post_meta_author_label']: esc_html__('By:', 'exciter');
	$post_meta_date = isset($exciter_options['post_meta_date']) ? $exciter_options['post_meta_date']: true;
	$post_meta_date_label = isset($exciter_options['post_meta_date_label'])&&$exciter_options['post_meta_date_label'] ? $exciter_options['post_meta_date_label']: esc_html__('Date:', 'exciter');
	$post_meta_date_format = isset($exciter_options['post_meta_date_format'])&&$exciter_options['post_meta_date_format'] ? $exciter_options['post_meta_date_format']: get_option('date_format');
	$post_meta_comment = isset($exciter_options['post_meta_comment']) ? $exciter_options['post_meta_comment']: true;
	$post_meta_comment_label = isset($exciter_options['post_meta_comment_label'])&&$exciter_options['post_meta_comment_label'] ? $exciter_options['post_meta_comment_label']: esc_html__('Comment:', 'exciter');
	$post_meta_comments_label = isset($exciter_options['post_meta_comments_label'])&&$exciter_options['post_meta_comments_label'] ? $exciter_options['post_meta_comments_label']: esc_html__('Comments:', 'exciter');
	$post_meta_category = isset($exciter_options['post_meta_category']) ? $exciter_options['post_meta_category']: true;
	$post_meta_category_label = isset($exciter_options['post_meta_category_label'])&&$exciter_options['post_meta_category_label'] ? $exciter_options['post_meta_category_label']: esc_html__('Category:', 'exciter');
	$post_excerpt = isset($exciter_options['post_excerpt']) ? $exciter_options['post_excerpt']: true;
	$post_excerpt_length = (int) isset($exciter_options['post_excerpt_length']) ? $exciter_options['post_excerpt_length']: 55;
	$post_excerpt_more = isset($exciter_options['post_excerpt_more']) ? $exciter_options['post_excerpt_more']: '[...]';
	$post_readmore = isset($exciter_options['post_readmore']) ? $exciter_options['post_readmore']: true;
	$post_readmore_label = isset($exciter_options['post_readmore_label'])&&$exciter_options['post_readmore_label'] ? $exciter_options['post_readmore_label']: esc_html__('Read More', 'exciter');
	
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	$video_url = isset($post_options['video_url'])?$post_options['video_url']:'';
	$video_poster = isset($post_options['video_poster'])?$post_options['video_poster']:array();
	$video_caption = isset($post_options['video_caption'])?$post_options['video_caption']:'';
	
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_title){ ?>
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php } ?>
		
		<?php if($post_featured){ ?>
			<div class="bt-media <?php echo esc_attr($format); ?>">
				<?php
					if(!empty($video_url)){
						?>
							<div class="bt-overlay">
								<a href="<?php echo esc_url($video_url); ?>" class="html5lightbox" data-group=""  data-thumbnail="" data-width="800" data-height="450" title="<?php echo esc_attr($video_caption); ?>"><i class="fa fa-play"></i></a>
							</div>
						<?php
						if(!empty($video_poster)){
							echo '<img src="'.esc_url($video_poster['url']).'" alt="'.esc_html__('Poster Image', 'exciter').'"/>';
						}else{
							if($post_image_size){
								$thumb_size = (!empty($post_image_size))?$post_image_size:'full'; 
								$thumbnail = wpb_getImageBySize( array(
									'post_id' => get_the_ID(),
									'attach_id' => null,
									'thumb_size' => $thumb_size,
									'class' => ''
								) );
								echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
							}else{
								if (has_post_thumbnail()) the_post_thumbnail('full');
							}
						}
					}else{
						if($post_image_size){
							$thumb_size = (!empty($post_image_size))?$post_image_size:'full'; 
							$thumbnail = wpb_getImageBySize( array(
								'post_id' => get_the_ID(),
								'attach_id' => null,
								'thumb_size' => $thumb_size,
								'class' => ''
							) );
							echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
						}else{
							if (has_post_thumbnail()) the_post_thumbnail('full');
						}
					}
				?>
			</div>
		<?php } ?>
		
		<?php if($post_meta){ ?>
			<ul class="bt-meta">
				<?php if($post_meta_author){ ?>
					<li class="bt-author"><?php echo '<strong>'.esc_html($post_meta_author_label).' </strong>'.get_the_author(); ?></li>
				<?php } ?>
				<?php if($post_meta_date){ ?>
					<li class="bt-public"><?php echo '<strong>'.esc_html($post_meta_date_label).' </strong>'.get_the_date($post_meta_date_format); ?></li>
				<?php } ?>
				<?php if($post_meta_comment){ ?>
					<li><a href="<?php comments_link(); ?>"><?php comments_number( '<strong>'.esc_html($post_meta_comment_label).' </strong> 0', '<strong>'.esc_html($post_meta_comment_label).' </strong> 1', '<strong>'.esc_html($post_meta_comments_label).' </strong> %' ); ?></a></li>
				<?php } ?>
				<?php if($post_meta_category){ ?>
					<li><?php the_terms( get_the_ID(), 'category', '<strong>'.esc_html($post_meta_category_label).' </strong>', ', ' ); ?></li>
				<?php } ?>
			</ul>
		<?php } ?>
		
		<?php if($post_excerpt){ ?>
			<div class="bt-excerpt">
				<?php echo wp_trim_words(get_the_excerpt(), $post_excerpt_length, $post_excerpt_more); ?>
			</div>
		<?php } ?>
		
		<?php if($post_readmore){ ?>
			<a class="bt-readmore" href="<?php the_permalink(); ?>"><?php echo esc_html($post_readmore_label); ?></a>
		<?php } ?>
	</div>
</article>
