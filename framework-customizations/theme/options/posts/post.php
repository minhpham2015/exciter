<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'post_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'post_general' => array(
				'title' => __('General', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'titlebar_background' => array(
						'label' => esc_html__( 'Title Bar Background', 'exciter' ),
						'desc'  => esc_html__( 'Upload title bar background image.', 'exciter' ),
						'type'  => 'upload',
					),
				),
			),
			'post_gallery' => array(
				'title' => __('Gallery', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'gallery_images' => array(
						'label' => esc_html__( 'Add Images', 'exciter' ),
						'desc'  => esc_html__( 'Upload gallery images.', 'exciter' ),
						'type'  => 'multi-upload',
					),
				),
			),
			'post_video' => array(
				'title' => __('Video', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'video_url' => array(
						'label' => esc_html__( 'Video Url', 'exciter' ),
						'desc'  => esc_html__( 'Please video url(vimeo/youtube/mp4). Ex: https://www.youtube.com/embed/YE7VzlLtp-4?rel=0', 'exciter' ),
						'type'  => 'text',
					),
					'video_poster' => array(
						'label' => esc_html__( 'Add Image', 'exciter' ),
						'desc'  => esc_html__( 'Upload video poster image.', 'exciter' ),
						'type'  => 'upload',
					),
					'video_caption' => array(
						'label' => esc_html__( 'Video Caption', 'exciter' ),
						'desc'  => esc_html__( 'Please video caption.', 'exciter' ),
						'type'  => 'text',
					),
				),
			),
			'post_audio' => array(
				'title' => __('Audio', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'audio_type' => array(
						'type' => 'multi-picker',
						'label' => false,
						'desc' => false,
						'picker' => array(
							'type' => array(
								'type' => 'short-select',
								'label' => __('Audio Types', 'exciter'),
								'desc' => __('Choose the audio type.', 'exciter'),
								'value' => 'html5',
								'choices' => array(
									'html5' => __('HTML5', 'exciter'),
									'embed' => __('Embed', 'exciter')
								),
							),
						),
						'choices' => array(
							'html5' => array(
								'format' => array(
									'type'  => 'short-select',
									'value' => 'mp3',
									'label' => __('Format', 'exciter'),
									'desc'  => __('Choose the audio format.', 'exciter'),
									'choices' => array(
										'audio/mpeg' => __('MP3', 'exciter'),
										'audio/ogg' => __('Ogg', 'exciter'),
										'audio/wav' => __('Wav', 'exciter')
									)
								),
								'src' => array(
									'label' => __('Src', 'exciter'),
									'desc' => __('Enter url audio (Ex: http://yourdomain.com/audio.mp3)', 'exciter'),
									'type' => 'text',
									'value' => ''
								),
							),
							'embed' => array(
								'iframe' => array(
									'label' => __('Embed', 'exciter'),
									'desc' => __('Please enter embed code(SoundCloud, ...)', 'exciter'),
									'type' => 'textarea',
									'value' => '',
								),
							),
							
						),
					),
				),
			) ,
			'post_quote' => array(
				'title' => __('Quote', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'quote_text' => array(
						'label' => esc_html__( 'Quote Text', 'exciter' ),
						'desc'  => esc_html__( 'Please enter quote.', 'exciter' ),
						'type'  => 'textarea',
					),
				),
			),
			'post_link' => array(
				'title' => __('Link', 'exciter'),
				'type' => 'tab',
				'options' => array(
					'url' => array(
						'label' => esc_html__( 'Url', 'exciter' ),
						'desc'  => esc_html__( 'Please enter url.', 'exciter' ),
						'type'  => 'text',
					),
				),
			),
			
		),
	),
	
);
