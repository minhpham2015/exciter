<?php
$portfolio_options = function_exists('fw_get_db_post_option')?fw_get_db_post_option(get_the_ID(), 'portfolio_options'):array();

$gallery_column = isset($portfolio_options['gallery-column'])?$portfolio_options['gallery-column']:'col-md-12';
$gallery_space = isset($portfolio_options['gallery-space'])?(int)$portfolio_options['gallery-space']:0;
$gallery_space_style = 'margin-bottom: '.$gallery_space.'px; padding: 0 '.($gallery_space/2).'px;';

$infor_title = isset($portfolio_options['infor-title'])?$portfolio_options['infor-title']:'';
$info_options = isset($portfolio_options['info-option'])?$portfolio_options['info-option']:array();

$info_item = array();
if(!empty($info_options)){
	foreach($info_options as $info_option){
		$info_item[] = '<li><span>'.$info_option['title'].'</span>'.$info_option['value'].'</li>';
	}
}

$social_title = isset($portfolio_options['social-title'])?$portfolio_options['social-title']:'';
$social = isset($portfolio_options['social'])?$portfolio_options['social']:array();

$social_item = array();
if(!empty($social)){
	foreach($social as $item){
		$social_item[] = '<li><a href="'.esc_url($item['link']).'"><i class="'.esc_attr($item['icon']).'"></i></a></li>';
	}
}
?>

<article <?php post_class('layout1'); ?>>
	<div class="row">
		<div class="col-md-12">
			<?php
				$project_gallery = function_exists('fw_ext_portfolio_get_gallery_images')?fw_ext_portfolio_get_gallery_images():array();
				if(!empty($project_gallery)){
					?>
						<div class="bt-gallery">
							<div class="row">
								<?php 
									foreach($project_gallery as $attachment){
										echo '<div class="'.esc_attr($gallery_column).'" style="'.esc_attr($gallery_space_style).'">
												<div class="bt-item">
													<img src="'.esc_url($attachment['url']).'" alt="'.esc_html__('Thumbnail', 'exciter').'"/>
												</div>
											</div>';
									}
								?>
							</div>
						</div>
					<?php
				}else{
					echo '<div class="bt-thumbnail">'.get_the_post_thumbnail('full').'</div>';
				}
			?>
		</div>
		<div class="col-md-8">
			<h3 class="bt-title"><?php the_title(); ?></h3>
			<div class="bt-term"><?php the_terms( get_the_ID(), 'fw-portfolio-category', '', ', ' ); ?></div>
			<div class="bt-desc"><?php the_content(); ?></div>
		</div>
		<div class="col-md-4">
			<div class="bt-info">
				<?php
					if($infor_title) echo '<h4>'.$infor_title.'</h4>';
					if(!empty($info_item)) echo '<ul>'.implode(' ', $info_item).'</ul>'; 
				?>
			</div>
			<div class="bt-social">
				<?php
					if($social_title) echo '<h4>'.$social_title.'</h4>';
					if(!empty($social_item)) echo '<ul>'.implode(' ', $social_item).'</ul>'; 
				?>
			</div>
		</div>
	</div>
</article>
