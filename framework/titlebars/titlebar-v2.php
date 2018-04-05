<?php
	global $exciter_options;
	$fullwidth = isset($exciter_options['titlebar_fullwidth'])&&$exciter_options['titlebar_fullwidth'] ? 'fullwidth': 'container';
?>
<div class="bt-titlebar bt-titlebar-v2">
	<div class="bt-titlebar-inner">
		<div class="bt-overlay"></div>
		<div class="bt-subheader">
			<div class="bt-subheader-inner <?php echo esc_attr($fullwidth); ?>">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<div class="bt-page-title">
							<?php
								if(isset($exciter_options['titlebar_page_title_before'])&&$exciter_options['titlebar_page_title_before']&&isset($exciter_options['titlebar_page_title_before_content'])&&$exciter_options['titlebar_page_title_before_content']){
									echo '<div class="bt-before">'.$exciter_options['titlebar_page_title_before_content'].'</div>';
								}
							?>
							<h2><?php echo exciter_page_title(); ?></h2>
							<?php
								if(isset($exciter_options['titlebar_page_title_after'])&&$exciter_options['titlebar_page_title_after']&&isset($exciter_options['titlebar_page_title_after_content'])&&$exciter_options['titlebar_page_title_after_content']){
									echo '<div class="bt-after">'.$exciter_options['titlebar_page_title_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<div class="bt-breadcrumb">
							<?php
								if(isset($exciter_options['titlebar_breadcrumb_before'])&&$exciter_options['titlebar_breadcrumb_before']&&isset($exciter_options['titlebar_breadcrumb_before_content'])&&$exciter_options['titlebar_breadcrumb_before_content']){
									echo '<div class="bt-before">'.$exciter_options['titlebar_breadcrumb_before_content'].'</div>';
								}
							?>
							<div class="bt-path">
								<?php
									$home_text = (isset($exciter_options['titlebar_breadcrumb_home_text'])&&$exciter_options['titlebar_breadcrumb_home_text'])?$exciter_options['titlebar_breadcrumb_home_text']: 'Home';
									$delimiter = (isset($exciter_options['titlebar_breadcrumb_delimiter'])&&$exciter_options['titlebar_breadcrumb_delimiter'])?$exciter_options['titlebar_breadcrumb_delimiter']: '-';
									
									echo exciter_page_breadcrumb($home_text, $delimiter);
								?>
							</div>
							<?php
								if(isset($exciter_options['titlebar_breadcrumb_after'])&&$exciter_options['titlebar_breadcrumb_after']&&isset($exciter_options['titlebar_breadcrumb_after_content'])&&$exciter_options['titlebar_breadcrumb_after_content']){
									echo '<div class="bt-after">'.$exciter_options['titlebar_breadcrumb_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>