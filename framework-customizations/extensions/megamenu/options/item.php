<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'mega_menu_item_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label' => esc_html__( 'Type', 'exciter' ),
				'desc' => esc_html__( 'Please select menu type', 'exciter' ),
				'value' => '',
				'choices' => array(
					'default' => __('Default', 'exciter'),
					'sidebar' => __('Sidebar', 'exciter'),
				),
			),
		),
		'choices' => array(
			'sidebar' => array(
				'sidebar_id' => array(
					'type' => 'select',
					'label' => esc_html__( 'Sidebar', 'exciter' ),
					'desc' => esc_html__( 'Please select sitebar', 'exciter' ),
					'value' => '',
					'choices' => exciter_get_sidebars(),
				),
			),
		),
	),
	'badge' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'selected' => array(
				'type' => 'switch',
				'value' => 'no',
				'label' => __('Badge', 'exciter'),
				'left-choice' => array(
					'value' => 'no',
					'label' => __('No', 'exciter'),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => __('Yes', 'exciter'),
				)
			),
		),
		'choices' => array(
			'yes' => array(
				'badge_group' => array(
					'type' => 'group',
					'attr' => array('class' => ''),
					'options' => array(
						'badge_text' => array(
							'type' => 'short-text',
							'html' => '',
							'value' => '',
							'label' => __('Text', 'exciter'),
						),
						'badge_background_color' => array(
							'value' => '#E23F3F',
							'type' => 'color-picker',
							'label' => __('Background Color', 'exciter'),
						),
						'badge_color' => array(
							'value' => '#FFFFFF',
							'type' => 'color-picker',
							'label' => __('Color', 'exciter'),
						),
					),
				),
			),
		),
	),
);
