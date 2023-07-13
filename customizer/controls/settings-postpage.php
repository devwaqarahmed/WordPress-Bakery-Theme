<?php
//----------------------WOOCOMMERCE SHOP PAGE LAYOUT-----------------------------------
$wp_customize->add_setting('complete[woo_shop_page_layout_id]', array(
		'type' => 'option',
		'default'           => 'wooshop_layout3',
		'sanitize_callback' => 'sanitize_key',
	)
);

// Add the heaeder layout control.
$wp_customize->add_control('woo_shop_page_layout_id',array(
			'type' => 'select',
			'label'    => esc_html__( 'Woo Shop Page Layout *', 'complete' ),
			'section'  => 'wooshoplayout_section',
			'settings' => 'complete[woo_shop_page_layout_id]',
			'choices'  => array(
				'wooshop_layout1' => __('Shop Page Right Sidebar', 'complete'), 
				'wooshop_layout2' => __('Shop Page Left Sidebar', 'complete'),
				'wooshop_layout3' => __('Shop Page Full Width', 'complete'),
		  )
  ) );
  
//----------------------WOOCOMMERCE SINGLE PRODUCT LAYOUT-----------------------------------
$wp_customize->add_setting('complete[woo_single_product_layout_id]', array(
		'type' => 'option',
		'default'           => 'woosingle_layout3',
		'sanitize_callback' => 'sanitize_key',
	)
);

// Add the heaeder layout control.
$wp_customize->add_control('woo_single_product_layout_id',array(
			'type' => 'select',
			'label'    => esc_html__( 'Woo Single Product Layout *', 'complete' ),
			'section'  => 'woosinglelayout_section',
			'settings' => 'complete[woo_single_product_layout_id]',
			'choices'  => array(
				'woosingle_layout1' => __('Single Product Right Sidebar', 'complete'), 
				'woosingle_layout2' => __('Single Product Left Sidebar', 'complete'),
				'woosingle_layout3' => __('Single Product Full Width', 'complete'),
		  )
  ) );
//----------------------SINGLE POST LAYOUT-----------------------------------
$wp_customize->add_setting('complete[single_post_layout_id]', array(
		'type' => 'option',
		'default'           => 'single_layout1',
		'sanitize_callback' => 'sanitize_key',
	)
);

// Add the heaeder layout control.
$wp_customize->add_control('single_post_layout_id',array(
			'type' => 'select',
			'label'    => esc_html__( 'Single Post Layout *', 'complete' ),
			'section'  => 'singlelayout_section',
			'settings' => 'complete[single_post_layout_id]',
			'choices'  => array(
				'single_layout1' => __('Single Post Right Sidebar', 'complete'), 
				'single_layout2' => __('Single Post Left Sidebar', 'complete'),
				'single_layout3' => __('Single Post Full Width', 'complete'),
				'single_layout4' => __('Single Post No Sidebar', 'complete'),
		  )
  ) );

//----------------------SINGLE POST SECTION----------------------------------


//Single Post Meta
$wp_customize->add_setting('complete[post_info_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_info_id', array(
				'label' => __('Show Post Info','complete'),
				'section' => 'singlepost_section',
				'settings' => 'complete[post_info_id]',
			)) );


//NEXT/PREVIOUS Posts
$wp_customize->add_setting('complete[post_nextprev_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_nextprev_id', array(
				'label' => __('Next and Previous Posts','complete'),
				'description'  => __('Display Next and Previous Posts Under Single Post', 'complete' ),
				'section' => 'singlepost_section',
				'settings' => 'complete[post_nextprev_id]',
			)) );


///Show Comments
$wp_customize->add_setting('complete[post_comments_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_comments_id', array(
				'label' => __('Comments','complete'),
				'description'  => __('Show/Hide Comments in Posts and Pages', 'complete' ),
				'section' => 'singlepost_section',
				'settings' => 'complete[post_comments_id]',
			)) );



//----------------------PAGE HEADER SECTION----------------------------------

//Page Header Default Background color
$wp_customize->add_setting( 'complete[page_header_color]', array(
	'type' => 'option',
	'default' => '#545556',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'page_header_color', array(
				'label' => __('Page Header Background','complete'),
				'section' => 'pageheader_section',
				'settings' => 'complete[page_header_color]',
			) ) );
			
// Page Header Background Image
	$wp_customize->add_setting( 'complete[pageheader_bg_image]',array( 
		'type' => 'option',
		'default' => ''.get_template_directory_uri().'/images/default-header-img.jpg',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pageheader_bg_image',array(
			'label'       => __( 'Page Header Background Image', 'complete' ),
			'section'     => 'pageheader_section',
			'settings'    => 'complete[pageheader_bg_image]'
				)
			)
	);
	
