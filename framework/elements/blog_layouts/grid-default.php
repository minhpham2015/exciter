<?php
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	
?>
<div class="bt-item">
	<div class="bt-media <?php echo esc_attr($format); ?>">
		<?php
			$thumb_size = (!empty($img_size))?$img_size:'full'; 
			$thumbnail = wpb_getImageBySize( array(
				'post_id' => get_the_ID(),
				'attach_id' => null,
				'thumb_size' => $thumb_size,
				'class' => ''
			) );
			
			switch ($format) {
				case 'gallery':
					$gallery_images = isset($post_options['gallery_images'])?$post_options['gallery_images']:array();
					if(!empty($gallery_images)){
						$date = time() . '_' . uniqid(true);
						?>
							<div id="<?php echo esc_attr( 'carousel-generic'.$date ) ?>" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
								<?php
									foreach($gallery_images as $key => $gallery_image){
										$cl_active = ($key == 0) ? 'active' : '';
										$thumbnail_image = wpb_getImageBySize( array(
											'post_id' => null,
											'attach_id' => $gallery_image['attachment_id'],
											'thumb_size' => $thumb_size,
											'class' => 'item bt-gallery '.$cl_active
										) );
										echo (!empty($thumbnail_image))?$thumbnail_image['thumbnail']:'';
									}
								?>
							  </div>
								<a class="left carousel-control" href="<?php echo esc_attr( '#carousel-generic'.$date ) ?>" role="button" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								</a>
								<a class="right carousel-control" href="<?php echo esc_attr( '#carousel-generic'.$date ) ?>" role="button" data-slide="next">
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						<?php
					}else{
						echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
					}
					break;
				case 'video':
					$video_url = isset($post_options['video_url'])?$post_options['video_url']:'';
					$video_poster = isset($post_options['video_poster'])?$post_options['video_poster']:array();
					$video_caption = isset($post_options['video_caption'])?$post_options['video_caption']:'';
					if(!empty($video_url)){
						?>
							<div class="bt-overlay">
								<a href="<?php echo esc_url($video_url); ?>" class="html5lightbox" data-group=""  data-thumbnail="" data-width="800" data-height="450" title="<?php echo esc_attr($video_caption); ?>"><i class="fa fa-play"></i></a>
							</div>
						<?php
						if(!empty($video_poster)){
							$thumbnail_poster = wpb_getImageBySize( array(
								'post_id' => null,
								'attach_id' => $video_poster['attachment_id'],
								'thumb_size' => $thumb_size,
								'class' => ''
							) );
							echo (!empty($thumbnail_poster))?$thumbnail_poster['thumbnail']:'';
						}else{
							echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
						}
					}else{
						echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
					}
					break;
				default:
					echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
			}
		?>
		<div class="bt-term"><?php the_terms( get_the_ID(), 'category', '', ', ' ); ?></div>
	</div>
	<div class="bt-content">
		<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<ul class="bt-meta">
			<li><?php echo esc_html__('By ', 'exciter').'<strong>'.get_the_author().'</strong>'; ?></li>
			<li><?php echo esc_html__('on ', 'exciter').'<strong>'.get_the_date('M d, Y').'</strong>'; ?></li>
		</ul>
		<?php
			echo '<div class="bt-excerpt">'.wp_trim_words(get_the_excerpt(), $excerpt_limit, $excerpt_more).'</div>';
			if(!empty($readmore_text)) echo '<a class="bt-readmore" href="'.get_the_permalink().'">'.$readmore_text.'</a>';
		?>
	</div>
</div>