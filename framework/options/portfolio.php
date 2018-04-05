<?php
// Portfolio
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Portfolio', 'exciter' ),
	'id'               => 'bt_portfolio',
	'icon'             => 'el el-folder-open',
	'fields'           => array(
		array(
			'id'       => 'portfolio_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'exciter' ),
			'default'  => false
		),
		array(
			'id'       => 'portfolio_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'exciter' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('portfolio_fullwidth' , '=', '1'),
			'output'    => array('.tax-fw-portfolio-category .bt-main-content')
		),
		array(
			'id'            => 'portfolio_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'exciter' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'exciter' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'portfolio_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'exciter' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'exciter' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'required' 	=> array('portfolio_titlebar' , '=', '1'),
			'output'    => array('.tax-fw-portfolio-category .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'portfolio_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Main Content Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the content.', 'exciter' ),
			'default'  => array(
				'padding-top' => '0px',
				'padding-bottom' => '0px'
			),
			'output'   => array('.tax-fw-portfolio-category .bt-main-content')
		),
		array(
			'id'    => 'portfolio_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'exciter' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the portfolio page.', 'exciter' )
		),
		array(
			'id'       => 'portfolio_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '28px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'portfolio_title_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Title Color', 'exciter' ),
			'subtitle' => esc_html__( 'Controls the color post title.', 'exciter' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title a')
		),
		array(
			'id'       => 'portfolio_title_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Title Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post title.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'portfolio_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'exciter' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'exciter' ),
			'default'  => 'full',
			'required' 		=> array('portfolio_featured' , '=', '1')
		),
		array(
			'id'       => 'portfolio_featured_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Featured Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post featured.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('portfolio_featured' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-media')
		),
		array(
			'id'       => 'portfolio_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_meta_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Meta Typography', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography post meta.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'portfolio_meta_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Meta Color', 'exciter' ),
			'subtitle' => esc_html__( 'Controls the color post meta.', 'exciter' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'portfolio_meta_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Meta Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post meta.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'portfolio_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_author_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Author Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field author. Leave empty to use "By:" label.', 'exciter' ),
			'default'  => 'By:',
			'required' 		=> array('portfolio_meta_author' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field date. Leave empty to use "Date:" label.', 'exciter' ),
			'default'  => 'Date:',
			'required' 		=> array('portfolio_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date_format',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Format', 'exciter' ),
			'subtitle' => esc_html__( 'Controls the date format that displays in the post. http://codex.wordpress.org/Formatting_Date_and_Time', 'exciter' ),
			'default'  => 'M d, Y',
			'required' 		=> array('portfolio_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_category_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field category. Leave empty to use "Category:" label.', 'exciter' ),
			'default'  => 'Category:',
			'required' 		=> array('portfolio_meta_category' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'exciter' ),
			'default'  => '55',
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'exciter' ),
			'default'  => '[...]',
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Excerpt Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post excerpt.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '15px'
			),
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-excerpt')
		),
		array(
			'id'       => 'portfolio_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_readmore_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Read More Button Typography', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography post read more button.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('portfolio_readmore' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'portfolio_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'exciter' ),
			'default'  => 'Read More',
			'required' 		=> array('portfolio_readmore' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.tax-fw-portfolio-category .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Portfolio', 'exciter' ),
	'id'               => 'bt_single_portolio',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'single_portolio_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'exciter' ),
			'default'  => false
		),
		array(
			'id'       => 'single_portolio_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'exciter' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('single_portolio_fullwidth' , '=', '1'),
			'output'    => array('.single-fw-portfolio .bt-main-content')
		),
		array(
			'id'            => 'single_portolio_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'exciter' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'exciter' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'single_portfolio_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'single_portolio_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'exciter' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'exciter' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'required' 	=> array('single_portfolio_titlebar' , '=', '1'),
			'output'    => array('.single-fw-portfolio .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'single_portfolio_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Main Content Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the content.', 'exciter' ),
			'default'  => array(
				'padding-top' => '0px',
				'padding-bottom' => '0px'
			),
			'output'   => array('.single-fw-portfolio .bt-main-content')
		),
		array(
			'id'       => 'single_portolio_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-fw-portfolio .fw-portfolio')
		),
		array(
			'id'       => 'single_portfolio_related_post',
			'type'     => 'switch',
			'title'    => esc_html__( 'Related Post', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the related post.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'single_portfolio_related_post_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Related Post Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the related post. Leave empty to use "Portfolio Related" label.', 'exciter' ),
			'default'  => 'Portfolio Related',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_related_post_count',
			'type'     => 'text',
			'title'    => esc_html__( 'Related Post Count', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter post count of the related post. Leave empty to use "3" for post count.', 'exciter' ),
			'default'  => '3',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'            => 'single_portfolio_related_post_per_row',
			'type'          => 'slider',
			'title'         => esc_html__( 'Related Post Per Row', 'exciter' ),
			'subtitle'      => esc_html__( 'Controls the post per row of the related post.', 'exciter' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'text',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_related_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Related Post Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the related post.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-fw-portfolio .bt-related')
		),
	)
) );