// Hide Page Header
	$wp_customize->add_setting('complete[hide_pageheader]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_pageheader', array(
		'label' => __('Hide Page Header','complete'),
		'section' => 'pageheader_section',
		'settings' => 'complete[hide_pageheader]',
	)) );
	
//----------------------POST HEADER SECTION----------------------------------

//Post Header Default Background color
$wp_customize->add_setting( 'complete[post_header_color]', array(
	'type' => 'option',
	'default' => '#545556',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_header_color', array(
				'label' => __('Post Header Background','complete'),
				'section' => 'postheader_section',
				'settings' => 'complete[post_header_color]',
			) ) );
			
// Post Header Background Image
	$wp_customize->add_setting( 'complete[postheader_bg_image]',array( 
		'type' => 'option',
		'default' => ''.get_template_directory_uri().'/images/default-header-img.jpg',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'postheader_bg_image',array(
			'label'       => __( 'Posts Header Background Image', 'complete' ),
			'section'     => 'postheader_section',
			'settings'    => 'complete[postheader_bg_image]'
				)
			)
	);
	
// Hide Post Header
	$wp_customize->add_setting('complete[hide_postheader]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_postheader', array(
		'label' => __('Hide Post Header','complete'),
		'section' => 'postheader_section',
		'settings' => 'complete[hide_postheader]',
	)) );					
//----------------------BLOG PAGE SECTION----------------------------------


/*GET LIST OF CATEGORIES*/
$layercats = get_categories(); 
$newList = array();
foreach($layercats as $category) {
	$newList[$category->term_id] = $category->cat_name;
}	
//BLOG CATEGORY SELECT
//Page Header Default Text color
$wp_customize->add_setting( 'complete[blog_cat_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_multicheck'
) );

$wp_customize->add_control( new complete_Multicheck_Control( $wp_customize, 'blog_cat_id', array(
        'type' => 'multicheck',
        'label' => __('Display Blog Posts from selected Categories *','complete'),
        'section' => 'blogpage_section',
        'choices' =>$newList,
		'settings'    => 'complete[blog_cat_id]'
)) );

//Blog Page Post Count
$wp_customize->add_setting('complete[blog_num_id]', array(
	'type' => 'option',
	'default' => '9',
	'sanitize_callback' => 'complete_sanitize_number',
) );
			$wp_customize->add_control('blog_num_id', array(
				'type' => 'text',
				'label' => __('Blog Page Posts Count *','complete'),
				'section' => 'blogpage_section',
				'settings' => 'complete[blog_num_id]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );

///Blog Page Thumbnails
$wp_customize->add_setting('complete[show_blog_thumb]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
) );
 
				$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'show_blog_thumb', array(
					'label' => __('Blog Page Thumbnails *','complete'),
					'section' => 'blogpage_section',
					'settings' => 'complete[show_blog_thumb]',
				)) );



//---------Post & Page Color SETTINGS---------------------	

//Post Title Color
$wp_customize->add_setting( 'complete[title_txt_color_id]', array(
	'type' => 'option',
	'default' => '#666666',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_txt_color_id', array(
				'label' => __('Single Post All Heading Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[title_txt_color_id]',
			) ) );
//---------SIDEBAR & WIDGET Color SETTINGS---------------------	

//Sidebar Widgets Background Color
$wp_customize->add_setting( 'complete[sidebar_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_color_id', array(
				'label' => __('Sidebar Widgets Background','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebar_color_id]',
			) ) );
			
//Sidebar Widgets Border Color
$wp_customize->add_setting( 'complete[sidebarborder_color_id]', array(
	'type' => 'option',
	'default' => '#eeeff5',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebarborder_color_id', array(
				'label' => __('Sidebar Widgets Border Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebarborder_color_id]',
			) ) );			


//Sidebar Widget Title Color
$wp_customize->add_setting( 'complete[sidebar_tt_color_id]', array(
	'type' => 'option',
	'default' => '#666666',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_tt_color_id', array(
				'label' => __('Sidebar Widget Title Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebar_tt_color_id]',
			) ) );


//Sidebar Widget Text Color
$wp_customize->add_setting( 'complete[sidebartxt_color_id]', array(
	'type' => 'option',
	'default' => '#999999',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebartxt_color_id', array(
				'label' => __('Sidebar Widget Text Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebartxt_color_id]',
			) ) );
			
//Sidebar Widget Link Color
$wp_customize->add_setting( 'complete[sidebarlink_color_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebarlink_color_id', array(
				'label' => __('Sidebar Widget Link Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebarlink_color_id]',
			) ) );		
			
