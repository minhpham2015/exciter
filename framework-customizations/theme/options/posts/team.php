<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'team_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'team-meta' => array(
				'title' => __('Meta Fields', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'position' => array(
						'type'  => 'text',
						'value' => 'Ceo/Founder',
						'label' => __('Position', 'exciter'),
						'desc'  => __('Please, enter position of member.', 'exciter'),
					),
					'email' => array(
						'type'  => 'text',
						'value' => 'bearsthemes@gmail.com',
						'label' => __('Email', 'exciter'),
						'desc'  => __('Please, enter email of member.', 'exciter'),
					),
					'phone' => array(
						'type'  => 'text',
						'value' => '(1200)-0989-568-331',
						'label' => __('Phone', 'exciter'),
						'desc'  => __('Please, enter phone number of member.', 'exciter'),
					),
					
				),
			),
			'team-social' => array(
				'title' => __('Social', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'social' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Facebook',
								'icon' => 'fa fa-facebook',
								'link' => '#'
							),
							array(
								'title' => 'Twitter',
								'icon' => 'fa fa-twitter',
								'link' => '#'
							),
							array(
								'title' => 'Google Plus',
								'icon' => 'fa fa-google-plus',
								'link' => '#'
							)
						),
						'label' => __('Social', 'exciter'),
						'desc'  => __('Please configs social of member', 'exciter'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Title', 'exciter'),
								'desc'  => __('Please, enter title of social item.', 'exciter'),
							),
							'icon' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Icon', 'exciter'),
								'desc'  => __('Please, enter icon of social item.', 'exciter'),
							),
							'link' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Url(Link)', 'exciter'),
								'desc'  => __('Please, enter link of social item.', 'exciter'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => __('Add', 'exciter'),
						'sortable' => true,
					)
					
				),
			),
			
		)
	)
	
);