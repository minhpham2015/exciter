<?php
// Typography
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Typography', 'exciter' ),
	'id'               => 'bt_typography',
	'icon'             => 'el el-fontsize',
	'fields'           => array(
		array(
			'id'       => 'body_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Body Font', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography body.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('body')
		),
		array(
			'id'       => 'h1_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H1 Typography', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography H1.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#171721',
				'font-size'   => '36px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '42px',
				'letter-spacing' => '0'
			),
			'output'    => array('h1, .bt-font-size-1')
		),
		array(
			'id'       => 'h1_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H1 Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H1.', 'exciter' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h1')
		),
		array(
			'id'       => 'h2_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H2 Typography', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography H2.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#171721',
				'font-size'   => '30px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '36px',
				'letter-spacing' => '0'
			),
			'output'    => array('h2, .bt-font-size-2')
		),
		array(
			'id'       => 'h2_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H2 Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H2.', 'exciter' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h2')
		),
		array(
			'id'       => 'h3_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H3 Typography', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography H3.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#171721',
				'font-size'   => '24px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'    => array('h3, .bt-font-size-3')
		),
		array(
			'id'       => 'h3_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H3 Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H3.', 'exciter' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h3')
		),
		array(
			'id'       => 'h4_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H4 Typography', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography H4.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#171721',
				'font-size'   => '18px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('h4, .bt-font-size-4')
		),
		array(
			'id'       => 'h4_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H4 Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H4.', 'exciter' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h4')
		),
		array(
			'id'       => 'h5_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H5 Typography', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography H5.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#171721',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '16px',
				'letter-spacing' => '0'
			),
			'output'    => array('h5, .bt-font-size-5')
		),
		array(
			'id'       => 'h5_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H5 Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H5.', 'exciter' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h5')
		),
		array(
			'id'       => 'h6_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H6 Typography', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography H6.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#171721',
				'font-size'   => '12px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '14px',
				'letter-spacing' => '0'
			),
			'output'    => array('h6, .bt-font-size-6')
		),
		array(
			'id'       => 'h6_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H6 Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H1.', 'exciter' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h6')
		),
		
	)
) );
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Extra Font', 'exciter' ),
	'id'               => 'bt_extrafont',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'extra_font_1',
			'type'     => 'typography',
			'title'    => esc_html__( 'Extra Font 1', 'exciter' ),
			'subtitle' => esc_html__( 'Select a font to use throughout Typography settings.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
		),
		array(
			'id'=>'extra_element_1',
			'type' => 'textarea',
			'title' => __('Elements', 'exciter'), 
			'subtitle' => __('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'exciter'),
			'default' => ''
		),
		array(
			'id'       => 'extra_font_2',
			'type'     => 'typography',
			'title'    => esc_html__( 'Extra Font 2', 'exciter' ),
			'subtitle' => esc_html__( 'Select a font to use throughout Typography settings.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
		),
		array(
			'id'=>'extra_element_2',
			'type' => 'textarea',
			'title' => __('Elements', 'exciter'), 
			'subtitle' => __('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'exciter'),
			'default' => ''
		),
		array(
			'id'       => 'extra_font_3',
			'type'     => 'typography',
			'title'    => esc_html__( 'Extra Font 3', 'exciter' ),
			'subtitle' => esc_html__( 'Select a font to use throughout Typography settings.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
		),
		array(
			'id'=>'extra_element_3',
			'type' => 'textarea',
			'title' => __('Elements', 'exciter'), 
			'subtitle' => __('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'exciter'),
			'default' => ''
		),
	)
) );
