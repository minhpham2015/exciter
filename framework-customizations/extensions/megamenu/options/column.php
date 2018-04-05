<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_mega_column_width' => array(
		'label' => __('Column Width', 'exciter'),
		'desc' => __('Please enter number with px or % for column width (default: 210px)', 'exciter'),
		'type' => 'short-text',
		'value' => '210px'
	),
	'menu_mega_column_padding' => array(
		'label' => __('Padding', 'exciter'),
		'desc' => __('Please enter number with px or % for column padding (default: 0px 10px)', 'exciter'),
		'type' => 'short-text',
		'value' => '0px 10px'
	),
);