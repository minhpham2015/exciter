<?php 
	global $exciter_options;
	
?>
<div class="bt-menu-toggle"></div>
<header id="bt_header" class="bt-header bt-header-vertical">
	
	<div class="bt-header-inner">
		<div class="bt-logo">
			<?php
				$logo = isset($exciter_options['hvertical_logo']['url'])?$exciter_options['hvertical_logo']['url']:'';
				
				$logo_height = (isset($exciter_options['hvertical_logo_height'])&&$exciter_options['hvertical_logo_height'])?$exciter_options['hvertical_logo_height']:'40';
				
				exciter_logo($logo, $logo_height); 
			?>
		</div>
		
		<div class="bt-vertical-menu-wrap">
			<?php
				$menu_assign = isset($exciter_options['hvertical_menu_assign'])&&($exciter_options['hvertical_menu_assign'] != 'auto')?$exciter_options['hvertical_menu_assign']:'';
				exciter_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
			?>
		</div>
		
		<div class="bt-sidebar">
			<?php
				if(isset($exciter_options['hvertical_content_bottom_element'])&&$exciter_options['hvertical_content_bottom_element']&&isset($exciter_options['hvertical_content_bottom_element'])&&$exciter_options['hvertical_content_bottom_element']){
					echo '<div class="bt-menu-content-right">';
						foreach($exciter_options['hvertical_content_bottom_element'] as $sidebar_id){
							dynamic_sidebar( $sidebar_id );
						}
					echo '</div>'; 
				}
			?>
		</div>
		
	</div>
		
</header>