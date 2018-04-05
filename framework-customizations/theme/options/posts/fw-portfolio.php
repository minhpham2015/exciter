<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'portfolio_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'portfolio-layout' => array(
				'title' => __('Layout Settings', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'layout' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => __('Layout', 'exciter'),
						'desc'  => __('Select a layout of project', 'exciter'),
						'choices' => array(
							'default' => __('Default(Image Left)', 'exciter'),
							'layout1' => __('Layout 1(Image Top)', 'exciter'),
							'layout2' => __('Layout 2(Image Bottom)', 'exciter')
						)
					),
					'gallery-column' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Select Gallery Columns', 'exciter'),
						'desc'  => __('Select gallery columns of project', 'exciter'),
						'choices' => array(
							'col-md-12' => __('1 Column', 'exciter'),
							'col-md-6' => __('2 Columns', 'exciter'),
							'col-md-4' => __('3 Columns', 'exciter'),
							'col-md-3' => __('4 Columns', 'exciter')
						)
					),
					'gallery-space' => array(
						'type'  => 'short-text',
						'value' => '30',
						'label' => __('Gallery Space', 'exciter'),
						'desc'  => __('Please, enter gallery space of project.', 'exciter'),
					),
				),
			),
			'portfolio-meta' => array(
				'title' => __('Meta Fields', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'infor-title' =>  array( 
						'type' => 'text',
						'value' => 'Infor',
						'label' => __('Info Title', 'exciter'),
						'desc'  => __('Please, enter info title of project.', 'exciter'),
					),
					'info-option' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Client:',
								'value' => 'Bearsthemes'
							),
							array(
								'title' => 'Date:',
								'value' => 'May 14, 2017'
							),
							array(
								'title' => 'Tags:',
								'value' => 'photography, agency, creative'
							),
							array(
								'title' => 'Project Type:',
								'value' => 'Multipurpose Template'
							)
						),
						'label' => __('Info Option', 'exciter'),
						'desc'  => __('Please configs info option of project', 'exciter'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Title', 'exciter'),
								'desc'  => __('Please, enter title of project item.', 'exciter'),
							),
							'value' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Value', 'exciter'),
								'desc'  => __('Please, enter value of project item.', 'exciter'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => __('Add', 'exciter'),
						'sortable' => true,
					)
					
				),
			),
			'portfolio-social' => array(
				'title' => __('Social', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'social-title' =>  array( 
						'type' => 'text',
						'value' => 'Share',
						'label' => __('Social Title', 'exciter'),
						'desc'  => __('Please, enter social title of project.', 'exciter'),
					),
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
								'title' => 'Pinterest',
								'icon' => 'fa fa-pinterest',
								'link' => '#'
							),
							array(
								'title' => 'Behance',
								'icon' => 'fa fa-behance',
								'link' => '#'
							),
							array(
								'title' => 'Instagram',
								'icon' => 'fa fa-instagram',
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