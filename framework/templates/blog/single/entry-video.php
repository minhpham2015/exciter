<?php
	global $exciter_options;
	$post_title = isset($exciter_options['single_post_title']) ? $exciter_options['single_post_title']: true;
	$post_featured = isset($exciter_options['single_post_featured']) ? $exciter_options['single_post_featured']: true;
	$post_image_size = isset($exciter_options['single_post_image_size']) ? $exciter_options['single_post_image_size']: '';
	$post_meta = isset($exciter_options['single_post_meta']) ? $exciter_options['single_post_meta']: true;
	$post_meta_author = isset($exciter_options['single_post_meta_author']) ? $exciter_options['single_post_meta_author']: true;
	$post_meta_author_label = isset($exciter_options['single_post_meta_author_label'])&&$exciter_options['single_post_meta_author_label'] ? $exciter_options['single_post_meta_author_label']: esc_html__('By:', 'exciter');
	$post_meta_date = isset($exciter_options['single_post_meta_date']) ? $exciter_options['single_post_meta_date']: true;
	$post_meta_date_label = isset($exciter_options['single_post_meta_date_label'])&&$exciter_options['single_post_meta_date_label'] ? $exciter_options['single_post_meta_date_label']: esc_html__('Date:', 'exciter');
	$post_meta_date_format = isset($exciter_options['single_post_meta_date_format'])&&$exciter_options['single_post_meta_date_format'] ? $exciter_options['single_post_meta_date_format']: get_option('date_format');
	$post_meta_comment = isset($exciter_options['single_post_meta_comment']) ? $exciter_options['single_post_meta_comment']: true;
	$post_meta_comment_label = isset($exciter_options['single_post_meta_comment_label'])&&$exciter_options['single_post_meta_comment_label'] ? $exciter_options['single_post_meta_comment_label']: esc_html__('Comment:', 'exciter');
	$post_meta_comments_label = isset($exciter_options['single_post_meta_comments_label'])&&$exciter_options['single_post_meta_comments_label'] ? $exciter_options['single_post_meta_comments_label']: esc_html__('Comments:', 'exciter');
	$post_meta_category = isset($exciter_options['single_post_meta_category']) ? $exciter_options['single_post_meta_category']: true;
	$post_meta_category_label = isset($exciter_options['single_post_meta_category_label'])&&$exciter_options['single_post_meta_category_label'] ? $exciter_options['single_post_meta_category_label']: esc_html__('Category:', 'exciter');
	$post_content = isset($exciter_options['single_post_content']) ? $exciter_options['single_post_content']: true;
	$post_tag = isset($exciter_options['single_post_tag']) ? $exciter_options['single_post_tag']: true;
	$post_share = isset($exciter_options['single_post_share']) ? $exciter_options['single_post_share']: true;
	$post_share_label = isset($exciter_options['single_post_share_label'])&&$exciter_options['single_post_share_label'] ? $exciter_options['single_post_share_label']: esc_html__('Share:', 'exciter');
	$social_item = array();
	$share_facebook = isset($exciter_options['single_post_share_facebook']) ? $exciter_options['single_post_share_facebook']: true;
	if($share_facebook){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Facebook', 'exciter').'" href="https://www.facebook.com/sharer/sharer.php?u='.get_the_permalink().'"><i class="fa fa-facebook"></i></a></li>';
	}
	$share_twitter = isset($exciter_options['single_post_share_twitter']) ? $exciter_options['single_post_share_twitter']: true;
	if($share_twitter){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Twitter', 'exciter').'" href="https://twitter.com/share?url='.get_the_permalink().'"><i class="fa fa-twitter"></i></a></li>';
	}
	$share_google_plus = isset($exciter_options['single_post_share_google_plus']) ? $exciter_options['single_post_share_google_plus']: true;
	if($share_google_plus){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Google Plus', 'exciter').'" href="https://plus.google.com/share?url='.get_the_permalink().'"><i class="fa fa-google-plus"></i></a></li>';
	}
	$share_linkedin = isset($exciter_options['single_post_share_linkedin']) ? $exciter_options['single_post_share_linkedin']: true;
	if($share_linkedin){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Linkedin', 'exciter').'" href="https://www.linkedin.com/shareArticle?url='.get_the_permalink().'"><i class="fa fa-linkedin"></i></a></li>';
	}
	$share_pinterest = isset($exciter_options['single_post_share_pinterest']) ? $exciter_options['single_post_share_pinterest']: true;
	if($share_pinterest){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Pinterest', 'exciter').'" href="https://pinterest.com/pin/create/button/?url='.get_the_permalink().'"><i class="fa fa-pinterest"></i></a></li>';
	}
	
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	$video_url = isset($post_options['video_url'])?$post_options['video_url']:'';
	$video_poster = isset($post_options['video_poster'])?$post_options['video_poster']:array();
	$video_caption = isset($post_options['video_caption'])?$post_options['video_caption']:'';
	
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_title){ ?>
			<h3 class="bt-title"><?php the_title(); ?></h3>
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
		
		<?php if($post_content){ ?>
			<div class="bt-content">
				<?php
					the_content();
					wp_link_pages(array(
						'before' => '<div class="page-links">' . __('Pages:', 'exciter'),
						'after' => '</div>',
					));
				?>
			</div>
		<?php } ?>
		
		<?php if($post_tag || $post_share){ ?>
			<div class="bt-tag-share">
				<?php if($post_tag){ ?>
					<div class="bt-tag"><?php the_tags( '', '', '' ); ?> </div>
				<?php } ?>
				<?php if($post_share){ ?>
					<div class="bt-share">
						<?php
							if(!empty($social_item)){
								echo '<h4>'.$post_share_label.'</h4><ul>'.implode(' ', $social_item).'</ul>';
							}
						?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</article>
