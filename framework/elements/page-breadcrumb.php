<?php
class WPBakeryShortCode_bt_page_breadcrumb extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'align' => 'left',
			'home_text' => 'Home',
			'delimiter' => '-',
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'css' => ''
			
		), $atts));
		
		$content = wpb_js_remove_wpautop($content, true);
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-page-breadcrumb-element',
			$align,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		ob_start();
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>"  <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
				<?php exciter_page_breadcrumb($home_text, $delimiter); ?>
			</div>
		<?php
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => __('Page Breadcrumb', 'exciter'),
	'base' => 'bt_page_breadcrumb',
	'category' => __('BT Elements', 'exciter'),
	'icon' => 'bt-icon',
	'params' => array(
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Align', 'exciter'),
			'param_name' => 'align',
			'value' => array(
				'Left' => 'text-left',
				'Center' => 'text-center',
				'Right' => 'text-right',
			),
			'description' => __('Select text align in this elment.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Home Text', 'exciter'),
			'param_name' => 'home_text',
			'value' => 'Home',
			'description' => __('Please, enter home text in this element.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Delimiter', 'exciter'),
			'param_name' => 'delimiter',
			'value' => '-',
			'description' => __('Please, enter delimiter in this element.', 'exciter')
		),
		vc_map_add_css_animation(),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Element ID', 'exciter'),
			'param_name' => 'el_id',
			'value' => '',
			'description' => esc_html__( 'Enter element ID (Note: make sure it is unique and valid).', 'exciter' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Extra Class', 'exciter'),
			'param_name' => 'el_class',
			'value' => '',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'exciter' )
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'exciter' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'exciter' ),
		)
	)
));
