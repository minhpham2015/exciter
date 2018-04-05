<?php
// Blog
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Archive Blog', 'exciter' ),
	'id'               => 'bt_blog',
	'icon'             => 'el el-file-edit',
	'fields'           => array(
		array(
			'id'       => 'blog_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'exciter' ),
			'default'  => false
		),
		array(
			'id'       => 'blog_fullwidth_space',
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
			'required' 		=> array('blog_fullwidth' , '=', '1'),
			'output'    => array('.category .bt-main-content, .tag .bt-main-content, .search .bt-main-content')
		),
		array(
			'id'            => 'blog_sidebar_width',
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
			'id'       => 'blog_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'blog_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'exciter' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'exciter' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'required' 	=> array('blog_titlebar' , '=', '1'),
			'output'    => array('.category .bt-titlebar .bt-titlebar-inner, .tag .bt-titlebar .bt-titlebar-inner, .search .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'blog_content_sapce',
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
			'output'   => array('.category .bt-main-content, .tag .bt-main-content, .search .bt-main-content')
		),
		array(
			'id'    => 'blog_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'exciter' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'exciter' )
		),
		array(
			'id'       => 'post_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'post_title_font',
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
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title, .tag .bt-post-item .bt-title, .search .bt-post-item .bt-title')
		),
		array(
			'id'       => 'post_title_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Title Color', 'exciter' ),
			'subtitle' => esc_html__( 'Controls the color post title.', 'exciter' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title a, .tag .bt-post-item .bt-title a, .search .bt-post-item .bt-title a')
		),
		array(
			'id'       => 'post_title_sapce',
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
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title, .tag .bt-post-item .bt-title, .search .bt-post-item .bt-title')
		),
		array(
			'id'       => 'post_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'post_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'exciter' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'exciter' ),
			'default'  => 'full',
			'required' 		=> array('post_featured' , '=', '1')
		),
		array(
			'id'       => 'post_featured_sapce',
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
			'required' 		=> array('post_featured' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-media, .tag .bt-post-item .bt-media, .search .bt-post-item .bt-media')
		),
		array(
			'id'       => 'post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'post_meta_font',
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
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta > li, .tag .bt-post-item .bt-meta > li, .search .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'post_meta_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Meta Color', 'exciter' ),
			'subtitle' => esc_html__( 'Controls the color post meta.', 'exciter' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta > li a, .tag .bt-post-item .bt-meta > li a, .search .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'post_meta_sapce',
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
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta, .tag .bt-post-item .bt-meta, .search .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'post_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_author_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Author Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field author. Leave empty to use "By:" label.', 'exciter' ),
			'default'  => 'By:',
			'required' 		=> array('post_meta_author' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field date. Leave empty to use "Date:" label.', 'exciter' ),
			'default'  => 'Date:',
			'required' 		=> array('post_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date_format',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Format', 'exciter' ),
			'subtitle' => esc_html__( 'Controls the date format that displays in the post. http://codex.wordpress.org/Formatting_Date_and_Time', 'exciter' ),
			'default'  => 'M d, Y',
			'required' 		=> array('post_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Comment', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field comment.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comment_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Comment Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field comment. Leave empty to use "Comment:" label.', 'exciter' ),
			'default'  => 'Comment:',
			'required' 		=> array('post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comments_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Comments Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field comment. Leave empty to use "Comments:" label.', 'exciter' ),
			'default'  => 'Comments:',
			'required' 		=> array('post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_category_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field category. Leave empty to use "Category:" label.', 'exciter' ),
			'default'  => 'Category:',
			'required' 		=> array('post_meta_category' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'post_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'exciter' ),
			'default'  => '55',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'exciter' ),
			'default'  => '[...]',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_sapce',
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
			'required' 		=> array('post_excerpt' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-excerpt, .tag .bt-post-item .bt-excerpt, .search .bt-post-item .bt-excerpt')
		),
		array(
			'id'       => 'post_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'post_readmore_font',
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
			'required' 		=> array('post_readmore' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-readmore, .tag .bt-post-item .bt-readmore, .search .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'post_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'exciter' ),
			'default'  => 'Read More',
			'required' 		=> array('post_readmore' , '=', '1'),
		),
		array(
			'id'       => 'blog_article_space',
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
			'output'    => array('.category .bt-post-item, .tag .bt-post-item, .search .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Post', 'exciter' ),
	'id'               => 'bt_post',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'post_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'exciter' ),
			'default'  => false
		),
		array(
			'id'       => 'post_fullwidth_space',
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
			'required' 		=> array('post_fullwidth' , '=', '1'),
			'output'    => array('.single-post .bt-main-content')
		),
		array(
			'id'            => 'post_sidebar_width',
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
			'id'       => 'post_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'post_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'exciter' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'exciter' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'required' 	=> array('post_titlebar' , '=', '1'),
			'output'    => array('.single-post .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'post_content_sapce',
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
			'output'   => array('.single-post .bt-main-content')
		),
		array(
			'id'       => 'single_post_navigation',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Navigation', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the post navigation.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_navigation_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Navigation Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post navigation.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '60px'
			),
			'required' 		=> array('single_post_navigation' , '=', '1'),
			'output'   => array('.single-post .bt-blog-article-nav')
		),
		array(
			'id'       => 'single_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Author', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the author.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'single_author_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Author Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the author.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '60px'
			),
			'required' 		=> array('single_author' , '=', '1'),
			'output'   => array('.single-post .bt-about-author')
		),
		array(
			'id'       => 'single_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Comment', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the comment.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'single_comment_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Comment Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the comment.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_comment' , '=', '1'),
			'output'   => array('.single-post .bt-comment-wrapper')
		),
		array(
			'id'    => 'single_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'exciter' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'exciter' )
		),
		array(
			'id'       => 'single_post_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'exciter' ),
			'default'  => false
		),
		array(
			'id'       => 'single_post_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'exciter' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'exciter' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '36px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '46px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_post_title' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-title')
		),
		array(
			'id'       => 'single_post_title_sapce',
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
			'required' 		=> array('single_post_title' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-title')
		),
		array(
			'id'       => 'single_post_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'exciter' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'exciter' ),
			'default'  => 'full',
			'required' 		=> array('single_post_featured' , '=', '1')
		),
		array(
			'id'       => 'single_post_featured_sapce',
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
			'required' 		=> array('single_post_featured' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-media')
		),
		array(
			'id'       => 'single_post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_meta_font',
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
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'single_post_meta_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Meta Color', 'exciter' ),
			'subtitle' => esc_html__( 'Controls the color post meta.', 'exciter' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'single_post_meta_sapce',
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
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta, .tag .bt-post-item .bt-meta, .search .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'single_post_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_author_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Author Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field author. Leave empty to use "By:" label.', 'exciter' ),
			'default'  => 'By:',
			'required' 		=> array('single_post_meta_author' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field date. Leave empty to use "Date:" label.', 'exciter' ),
			'default'  => 'Date:',
			'required' 		=> array('single_post_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date_format',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Format', 'exciter' ),
			'subtitle' => esc_html__( 'Controls the date format that displays in the post. http://codex.wordpress.org/Formatting_Date_and_Time', 'exciter' ),
			'default'  => 'M d, Y',
			'required' 		=> array('single_post_meta_date' , '=', '1'),
		),
		
		array(
			'id'       => 'single_post_meta_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Comment', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field comment.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_comment_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Comment Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field comment. Leave empty to use "Comment:" label.', 'exciter' ),
			'default'  => 'Comment:',
			'required' 		=> array('single_post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_comments_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Comments Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field comment. Leave empty to use "Comments:" label.', 'exciter' ),
			'default'  => 'Comments:',
			'required' 		=> array('single_post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_category_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field category. Leave empty to use "Category:" label.', 'exciter' ),
			'default'  => 'Category:',
			'required' 		=> array('single_post_meta_category' , '=', '1'),
		),
		array(
			'id'       => 'single_post_content',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Content', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the content.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Content Space', 'exciter' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post excerpt.', 'exciter' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_content' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-content')
		),
		array(
			'id'       => 'single_post_tag',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Tags', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the tags.', 'exciter' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_share',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Shares', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the share.', 'exciter' ),
			'default'  => false
		),
		array(
			'id'       => 'single_post_share_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Share Label', 'exciter' ),
			'subtitle' => esc_html__( 'Please, Enter label of the share. Leave empty to use "Share:" label.', 'exciter' ),
			'default'  => 'Share:',
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_facebook',
			'type'     => 'switch',
			'title'    => esc_html__( 'Facebook', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the facebook share.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_twitter',
			'type'     => 'switch',
			'title'    => esc_html__( 'Twitter', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the twitter share.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_google_plus',
			'type'     => 'switch',
			'title'    => esc_html__( 'Google Plus', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the google plus share.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_linkedin',
			'type'     => 'switch',
			'title'    => esc_html__( 'Linkedin', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the linkedin share.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_pinterest',
			'type'     => 'switch',
			'title'    => esc_html__( 'Pinterest', 'exciter' ),
			'subtitle' => esc_html__( 'Turn on to show the pinterest share.', 'exciter' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_article_space',
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
			'output'    => array('.single-post .bt-post-item')
		),
		
	)
) );
