<?php
// General
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'General', 'exciter' ),
	'id'               => 'bt_general',
	'icon'             => 'el el-adjust-alt',
	'fields'           => array(
		array(
			'id'       => 'less_design',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Less Design', 'exciter' ),
			'subtitle' => esc_html__( 'Enable less design to generate css over time...', 'exciter' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_layout',
			'type'     => 'button_set',
			'title'    => __('Site Layout', 'exciter'),
			'subtitle' => __('Control the site layout.', 'exciter'),
			'options' => array(
				'wide' => __('Wide', 'exciter'), 
				'boxed' => __('Boxed', 'exciter'),
			 ), 
			'default' => 'wide'
		),
		array(
			'id'            => 'site_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Site Width', 'exciter' ),
			'subtitle'      => esc_html__( 'Control the overall site width.', 'exciter' ),
			'default'       => 1200,
			'min'           => 1200,
			'step'          => 1,
			'max'           => 1600,
			'display_value' => 'text',
			'required' 		=> array('site_layout' , '=', 'boxed')
		),
		array(
			'id'       => 'boxed_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Boxed Background', 'exciter' ),
			'subtitle' => esc_html__( 'Control the background color of the boxed.', 'exciter' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'boxed_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'         => false,
			'left'          => false,
			'title'    => esc_html__( 'Boxed Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the space top and bottom of boxed.', 'exciter' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'body_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Body Background', 'exciter' ),
			'subtitle' => esc_html__( 'Control the background of the body.', 'exciter' ),
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('body'),
		),
		array(
			'id'            => 'mobile_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Mobile Width', 'exciter' ),
			'subtitle'      => esc_html__( 'Controls the width to enable mobile.', 'exciter' ),
			'default'       => 991,
			'min'           => 540,
			'step'          => 1,
			'max'           => 1199,
			'display_value' => 'text'
		),
		array(
			'id'       => 'smooth_scroll',
			'type'     => 'switch',
			'title'    => esc_html__( 'Smoth Scroll', 'exciter' ),
			'subtitle' => esc_html__( 'Use smoth scroll.', 'exciter' ),
			'default'  => false,
		),
		array(
			'id'       => 'nice_scroll_bar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Nice Scroll Bar', 'exciter' ),
			'subtitle' => esc_html__( 'Use nice scroll bar.', 'exciter' ),
			'default'  => false,
		),
		array(
			'id'=>'nice_scroll_bar_element',
			'type' => 'textarea',
			'title' => __('Nice Scroll Bar Elements', 'exciter'), 
			'subtitle' => __('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'exciter'),
			'default' => 'html',
			'required' 		=> array('nice_scroll_bar' , '=', '1')
		),
		array(
			'id'       => 'back_to_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Back To Top', 'exciter' ),
			'subtitle' => esc_html__( 'Control button back to top.', 'exciter' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top_style',
			'type'     => 'select',
			'title'    => esc_html__( 'Back To Top Style', 'exciter' ),
			'subtitle' => esc_html__( 'Select style button back to top.', 'exciter' ),
			'options'  => array(
				'square' => esc_html__( 'Square', 'exciter' ),
				'rounded' => esc_html__( 'Rounded', 'exciter' ),
				'circle' => esc_html__( 'Circle', 'exciter' )
			),
			'default'  => 'square',
			'required' 		=> array('back_to_top' , '=', '1')
		),
		array(
			'id'       => 'site_loading',
			'type'     => 'switch',
			'title'    => esc_html__( 'Site Loading', 'exciter' ),
			'subtitle' => esc_html__( 'Control animation before site load complete.', 'exciter' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_loading_spinner',
			'type'     => 'select',
			'title'    => esc_html__( 'Spinner Style', 'exciter' ),
			'subtitle' => esc_html__( 'Select style spinner.', 'exciter' ),
			'options'  => array(
				'spinner0' => esc_html__( 'Default', 'exciter' ),
				'spinner1' => esc_html__( 'Style 1', 'exciter' ),
				'spinner2' => esc_html__( 'Style 2', 'exciter' ),
				'spinner3' => esc_html__( 'Style 3', 'exciter' ),
				'spinner4' => esc_html__( 'Style 4', 'exciter' ),
				'spinner5' => esc_html__( 'Style 5', 'exciter' )
			),
			'default'  => 'spinner0',
			'required' 		=> array('site_loading' , '=', '1')
		),
		array(
			'id'       => 'site_loading_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Site Loading Background', 'exciter' ),
			'subtitle' => esc_html__( 'Control the background of site loading.', 'exciter' ),
			'default'  => array(
				'background-color' => '#0a6edd',
			),
			'required' 		=> array('site_loading' , '=', '1'),
			'output'    => array('#site_loading')
		),
		
	)
) );
