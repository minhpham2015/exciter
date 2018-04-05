<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$menu_slug_opt = array();
$menus_obj = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
$menu_slug_opt['auto'] = 'Auto';
foreach ( $menus_obj as $menu_obj ) {
	$menu_slug_opt[$menu_obj->slug] = $menu_obj->name;
}

$options = array(
	'page_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'page_general_setting' => array(
				'title' => __('General', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'page_titlebar' => array(
						'type' => 'switch',
						'label' => __('Disable Title Bar', 'exciter'),
						'desc' => __('Turn on to disable title bar in current page.', 'exciter'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'exciter'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'exciter'),
						),
					),
					'page_footer_space' => array(
						'type' => 'switch',
						'label' => __('Disable Footer Space', 'exciter'),
						'desc' => __('Turn on to disable space between footer and content in current page.', 'exciter'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'exciter'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'exciter'),
						),
					),
					
				),
			),
			'page_header_setting' => array(
				'title' => __('Header', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'header_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Header Layout', 'exciter'),
						'desc'  => __('Select a header layout in current page', 'exciter'),
						'choices' => array(
							'default' => __('Default', 'exciter'),
							'1' => __('Header 1', 'exciter'),
							'2' => __('Header 2', 'exciter'),
							'3' => __('Header 3', 'exciter'),
							'onepage' => __('Header One Page', 'exciter'),
							'onepagescroll' => __('Header One Page Scroll', 'exciter'),
							'vertical' => __('Header Vertical', 'exciter'),
							'minivertical' => __('Header Mini Vertical', 'exciter')
						)
					),
					'header_fullwidth' => array(
						'type' => 'switch',
						'label' => __('Disable Full Width (100%)', 'exciter'),
						'desc' => __('Turn on to disable header full width (100%) in current page.', 'exciter'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'exciter'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'exciter'),
						),
					),
					'header_top' => array(
						'type' => 'switch',
						'label' => __('Disable Header Top', 'exciter'),
						'desc' => __('Turn on to disable header top in current page.', 'exciter'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'exciter'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'exciter'),
						),
					),
					'header_logo' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo', 'exciter'),
						'desc'  => __('Select image to change the logo in current page.', 'exciter'),
					),
					'header_logo_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', 'exciter'),
						'desc'  => __('Controls the height of the logo in current page. EX: 50', 'exciter')
					),
					'header_menu_assign' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => __('Menu Assign', 'exciter'),
						'desc'  => __('Select a menu assign of header layout in current page', 'exciter'),
						'choices' => $menu_slug_opt
					),
					'header_stick' => array(
						'type' => 'switch',
						'label' => __('Disable Header Sticky', 'exciter'),
						'desc' => __('Turn on to disable header stick in current page.', 'exciter'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'exciter'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'exciter'),
						),
					),
					'header_logo_stick' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo Stick', 'exciter'),
						'desc'  => __('Select image to change the logo stick in current page.', 'exciter'),
					),
					'header_logo_stick_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', 'exciter'),
						'desc'  => __('Controls the height of the logo stick in current page. EX: 40', 'exciter')
					),
					'mobile_header_top' => array(
						'type' => 'switch',
						'label' => __('Disable Header Top Mobile', 'exciter'),
						'desc' => __('Turn on to disable header top mobile in current page.', 'exciter'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'exciter'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'exciter'),
						),
					),
					'logo_mobile' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo Mobile', 'exciter'),
						'desc'  => __('Select image to change the logo mobile in current page.', 'exciter'),
					),
					'logo_mobile_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', 'exciter'),
						'desc'  => __('Controls the height of the logo mobile in current page. EX: 30', 'exciter')
					),
					
				),
			),
			'page_titlebar_setting' => array(
				'title' => __('Title Bar', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'titlebar_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Title Bar Layout', 'exciter'),
						'desc'  => __('Select a title bar layout in current page', 'exciter'),
						'choices' => array(
							'default' => __('Default', 'exciter'),
							'1' => __('Title Bar 1', 'exciter'),
							'2' => __('Title Bar 2', 'exciter')
						)
					),
					'page_titlebar_space' => array(
						'type' => 'switch',
						'label' => __('Disable Title Bar Space', 'exciter'),
						'desc' => __('Turn on to disable space between title bar and content in current page.', 'exciter'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'exciter'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'exciter'),
						),
					),
					'page_titlebar_background' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Title Bar Background', 'exciter'),
						'desc'  => __('Select image to change the title bar background in current page.', 'exciter'),
					),
				),
			) ,
			'page_footer_setting' => array(
				'title' => __('Footer', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'footer_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Footer Layout', 'exciter'),
						'desc'  => __('Select a footer layout in current page', 'exciter'),
						'choices' => array(
							'default' => __('Default', 'exciter'),
							'1' => __('Footer 1', 'exciter'),
							'2' => __('Footer 2', 'exciter')
						)
					),
					'footer_fixed' => array(
						'type' => 'switch',
						'label' => __('Disable Fixed', 'exciter'),
						'desc' => __('Turn on to disable footer fixed in current page.', 'exciter'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'exciter'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'exciter'),
						),
					),
					'footer_fullwidth' => array(
						'type' => 'switch',
						'label' => __('Disable Full Width (100%)', 'exciter'),
						'desc' => __('Turn on to disable footer full width (100%) in current page.', 'exciter'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'exciter'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'exciter'),
						),
					),
					'footer_top' => array(
						'type' => 'switch',
						'label' => __('Disable Footer Top', 'exciter'),
						'desc' => __('Turn on to disable footer top in current page.', 'exciter'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'exciter'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'exciter'),
						),
					),
				),
			),
		),
	),
	
);