//Sidebar Widget Link Hover Color
$wp_customize->add_setting( 'complete[sidebarlink_hover_color_id]', array(
	'type' => 'option',
	'default' => '#999999',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebarlink_hover_color_id', array(
				'label' => __('Sidebar Widget Link Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebarlink_hover_color_id]',
			) ) );	
			
// Flipbox Front Bg Color
$wp_customize->add_setting( 'complete[flipbg_front_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'flipbg_front_color_id', array(
				'label' => __('Flip Box Front Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[flipbg_front_color_id]',
			) ) );
			
// Flipbox Back Bg Color
$wp_customize->add_setting( 'complete[flipbg_back_color_id]', array(
	'type' => 'option',
	'default' => '#f7f7f7',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'flipbg_back_color_id', array(
				'label' => __('Flip Box Back Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[flipbg_back_color_id]',
			) ) );
			
// Flipbox Front Border Color
$wp_customize->add_setting( 'complete[flipborder_front_color_id]', array(
	'type' => 'option',
	'default' => '#e0e0e0',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'flipborder_front_color_id', array(
				'label' => __('Flip Box Front Border Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[flipborder_front_color_id]',
			) ) );		
			
// Flipbox Back Border Color
$wp_customize->add_setting( 'complete[flipborder_back_color_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'flipborder_back_color_id', array(
				'label' => __('Flip Box Back Border Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[flipborder_back_color_id]',
			) ) );		
 
// Divider Color
$wp_customize->add_setting( 'complete[divider_color_id]', array(
	'type' => 'option',
	'default' => '#8c8b8b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'divider_color_id', array(
				'label' => __('Divider Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[divider_color_id]',
			) ) );	
			
// Timeline Box Bg
$wp_customize->add_setting( 'complete[timebox_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'timebox_color_id', array(
				'label' => __('Timeline Box Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[timebox_color_id]',
			) ) );	
			
// Timeline Box Border
$wp_customize->add_setting( 'complete[timeboxborder_color_id]', array(
	'type' => 'option',
	'default' => '#dedede',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'timeboxborder_color_id', array(
				'label' => __('Timeline Box Border Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[timeboxborder_color_id]',
			) ) );		
			
//////////////////
// Grid Box Bg
$wp_customize->add_setting( 'complete[gridbox_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridbox_color_id', array(
				'label' => __('Grid Box Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[gridbox_color_id]',
			) ) );	
			
// Grid Box Border
$wp_customize->add_setting( 'complete[gridboxborder_color_id]', array(
	'type' => 'option',
	'default' => '#cccccc',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridboxborder_color_id', array(
				'label' => __('Grid Box Border Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[gridboxborder_color_id]',
			) ) );			
			
// Service Box Background Color
$wp_customize->add_setting( 'complete[service_box_bg]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'service_box_bg', array(
				'label' => __('Service Box Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[service_box_bg]',
			) ) );
			
// Service Box Background Hover Color
$wp_customize->add_setting( 'complete[service_box_bg_hover]', array(
	'type' => 'option',
	'default' => '#685031',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'service_box_bg_hover', array(
				'label' => __('Service Box Background Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[service_box_bg_hover]',
			) ) );		
			
// Service Box Title & Description Color
$wp_customize->add_setting( 'complete[box_color_text]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'box_color_text', array(
				'label' => __('Service Box Title & Description Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[box_color_text]',
			) ) );	
			
// Service Box Go Button Background Color
$wp_customize->add_setting( 'complete[go_bg_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'go_bg_color', array(
				'label' => __('Service Box Go Button Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[go_bg_color]',
			) ) );			
			
// Team Expand Box Background Color
$wp_customize->add_setting( 'complete[expand_bg_color]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expand_bg_color', array(
				'label' => __('Team Expand Box Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[expand_bg_color]',
			) ) );	
			
// Square Box Background Color
$wp_customize->add_setting( 'complete[square_bg_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'square_bg_color', array(
				'label' => __('Square Box Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[square_bg_color]',
			) ) );		
			
// Square Box Background Hover Color
$wp_customize->add_setting( 'complete[square_bg_hover_color]', array(
	'type' => 'option',
	'default' => '#79ab9f',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'square_bg_hover_color', array(
				'label' => __('Square Box Background Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[square_bg_hover_color]',
			) ) );	
			
// Square Box Title Color
$wp_customize->add_setting( 'complete[square_title_color]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'square_title_color', array(
				'label' => __('Square Box Title Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[square_title_color]',
			) ) );		

// Post Style 3 Box Background Color
$wp_customize->add_setting( 'complete[style3_bg_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'style3_bg_color', array(
				'label' => __('Post Style 3 Box Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[style3_bg_color]',
			) ) );	
			
