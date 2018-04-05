<?php
class WPBakeryShortCode_bt_fancy_box extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'style' => 'icon-top',
			'align' => 'left',
			'content_space' => '',
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'icon_type' => 'font_icon',
			'font_icon' => '',
			'image_icon' => '',
			'icon_style' => '',
			'icon_size' => '',
			'icon_font_size' => '',
			'icon_color' => '',
			'icon_background' => '',
			'icon_border_style' => '',
			'icon_border_width' => '',
			'icon_border_color' => '',
			'icon_space' => '',
			
			'title' => '',
			'title_font_size' => '',
			'title_line_height' => '',
			'title_letter_spacing' => '',
			'title_color' => '',
			'title_space' => '',
			
			'desc_font_size' => '',
			'desc_line_height' => '',
			'desc_letter_spacing' => '',
			'desc_color' => '',
			'desc_space' => '',
			
			'link_font_size' => '',
			'link_line_height' => '',
			'link_letter_spacing' => '',
			'link_color' => '',
			
			'css' => ''
			
		), $atts));
		
		$content = wpb_js_remove_wpautop($content, true);
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-fancy-box-element',
			$style,
			$icon_style,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		if($style == 'icon-top') $css_class[] = $align;
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		/* Icon */
		$style_icon = array();
		if($icon_style){
			if($icon_size) $style_icon[] = 'width: '.$icon_size.'; height: '.$icon_size.'; line-height: '.$icon_size.';';
			if($icon_background) $style_icon[] = 'background: '.$icon_background.';';
			if($icon_border_style) $style_icon[] = 'border-style: '.$icon_border_style.';';
			if($icon_border_width) $style_icon[] = 'border-width: '.$icon_border_width.';';
			if($icon_border_color) $style_icon[] = 'border-color: '.$icon_border_color.';';
		}
		
		if($icon_color) $style_icon[] = 'color: '.$icon_color.';';
		if($style == 'icon-top' && $icon_space) $style_icon[] = 'margin-bottom: '.$icon_space.';';
		if($style == 'icon-left' && $icon_space) $style_icon[] = 'margin-right: '.$icon_space.';';
		if($style == 'icon-right' && $icon_space) $style_icon[] = 'margin-left: '.$icon_space.';';

		$icon_attributes = array();
		if ( ! empty( $style_icon ) ) {
			$icon_attributes[] = 'style="' . esc_attr( implode(' ', $style_icon) ) . '"';
		}
		
		if($icon_type == 'font_icon'){
			$icon_size_style = $icon_font_size?'font-size: '.$icon_font_size.';':'';
			$icon = $font_icon?'<i class="'.esc_attr($font_icon).'" style="'.esc_attr($icon_size_style).'"></i>':'';
		}else{
			$icon_size_style = $icon_font_size?'width: '.$icon_font_size.'; height: auto;':'';
			$attachment_image = wp_get_attachment_image_src($image_icon, 'full', false);
			$icon = $attachment_image[0]?'<img src="'.esc_url($attachment_image[0]).'" style="'.esc_attr($icon_size_style).'" alt="'.esc_html__('Thumbnail', 'exciter').'"/>':'';
		}
		
		/* Content */
		$content_style = array();
		if($style == 'icon-left' && $content_space) $content_style[] = 'padding-left: '.$content_space;
		if($style == 'icon-right' && $content_space) $content_style[] = 'padding-right: '.$content_space;
		
		$content_attributes = array();
		if ( ! empty( $content_style ) ) {
			$content_attributes[] = 'style="' . esc_attr( implode(' ', $content_style) ) . '"';
		}
		
		/* Title */
		$style_title = array();
		if($title_font_size) $style_title[] = 'font-size: '.$title_font_size.';';
		if($title_line_height) $style_title[] = 'line-height: '.$title_line_height.';';
		if($title_letter_spacing) $style_title[] = 'letter-spacing: '.$title_letter_spacing.';';
		if($title_color) $style_title[] = 'color: '.$title_color.';';
		if($title_space) $style_title[] = 'margin-bottom: '.$title_space.';';
		
		$title_attributes = array();
		if ( ! empty( $style_title ) ) {
			$title_attributes[] = 'style="' . esc_attr( implode(' ', $style_title) ) . '"';
		}
		
		$title_link = isset($atts['title_link'])?vc_build_link( $atts['title_link'] ):array();
		$title_link_attributes = array();
		if(!empty($title_link)){
			if ( ! empty( $title_link['url'] ) ) {
				$title_link_attributes[] = 'href="' . esc_attr( $title_link['url'] ) . '"';
			}
			
			if ( ! empty( $title_link['target'] ) ) {
				$title_link_attributes[] = 'target="' . esc_attr( $title_link['target'] ) . '"';
			}
			
			if ( ! empty( $title_link['rel'] ) ) {
				$title_link_attributes[] = 'rel="' . esc_attr( $title_link['rel'] ) . '"';
			}
			
			if ( ! empty( $title_link['title'] ) ) {
				$title_link_attributes[] = 'title ="'.esc_attr($title_link['title']).'"';
			}
		}
		
		/* Description */
		$style_desc = array();
		if($desc_font_size) $style_desc[] = 'font-size: '.$desc_font_size.';';
		if($desc_line_height) $style_desc[] = 'line-height: '.$desc_line_height.';';
		if($desc_letter_spacing) $style_desc[] = 'letter-spacing: '.$desc_letter_spacing.';';
		if($desc_color) $style_desc[] = 'color: '.$desc_color.';';
		if($desc_space) $style_desc[] = 'margin-bottom: '.$desc_space.';';
		
		$desc_attributes = array();
		if ( ! empty( $style_desc ) ) {
			$desc_attributes[] = 'style="' . esc_attr( implode(' ', $style_desc) ) . '"';
		}
		
		/* Extra link */
		$link = isset($atts['link'])?vc_build_link( $atts['link'] ):array();
		$link_text = '';
		$link_attributes = array();
		
		if(!empty($link)){
			if ( ! empty( $link['url'] ) ) {
				$link_attributes[] = 'href="' . esc_attr( $link['url'] ) . '"';
			}
			
			if ( ! empty( $link['target'] ) ) {
				$link_attributes[] = 'target="' . esc_attr( $link['target'] ) . '"';
			}
			
			if ( ! empty( $link['rel'] ) ) {
				$link_attributes[] = 'rel="' . esc_attr( $link['rel'] ) . '"';
			}
			
			$style_link = array();
			if($link_font_size) $style_link[] = 'font-size: '.$link_font_size.';';
			if($link_line_height) $style_link[] = 'line-height: '.$link_line_height.';';
			if($link_letter_spacing) $style_link[] = 'letter-spacing: '.$link_letter_spacing.';';
			if($link_color) $style_link[] = 'color: '.$link_color.';';
			if ( ! empty( $style_link ) ) {
				$link_attributes[] = 'style="' . esc_attr( implode(' ', $style_link) ) . '"';
			}
			if ( ! empty( $link['title'] ) ) {
				$link_text = $link['title'];
			}
		}
		
		ob_start();
		?>
		<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>" <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
			<?php if($icon) echo '<div class="bt-icon" '.implode(' ', $icon_attributes).'>'.$icon.'</div>'; ?>
			<div class="bt-content" <?php echo implode(' ', $content_attributes); ?>>
				<?php 
					if($title){
						if(!empty($title_link_attributes)){
							echo '<h3 class="bt-title"><a '.implode(' ', $title_attributes).' '.implode(' ', $title_link_attributes).'>'.$title.'</a></h3>';
						}else{
							echo '<h3 class="bt-title" '.implode(' ', $title_attributes).'>'.$title.'</h3>';
						}
					}
					if($content) echo '<div class="bt-desc" '.implode(' ', $desc_attributes).'>'.$content.'</div>';
					if($link_text) echo '<a class="bt-readmore" '.implode(' ', $link_attributes).'>'.$link_text.'</a>';
					
				?>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => __('Fancy Box', 'exciter'),
	'base' => 'bt_fancy_box',
	'category' => __('BT Elements', 'exciter'),
	'icon' => 'bt-icon',
	'params' => array(
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Style', 'exciter'),
			'param_name' => 'style',
			'value' => array(
				'Icon Top' => 'icon-top',
				'Icon Left' => 'icon-left',
				'Icon Right' => 'icon-right'
			),
			'description' => __('Select layout style in this elment.', 'exciter')
		),
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
			'dependency' => array(
				'element'=>'style',
				'value'=> 'icon-top'
			),
			'description' => __('Select layout align in this elment.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Content Space', 'exciter'),
			'param_name' => 'content_space',
			'value' => '',
			'dependency' => array(
				'element'=>'style',
				'value'=> array('icon-left', 'icon-right'),
			),
			'description' => __('Please, enter number with px space between content and icon in this element. Ex: 60px', 'exciter')
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
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Icon Type', 'exciter'),
			'param_name' => 'icon_type',
			'value' => array(
				'Font Icon' => 'font_icon',
				'Image Icon' => 'image_icon'
			),
			'group' => __('Icon', 'exciter'),
			'description' => __('Select type icon in this elment.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Font Icon', 'exciter'),
			'param_name' => 'font_icon',
			'value' => '',
			'group' => __('Icon', 'exciter'),
			'dependency' => array(
				'element'=>'icon_type',
				'value'=> 'font_icon'
			),
			'description' => __('Please, enter class font icon in this element.', 'exciter')
		),
		array(
			'type' => 'attach_image',
			'class' => '',
			'heading' => __('Image Icon', 'exciter'),
			'param_name' => 'image_icon',
			'value' => '',
			'group' => __('Icon', 'exciter'),
			'dependency' => array(
				'element'=>'icon_type',
				'value'=> 'image_icon'
			),
			'description' => __('Select box image icon in this element.', 'exciter')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Icon Style', 'exciter'),
			'param_name' => 'icon_style',
			'value' => array(
				'None' => '',
				'Square' => 'square',
				'Rounded' => 'rounded',
				'Circle' => 'circle'
			),
			'group' => __('Icon', 'exciter'),
			'description' => __('Select style icon in this elment.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Icon Size', 'exciter'),
			'param_name' => 'icon_size',
			'value' => '',
			'group' => __('Icon', 'exciter'),
			'dependency' => array(
				'element'=>'icon_style',
				'value'=> array('square', 'rounded', 'circle'),
			),
			'description' => __('Please, enter number size icon in this element. Ex: 60px', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Font Size', 'exciter'),
			'param_name' => 'icon_font_size',
			'value' => '',
			'group' => __('Icon', 'exciter'),
			'description' => __('Please, enter number with px font size icon in this element. Ex: 30px', 'exciter')
		),
		array(
			'type' => 'colorpicker',
			'class' => '',
			'heading' => __('Color', 'exciter'),
			'param_name' => 'icon_color',
			'value' => '',
			'group' => __('Icon', 'exciter'),
			'description' => __('Select color icon in this element.', 'exciter')
		),
		array(
			'type' => 'colorpicker',
			'class' => '',
			'heading' => __('Background', 'exciter'),
			'param_name' => 'icon_background',
			'value' => '',
			'group' => __('Icon', 'exciter'),
			'dependency' => array(
				'element'=>'icon_style',
				'value'=> array('square', 'rounded', 'circle'),
			),
			'description' => __('Select background color icon in this element.', 'exciter')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Border Style', 'exciter'),
			'param_name' => 'icon_border_style',
			'value' => array(
				'None' => '',
				'Solid' => 'solid',
				'Dashed' => 'dashed',
				'Dotted' => 'dotted'
			),
			'group' => __('Icon', 'exciter'),
			'dependency' => array(
				'element'=>'icon_style',
				'value'=> array('square', 'rounded', 'circle'),
			),
			'description' => __('Select border style icon in this elment.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Border Width', 'exciter'),
			'param_name' => 'icon_border_width',
			'value' => '',
			'group' => __('Icon', 'exciter'),
			'dependency' => array(
				'element'=>'icon_style',
				'value'=> array('square', 'rounded', 'circle'),
			),
			'description' => __('Please, enter number with px border width icon in this element. Ex: 2px', 'exciter')
		),
		array(
			'type' => 'colorpicker',
			'class' => '',
			'heading' => __('Border Color', 'exciter'),
			'param_name' => 'icon_border_color',
			'value' => '',
			'group' => __('Icon', 'exciter'),
			'dependency' => array(
				'element'=>'icon_style',
				'value'=> array('square', 'rounded', 'circle'),
			),
			'description' => __('Select border color icon in this element.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Space', 'exciter'),
			'param_name' => 'icon_space',
			'value' => '',
			'group' => __('Icon', 'exciter'),
			'description' => __('Please, enter number with px space between icon and content in this element. Ex: 30px', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Title', 'exciter'),
			'param_name' => 'title',
			'value' => '',
			'group' => __('Title', 'exciter'),
			'admin_label' => true,
			'description' => __('Please, enter title in this element.', 'exciter')
		),
		array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'exciter' ),
			'param_name' => 'title_link',
			'group' => __('Title', 'exciter'),
			'description' => esc_html__( 'Add custom link of the title in this element.', 'exciter' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Font Size', 'exciter'),
			'param_name' => 'title_font_size',
			'value' => '',
			'group' => __('Title', 'exciter'),
			'description' => __('Please, enter number  with px font size title in this element. Ex: 20px', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Line Height', 'exciter'),
			'param_name' => 'title_line_height',
			'value' => '',
			'group' => __('Title', 'exciter'),
			'description' => __('Please, enter number with px line height title in this element. Ex: 24px', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Letter Spacing', 'exciter'),
			'param_name' => 'title_letter_spacing',
			'value' => '',
			'group' => __('Title', 'exciter'),
			'description' => __('Please, enter number with px letter spacing title in this element. Ex: 1.2px', 'exciter')
		),
		array(
			'type' => 'colorpicker',
			'class' => '',
			'heading' => __('Color', 'exciter'),
			'param_name' => 'title_color',
			'value' => '',
			'group' => __('Title', 'exciter'),
			'description' => __('Select color title in this element.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Space', 'exciter'),
			'param_name' => 'title_space',
			'value' => '',
			'group' => __('Title', 'exciter'),
			'description' => __('Please, enter number with px space between title and description in this element. Ex: 15px', 'exciter')
		),
		array(
			'type' => 'textarea_html',
			'class' => '',
			'heading' => __('Description', 'exciter'),
			'param_name' => 'content',
			'value' => '',
			'group' => __('Description', 'exciter'),
			'description' => __('Please, enter description in this element.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Font Size', 'exciter'),
			'param_name' => 'desc_font_size',
			'value' => '',
			'group' => __('Description', 'exciter'),
			'description' => __('Please, enter number  with px font size description in this element. Ex: 14px', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Line Height', 'exciter'),
			'param_name' => 'desc_line_height',
			'value' => '',
			'group' => __('Description', 'exciter'),
			'description' => __('Please, enter number with px line height description in this element. Ex: 24px', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Letter Spacing', 'exciter'),
			'param_name' => 'desc_letter_spacing',
			'value' => '',
			'group' => __('Description', 'exciter'),
			'description' => __('Please, enter number with px letter spacing description in this element. Ex: 1px', 'exciter')
		),
		array(
			'type' => 'colorpicker',
			'class' => '',
			'heading' => __('Color', 'exciter'),
			'param_name' => 'desc_color',
			'value' => '',
			'group' => __('Description', 'exciter'),
			'description' => __('Select color description in this element.', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Space', 'exciter'),
			'param_name' => 'desc_space',
			'value' => '',
			'group' => __('Description', 'exciter'),
			'description' => __('Please, enter number with px space between description and read more in this element. Ex: 15px', 'exciter')
		),
		array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'exciter' ),
			'param_name' => 'link',
			'group' => __('Extra Link', 'exciter'),
			'description' => esc_html__( 'Add extra link in this element.', 'exciter' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Font Size', 'exciter'),
			'param_name' => 'link_font_size',
			'value' => '',
			'group' => __('Extra Link', 'exciter'),
			'description' => __('Please, enter number  with px font size extra link in this element. Ex: 14px', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Line Height', 'exciter'),
			'param_name' => 'link_line_height',
			'value' => '',
			'group' => __('Extra Link', 'exciter'),
			'description' => __('Please, enter number with px line height extra link in this element. Ex: 24px', 'exciter')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Letter Spacing', 'exciter'),
			'param_name' => 'link_letter_spacing',
			'value' => '',
			'group' => __('Extra Link', 'exciter'),
			'description' => __('Please, enter number with px letter spacing extra link in this element. Ex: 1px', 'exciter')
		),
		array(
			'type' => 'colorpicker',
			'class' => '',
			'heading' => __('Color', 'exciter'),
			'param_name' => 'link_color',
			'value' => '',
			'group' => __('Extra Link', 'exciter'),
			'description' => __('Select color extra link in this element.', 'exciter')
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'exciter' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'exciter' ),
		)
	)
));
