<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_mega_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => __('Type', 'exciter'),
				'value' => 'customize',
				'choices' => array(
					'customize' => __('Customize', 'exciter'),
					'fullwidth' => __('Fullwidth', 'exciter'),
				),
			)
		),
		'choices' => array(
			'customize' => array(
				'menu_mega_container_width' => array(
					'label' => __('Width', 'exciter'),
					'desc' => __('Please enter number with px for container width (default: 840px)', 'exciter'),
					'type' => 'short-text',
					'value' => '840px'
				),
				'menu_mega_container_position' => array(
					'label' => __('Position', 'exciter'),
					'desc' => __('Select the sub menu display position', 'exciter'),
					'type' => 'radio',
					'value' => 'menu-item-pos-left',
					'choices' => array(
						'menu-item-pos-left' => __('Left', 'exciter'),
						'menu-item-pos-center' => __('Center', 'exciter'),
						'menu-item-pos-right' => __('Right', 'exciter'),
					),
					'inline' => true,
				),
			),
		),
	),
	'menu_mega_container_bg' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => __('Background Type', 'exciter'),
				'value' => 'color',
				'choices' => array(
					'color' => __('Color', 'exciter'),
					'image' => __('Image', 'exciter'),
				),
			)
		),
		'choices' => array(
			'color' => array(
				'bg_color' => array(
					'label' => esc_html__( 'Background Color', 'exciter' ),
					'desc'  => esc_html__( 'Choose background color for container mega menu (default: #f1f4fb)', 'exciter' ),
					'type'  => 'color-picker',
					'value' => '#f1f4fb',
				),
			),
			'image' => array(
				'bg_image' => array(
					'label' => esc_html__( 'Background Image', 'exciter' ),
					'desc'  => esc_html__( 'Choose background image for container mega menu', 'exciter' ),
					'type'  => 'upload',
				),
				'bg_image_repeat' => array(
					'label' => esc_html__( 'Background Repeat', 'exciter' ),
					'desc'  => esc_html__( 'Choose background repeat for container mega menu', 'exciter' ),
					'type' => 'short-select',
					'value' => 'no-repeat',
					'choices' => array(
						'no-repeat' => __('No Repeat', 'exciter'),
						'repeat' => __('Repeat', 'exciter'),
					),
				),
				'bg_image_size' => array(
					'label' => esc_html__( 'Background Size', 'exciter' ),
					'desc'  => esc_html__( 'Choose background size for container mega menu', 'exciter' ),
					'type' => 'short-select',
					'value' => 'cover',
					'choices' => array(
						'cover' => __('Cover', 'exciter'),
						'contain' => __('Contain', 'exciter'),
					),
				),
				'bg_image_position' => array(
					'label' => esc_html__( 'Background Position', 'exciter' ),
					'desc'  => esc_html__( 'Please enter background position for container mega menu (default: center center)', 'exciter' ),
					'type' => 'short-text',
					'value' => 'center center',
				),
			),
		),
	),
	'menu_mega_row_padding' => array(
		'label' => __('Padding', 'exciter'),
		'desc' => __('Please enter number with px or % for row padding (default: 15px 10px)', 'exciter'),
		'type' => 'short-text',
		'value' => '15px 10px'
	),
);