// Post Style 3 Box Hover Background Color
$wp_customize->add_setting( 'complete[style3_hover_bg_color]', array(
	'type' => 'option',
	'default' => '#9f9f9f',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'style3_hover_bg_color', array(
				'label' => __('Post Style 3 Box Hover Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[style3_hover_bg_color]',
			) ) );		
			
// Post Style 3 Box Border Color
$wp_customize->add_setting( 'complete[style3_border_color]', array(
	'type' => 'option',
	'default' => '#eaeaea',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'style3_border_color', array(
				'label' => __('Post Style 3 Box Border Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[style3_border_color]',
			) ) );	

// Homepost Title Color
$wp_customize->add_setting( 'complete[homepost_title_color]', array(
	'type' => 'option',
	'default' => '#242424',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepost_title_color', array(
				'label' => __('Home Post Title Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[homepost_title_color]',
			) ) );

// Homepost Title Hover Color
$wp_customize->add_setting( 'complete[homepost_title_hover_color]', array(
	'type' => 'option',
	'default' => '#396cf2',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepost_title_hover_color', array(
				'label' => __('Home Post Title Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[homepost_title_hover_color]',
			) ) );		

// Homepost Read More Color
$wp_customize->add_setting( 'complete[homepost_readmore_color]', array(
	'type' => 'option',
	'default' => '#396cf2',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepost_readmore_color', array(
				'label' => __('Home Post Read More Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[homepost_readmore_color]',
			) ) );
			
// Perfect Box Background Color
$wp_customize->add_setting( 'complete[perfect_bg_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'perfect_bg_color', array(
				'label' => __('Perfect Box Background Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[perfect_bg_color]',
			) ) );		
			
// Perfect Box Border Color
$wp_customize->add_setting( 'complete[perfect_border_color]', array(
	'type' => 'option',
	'default' => '#eaeaea',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'perfect_border_color', array(
				'label' => __('Perfect Box Border Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[perfect_border_color]',
			) ) );	
			
// Perfect Box Hover Border Color
$wp_customize->add_setting( 'complete[perfect_hover_border_color]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'perfect_hover_border_color', array(
				'label' => __('Perfect Box Border Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[perfect_hover_border_color]',
			) ) );	
			
// Heading Seprator Color
$wp_customize->add_setting( 'complete[h_seprator_color]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h_seprator_color', array(
				'label' => __('Heading Seprator Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[h_seprator_color]',
			) ) );	
			
// Heading Seprator Text Color
$wp_customize->add_setting( 'complete[h_seprator_text_color]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h_seprator_text_color', array(
				'label' => __('Heading Seprator Text Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[h_seprator_text_color]',
			) ) );													
										
/////////////////																				

//Sidebar Widget Title Font Size
$wp_customize->add_setting('complete[wgttitle_size_id]', array(
	'type' => 'option',
	'default' => '16px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('wgttitle_size_id', array(
				'type' => 'text',
				'label' => __('Sidebar Widget Title Font Size','complete'),
				'section' => 'postpage_color_section',
				'settings' => 'complete[wgttitle_size_id]',
			) );
			
			
//============================ Contact Page =================================

//Contact Title
$wp_customize->add_setting('complete[contact_title]', array(
	'type' => 'option',
	'default' => __('Contact Info','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'contact_title', array( 
				'type' => 'text',
				'label' => __('Contact Title','complete'), 
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_title]',
			)) );	
			
//Contact Address
$wp_customize->add_setting('complete[contact_address]', array(
	'type' => 'option',
	'default' => __('Donec ultricies mattis nulla Australia','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'contact_address', array( 
				'type' => 'textarea',
				'label' => __('Company Address','complete'),  
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_address]',
			)) );
			
//Contact Phone
$wp_customize->add_setting('complete[contact_phone]', array(
	'type' => 'option',
	'default' => __('0789 256 321','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'contact_phone', array( 
				'type' => 'text',
				'label' => __('Phone Number','complete'), 
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_phone]',
			)) );	
			
//Contact Email
$wp_customize->add_setting('complete[contact_email]', array(
	'type' => 'option',
	'default' => __('info@companyname.com','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'contact_email', array( 
				'type' => 'text',
				'label' => __('Email Address','complete'), 
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_email]',
			)) );	
			
//Company URL
$wp_customize->add_setting('complete[contact_company_url]', array(
	'type' => 'option',
	'default' => __('http://demo.com','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'contact_company_url', array( 
				'type' => 'text',
				'label' => __('Company URL with http://','complete'), 
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_company_url]',
			)) );		
			
//Google Map
$wp_customize->add_setting('complete[contact_google_map]', array(
	'type' => 'option',
	'default' => __('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d336003.6066860609!2d2.349634820486094!3d48.8576730786213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x040b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1433482358672','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'contact_google_map', array( 
				'type' => 'textarea',
				'label' => __('Google Map','complete'),  
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_google_map]',
			)) );