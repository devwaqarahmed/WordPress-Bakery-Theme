<?php 
//----------------------FRONT CONTENT SECTION----------------------------------
	$ImageUrl1 = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
	$ImageUrl2 = esc_url(get_template_directory_uri() ."/images/slides/slider2.jpg");
	$ImageUrl3 = esc_url(get_template_directory_uri() ."/images/slides/slider3.jpg");
	$ImageUrl4 = '';
	$ImageUrl5 = '';
	$ImageUrl6 = '';
	$ImageUrl7 = '';
	$ImageUrl8 = '';
	$ImageUrl9 = '';
	$ImageUrl10 = '';
//----------------------SLIDER TYPE SECTION----------------------------------

//SLIDER TYPE
$wp_customize->add_setting( 'complete[slider_type_id]', array(
		'type' => 'option',
        'default' => 'static',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
 
			$wp_customize->add_control('slider_type_id', array(
					'type' => 'select',
					'label' => __('Slider Type *','complete'),
					'description' => __('Choose the Slider type.','complete'),
					'section' => 'slider_section',
					'choices' => array(
						'static'=> __('Default Slider', 'complete'),
						'customslider'=> __('Custom Slider', 'complete'),
						'noslider'=>__('Disable Slider', 'complete')
					),
					'settings'    => 'complete[slider_type_id]'
			) );


//----------------------DEFAULT SLIDER SECTION----------------------------------


//SLIDER ANIMATION
$wp_customize->add_setting( 'complete[slideefect]', array(
		'type' => 'option',
        'default' => 'fade',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
			$wp_customize->add_control('slideefect', array(
					'type' => 'select',
					'description' => __('Slider Effect *','complete'),
					'section' => 'slider_section',
					'choices' => array(
						'fade'=> __('Fade', 'complete'),
						'random'=> __('Random', 'complete'),
						'fold'=> __('Fold', 'complete'),
						'slicedown'=> __('Slide Down', 'complete'),
						'slicedownleft'=> __('Slice Down Left', 'complete'),
						'sliceup'=> __('Slice Up', 'complete'),
						'sliceupleft'=> __('Slice Up Left', 'complete'),
						'sliceupdown'=> __('Slice Up Down', 'complete'),
						'sliceupdownleft'=> __('Slice Up Down Left', 'complete'),
						'slideinright'=> __('Slide In Right', 'complete'),
						'slideinleft'=> __('Slide In Left', 'complete'),
						'boxrandom'=> __('Box Random', 'complete'),
						'boxrain'=> __('Box Rain', 'complete'),
						'boxrainreverse'=> __('Box Rain Reverse', 'complete'),
						'boxraingrow'=> __('Box Rain Grow', 'complete'),
						'boxraingrowreverse'=> __('Box Rain Grow Reverse', 'complete'),
					),
					'settings'    => 'complete[slideefect]'
			) );

// Slide Animmation speed
$wp_customize->add_setting('complete[slideanim]', array(
	'type' => 'option',
	'default' => '700',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slideanim', array(
				'type' => 'text',
				'label' => __('Animation speed should be multiple of 100 *','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slideanim]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
			
// Slide Paustime
$wp_customize->add_setting('complete[slidepause]', array(
	'type' => 'option',
	'default' => '4000',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slidepause', array(
				'type' => 'text',
				'label' => __('Add slide pause time*','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slidepause]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );


//SLIDER NAVIGATION
$wp_customize->add_setting( 'complete[slidenav]', array(
		'type' => 'option',
        'default' => 'true',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
			$wp_customize->add_control('slidenav', array(
					'type' => 'select',
					'description' => __('Slider navigation *','complete'),
					'section' => 'slider_section',
					'choices' => array(
						'true'=> __('True', 'complete'),
						'false'=> __('False', 'complete'),
					),
					'settings'    => 'complete[slidenav]'
			) );
			
//SLIDER PAGER
$wp_customize->add_setting( 'complete[slidepage]', array(
		'type' => 'option',
        'default' => 'false',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
			$wp_customize->add_control('slidepage', array(
					'type' => 'select',
					'description' => __('Slider pagination*','complete'),
					'section' => 'slider_section',
					'choices' => array(
						'true'=> __('True', 'complete'),
						'false'=> __('False', 'complete'),
					),
					'settings'    => 'complete[slidepage]'
			) );

// Slide Title Font Family
$wp_customize->add_setting( 'complete[sldtitle_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Poppins',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldtitle_font_family', array(
					'type' => 'select',
					'label' => __('Slide Title Family','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[sldtitle_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Slide Title Font Subsets
$wp_customize->add_setting( 'complete[sldtitle_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldtitle_font_subsets', array(
					'type' => 'select',
					'label' => __('Slide Title Subsets','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[sldtitle_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// Slide Description Font Family
$wp_customize->add_setting( 'complete[slddesc_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Poppins',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slddesc_font_family', array(
					'type' => 'select',
					'label' => __('Slide Description Family','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[slddesc_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Slide Descripotion Font Subsets
$wp_customize->add_setting( 'complete[slddesc_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slddesc_font_subsets', array(
					'type' => 'select',
					'label' => __('Slide Description Subsets','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[slddesc_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// Slide Button Font Family
$wp_customize->add_setting( 'complete[sldbtn_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'AssiPoppinsstant',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldbtn_font_family', array(
					'type' => 'select',
					'label' => __('Slide Button Family','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[sldbtn_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Slide Button Font Subsets
$wp_customize->add_setting( 'complete[sldbtn_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldbtn_font_subsets', array(
					'type' => 'select',
					'label' => __('Slide Button Subsets','complete'),
					'section' => 'slider_section',
					'settings' => 'complete[sldbtn_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// Slide Title Font Size
$wp_customize->add_setting('complete[sldtitle_font_id][font-size]', array(
	'type' => 'option',
	'default' => '83px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldtitle_font_size', array(
				'type' => 'text',
				'label' => __('Slide Title Font Size','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldtitle_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// Slide Description Font Size
$wp_customize->add_setting('complete[slddesc_font_id][font-size]', array(
	'type' => 'option',
	'default' => '17px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slddesc_font_size', array(
				'type' => 'text',
				'label' => __('Slide Description Font Size','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slddesc_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );

// Slide Button Font Size
$wp_customize->add_setting('complete[sldbtn_font_id][font-size]', array(
	'type' => 'option',
	'default' => '16px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldbtn_font_size', array(
				'type' => 'text',
				'label' => __('Slide Button Font Size','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// Slide Title Color
$wp_customize->add_setting( 'complete[slidetitle_color_id]', array(
	'type' => 'option',
	'default' => '#393939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slidetitle_color_id', array(
				'label' => __('Slide Title Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slidetitle_color_id]',
			) ) );
			
// Slide Description Color
$wp_customize->add_setting( 'complete[slddesc_color_id]', array(
	'type' => 'option',
	'default' => '#393939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slddesc_color_id', array(
				'label' => __('Slide Description Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slddesc_color_id]',
			) ) );	
			
// Slide Button Text Color
$wp_customize->add_setting( 'complete[sldbtntext_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtntext_color_id', array(
				'label' => __('Slide Button Text Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtntext_color_id]',
			) ) );			
			
// Slide Button Background Color
$wp_customize->add_setting( 'complete[sldbtn_color_id]', array(
	'type' => 'option',
	'default' => '#3f71f2',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtn_color_id', array(
				'label' => __('Slide Button Background Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_color_id]',
			) ) );
			
// Slide BUtton Hoover Text Color
$wp_customize->add_setting( 'complete[sldbtn_hvtextcolor_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtn_hvtextcolor_id', array(
				'label' => __('Slide Button Hover Text Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_hvtextcolor_id]',
			) ) );
			
// Slide BUtton Hoover Bg Color
$wp_customize->add_setting( 'complete[sldbtn_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#303030',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtn_hvcolor_id', array(
				'label' => __('Slide Button Hover Background Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_hvcolor_id]',
			) ) );
			
// Slide Pager Color
$wp_customize->add_setting( 'complete[slide_pager_color_id]', array(
	'type' => 'option',
	'default' => '#393939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slide_pager_color_id', array(
				'label' => __('Slide Pager Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slide_pager_color_id]',
			) ) );		
			
// Slide Active Pager Color
$wp_customize->add_setting( 'complete[slide_active_pager_color_id]', array(
	'type' => 'option',
	'default' => '#80a500',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slide_active_pager_color_id', array(
				'label' => __('Slide Active Pager Color','complete'),
				'section' => 'slider_section',
				'settings' => 'complete[slide_active_pager_color_id]',
			) ) );

// Slide Font Typography And Colors
	
	// Slide 1 Start
	$wp_customize->add_setting( 'complete[slide_image1]',array( 
		'type' => 'option',
		'default' => $ImageUrl1,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image1',array(
			'label'       => __( 'Slide Image 1', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image1]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title1]', array(
		'type' => 'option',
		'default'	=> __('<small>Fresh Vitamin</small>Organic','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title1', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 1','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title1]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc1]', array(
		'type' => 'option',
		'default'	=> __('Pellentesque habitant mtristique senectu etuset males-<br>uada fames ac turpis egestas.','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc1', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 1','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc1]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link1]', array(
		'type' => 'option',
		'default'	=> __('#','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link1', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 1','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link1]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn1]', array(
		'type' => 'option',
		'default'	=> __('Shop Now','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn1', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 1','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn1]',
	)) );
	// Slide 1 End
	
	// Slide 2 Start
	$wp_customize->add_setting( 'complete[slide_image2]',array( 
		'type' => 'option',
		'default' => $ImageUrl2,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image2',array(
			'label'       => __( 'Slide Image 2', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image2]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title2]', array(
		'type' => 'option',
		'default'	=> __('<small>Protein suplements</small>Whey Gold','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title2', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 2','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title2]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc2]', array(
		'type' => 'option',
		'default'	=> __('Pellentesque habitant mtristique senectu etuset males-<br>uada fames ac turpis egestas.','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc2', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 2','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc2]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link2]', array(
		'type' => 'option',
		'default'	=> __('#','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link2', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 2','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link2]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn2]', array(
		'type' => 'option',
		'default'	=> __('Shop Now','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn2', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 2','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn2]',
	)) );
	// Slide 2 End
	
	// Slide 3 Start
	$wp_customize->add_setting( 'complete[slide_image3]',array( 
		'type' => 'option',
		'default' => $ImageUrl3,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image3',array(
			'label'       => __( 'Slide Image 3', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image3]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title3]', array(
		'type' => 'option',
		'default'	=> __('<small>Boost your</small>Immunity','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title3', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 3','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title3]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc3]', array(
		'type' => 'option',
		'default'	=> __('Pellentesque habitant mtristique senectu etuset males-<br>uada fames ac turpis egestas.','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc3', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 3','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc3]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link3]', array(
		'type' => 'option',
		'default'	=> __('#','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link3', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 3','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link3]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn3]', array(
		'type' => 'option',
		'default'	=> __('Shop Now','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn3', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 3','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn3]',
	)) );
	// Slide 3 End
	// Slide 4 Start
	$wp_customize->add_setting( 'complete[slide_image4]',array( 
		'type' => 'option',
		'default' => $ImageUrl4,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image4',array(
			'label'       => __( 'Slide Image 4', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image4]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title4]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title4', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 4','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title4]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc4]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc4', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 4','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc4]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link4]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link4', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 4','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link4]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn4]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn4', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 4','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn4]',
	)) );
	// Slide 4 End
	
	// Slide 5 Start
	$wp_customize->add_setting( 'complete[slide_image5]',array( 
		'type' => 'option',
		'default' => $ImageUrl5,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image5',array(
			'label'       => __( 'Slide Image 5', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image5]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title5]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title5', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 5','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title5]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc5]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc5', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 5','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc5]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link5]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link5', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 5','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link5]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn5]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn5', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 5','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn5]',
	)) );
	// Slide 5 End
	// Slide 6 Start
	$wp_customize->add_setting( 'complete[slide_image6]',array( 
		'type' => 'option',
		'default' => $ImageUrl6,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image6',array(
			'label'       => __( 'Slide Image 6', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image6]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title6]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title6', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 6','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title6]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc6]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc6', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 6','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc6]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link6]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link6', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 6','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link6]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn6]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn6', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 6','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn6]',
	)) );
	// Slide 6 End
	// Slide 7 Start
	$wp_customize->add_setting( 'complete[slide_image7]',array( 
		'type' => 'option',
		'default' => $ImageUrl7,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image7',array(
			'label'       => __( 'Slide Image 7', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image7]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title7]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title7', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 7','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title7]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc7]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc7', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 7','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc7]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link7]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link7', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 7','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link7]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn7]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn7', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 7','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn7]',
	)) );
	// Slide 7 End
	// Slide 8 Start
	$wp_customize->add_setting( 'complete[slide_image8]',array( 
		'type' => 'option',
		'default' => $ImageUrl8,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image8',array(
			'label'       => __( 'Slide Image 8', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image8]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title8]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title8', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 8','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title8]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc8]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc8', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 8','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc8]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link8]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link8', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 8','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link8]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn8]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn8', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 8','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn8]',
	)) );
	// Slide 8 End
	// Slide 9 Start
	$wp_customize->add_setting( 'complete[slide_image9]',array( 
		'type' => 'option',
		'default' => $ImageUrl9,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image9',array(
			'label'       => __( 'Slide Image 9', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image9]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title9]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title9', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 9','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title9]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc9]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc9', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 9','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc9]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link9]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link9', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 9','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link9]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn9]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn9', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 9','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn9]',
	)) );
	// Slide 9 End
	
	// Slide 10 Start
	$wp_customize->add_setting( 'complete[slide_image10]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image10',array(
			'label'       => __( 'Slide Image 10', 'complete' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image10]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title10]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title10', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 10','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title10]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc10]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc10', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 10','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc10]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link10]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link10', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 10','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link10]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn10]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn10', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 10','complete'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn10]',
	)) );
	// Slide 10 End									
 
//----------------------CUSTOM SLIDER SECTION----------------------------------	

$wp_customize->add_setting('complete[custom_slider]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'custom_slider', array( 
				'type' => 'textarea',
				'label' => __('Custom Slider Shortcode','complete'), 
				'section' => 'slider_section',
				'settings' => 'complete[custom_slider]',
			)) );		

//---------------SLIDER CALLBACK-------------------//
function complete_slider_static( $control ) {
    $layout_setting = $control->manager->get_setting('complete[slider_type_id]')->value();
     
    if ( $layout_setting == 'static' ) return true;
     
    return false;
}
function complete_slider_nivoacc( $control ) {
    $layout_setting = $control->manager->get_setting('complete[slider_type_id]')->value();
     
    if ( $layout_setting == 'accordion' || $layout_setting == 'nivo' ) return true;
     
    return false;
}