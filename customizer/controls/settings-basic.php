<?php
	
	// Register the radio image control class as a JS control type.
	$wp_customize->register_control_type( 'complete_Control_Radio_Image' );


//----------------------SITE LAYOUT SECTION----------------------------------

//DROP SHADOW FIELD
$wp_customize->add_setting('complete[converted]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	//'transport' => 'postMessage',
) );

			$wp_customize->add_control( 'converted', array(
				'type' => 'text',
				'label' => __('Converted to Latest Version','complete'),
				'section' => 'layout_section',
				'settings' => 'complete[converted]',
			) );
			



// Add the layout setting.
$wp_customize->add_setting('complete[site_layout_id]', array(
		'type' => 'option',
		'default'           => 'site_full',
		'sanitize_callback' => 'sanitize_key',
	)
);

		  // Add the layout control.
		  $wp_customize->add_control('site_layout_id',array(
						'type' => 'select',
						'label'    => esc_html__( 'Site Layout *', 'complete' ),
						'section'  => 'layout_section',
						'settings' => 'complete[site_layout_id]',
						'choices'  => array(
							'site_full' => __('Full Width', 'complete'), 
							'site_boxed' => __('Boxed', 'complete'), 
					  )
			  ) );
			  
//CONTENT BACKGOURND WIDTH
$wp_customize->add_setting( 'complete[center_width]', array(
		'type' => 'option',
        'default' => '85',
		'sanitize_callback' => 'complete_sanitize_number',
		//'transport' => 'postMessage',
) );
 
			$wp_customize->add_control('center_width', array(
					'type' => 'range',
					'label' => __('Box Width *','complete'),
					'section' => 'layout_section',
					'input_attrs' => array(
						'min' => 30,
						'max' => 100,
						'step' => 10,
						'class' => 'range-textbox_width',
						'style' => 'color: #0a0',
					),
					'settings'    => 'complete[center_width]',
					'active_callback' => 'complete_layout_callback',
			) );
 
//---------General Color SETTINGS---------------------	

//Fixed Background Image
$wp_customize->add_setting('complete[background_fixed]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'background_fixed', array(
				'label' => __('Fixed Background Image','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[background_fixed]',
			)) );



//Site content Text Color
$wp_customize->add_setting( 'complete[primtxt_color_id]', array(
	'type' => 'option',
	'default' => '#2b2b2b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primtxt_color_id', array(
				'label' => __('Site content Text Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[primtxt_color_id]',
			) ) );

//BASE COLOR
$wp_customize->add_setting( 'complete[sec_color_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sec_color_id', array(
				'label' => __('Other Elements Background','complete'),
				'description' => __( 'Affects Posts hover color, Search button background Color, Widget Title border color, Comments Submit button color.', 'complete' ),
				'section' => 'general_color_section',
				'settings' => 'complete[sec_color_id]',
			) ) );


//TEXT COLOR ON BASE COLOR
$wp_customize->add_setting( 'complete[sectxt_color_id]', array(
	'type' => 'option',
	'default' => '#FFFFFF',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sectxt_color_id', array(
				'label' => __('Other Elements Text Color','complete'),
				'description' => __( 'Affects Front page post hover text color, Search button text color.', 'complete' ),
				'section' => 'general_color_section',
				'settings' => 'complete[sectxt_color_id]',
			) ) );
			
// Link Color
$wp_customize->add_setting( 'complete[global_link_color_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_link_color_id', array(
				'label' => __('Default Anchor Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_link_color_id]',
			) ) );
			
// Link Hover Color
$wp_customize->add_setting( 'complete[global_link_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#999999',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_link_hvcolor_id', array(
				'label' => __('Default Anchor Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_link_hvcolor_id]',
			) ) );		
			
// H1 Color
$wp_customize->add_setting( 'complete[global_h1_color_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h1_color_id', array(
				'label' => __('H1 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h1_color_id]',
			) ) );
			
// H1 Hover Color
$wp_customize->add_setting( 'complete[global_h1_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h1_hvcolor_id', array(
				'label' => __('H1 Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h1_hvcolor_id]',
			) ) );

// H2 Color
$wp_customize->add_setting( 'complete[global_h2_color_id]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h2_color_id', array(
				'label' => __('H2 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h2_color_id]',
			) ) );
			
// H2 Hover Color
$wp_customize->add_setting( 'complete[global_h2_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h2_hvcolor_id', array(
				'label' => __('H2 Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h2_hvcolor_id]',
			) ) );
			
// H3 Color
$wp_customize->add_setting( 'complete[global_h3_color_id]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h3_color_id', array(
				'label' => __('H3 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h3_color_id]',
			) ) );
			
// H3 Hover Color
$wp_customize->add_setting( 'complete[global_h3_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h3_hvcolor_id', array(
				'label' => __('H3 Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h3_hvcolor_id]',
			) ) );
			
// H4 Color
$wp_customize->add_setting( 'complete[global_h4_color_id]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h4_color_id', array(
				'label' => __('H4 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h4_color_id]',
			) ) );
			
// H4 Hover Color
$wp_customize->add_setting( 'complete[global_h4_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h4_hvcolor_id', array(
				'label' => __('H4 Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h4_hvcolor_id]',
			) ) );	
			
// H5 Color
$wp_customize->add_setting( 'complete[global_h5_color_id]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h5_color_id', array(
				'label' => __('H5 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h5_color_id]',
			) ) );
			
// H5 Hover Color
$wp_customize->add_setting( 'complete[global_h5_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h5_hvcolor_id', array(
				'label' => __('H5 Hover Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h5_hvcolor_id]',
			) ) );								
// H6 Color
$wp_customize->add_setting( 'complete[global_h6_color_id]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h6_color_id', array(
				'label' => __('H6 Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h6_color_id]',
			) ) );
			
// H6 Hover Color
$wp_customize->add_setting( 'complete[global_h6_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h6_hvcolor_id', array(
	'label' => __('H6 Hover Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[global_h6_hvcolor_id]',
) ) );
			
// Post Meta Color
$wp_customize->add_setting( 'complete[post_meta_color_id]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta_color_id', array(
	'label' => __('Post Meta Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[post_meta_color_id]',
) ) );	

/*--------Home Product Section Color Setting--------*/	
// Home Product Box Background Color
	$wp_customize->add_setting( 'complete[product_box_bgcolor]', array(
		'type' => 'option',
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_box_bgcolor', array(
		'label' => __('Home Product Box Background Color','complete'),
		'section' => 'general_color_section',
		'settings' => 'complete[product_box_bgcolor]',
	)) );

// Home Product Box Hover Background Color
	$wp_customize->add_setting( 'complete[product_box_hover_bgcolor]', array(
		'type' => 'option',
		'default' => '#396cf2',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_box_hover_bgcolor', array(
		'label' => __('Home Product Box Hover Background Color','complete'),
		'section' => 'general_color_section',
		'settings' => 'complete[product_box_hover_bgcolor]',
	)) );
	
// Home Product Title Color
	$wp_customize->add_setting( 'complete[product_title_color]', array(
		'type' => 'option',
		'default' => '#282828',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_title_color', array(
		'label' => __('Home Product Title Color','complete'),
		'section' => 'general_color_section',
		'settings' => 'complete[product_title_color]',
	)) );

// Home Product Title Hover Color
	$wp_customize->add_setting( 'complete[product_price_color]', array(
		'type' => 'option',
		'default' => '#396cf2',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_price_color', array(
		'label' => __('Home Product Price Color','complete'),
		'section' => 'general_color_section',
		'settings' => 'complete[product_price_color]',
	)) );

// Home Product Button Color
	$wp_customize->add_setting( 'complete[product_cartbtn_color]', array(
		'type' => 'option',
		'default' => '#454545',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_cartbtn_color', array(
		'label' => __('Home Product Button Color','complete'),
		'section' => 'general_color_section',
		'settings' => 'complete[product_cartbtn_color]',
	)) );

// Home Product Button Background Color
	$wp_customize->add_setting( 'complete[product_cartbtn_bgcolor]', array(
		'type' => 'option',
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_cartbtn_bgcolor', array(
		'label' => __('Home Product Button Background Color','complete'),
		'section' => 'general_color_section',
		'settings' => 'complete[product_cartbtn_bgcolor]',
	)) );

/*--------Home Product Section End--------*/

/*--------Home Coupon Slider--------*/
// Home Coupon Slider Title Color
$wp_customize->add_setting( 'complete[home_couponslider_title_color]', array(
	'type' => 'option',
	'default' => '#242424',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_couponslider_title_color', array(
	'label' => __('Home Coupon Slider Title Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[home_couponslider_title_color]',
)) );
// Home Coupon Slider Text Color
$wp_customize->add_setting( 'complete[home_couponslider_text_color]', array(
	'type' => 'option',
	'default' => '#5e5e5e',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_couponslider_text_color', array(
	'label' => __('Home Coupon Slider Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[home_couponslider_text_color]',
)) );	
// Home Coupon Slider Button Color
$wp_customize->add_setting( 'complete[home_couponslider_btn_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_couponslider_btn_color', array(
	'label' => __('Home Coupon Slider Button Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[home_couponslider_btn_color]',
)) );
// Home Coupon Slider Button Background Color
$wp_customize->add_setting( 'complete[home_couponslider_btn_bgcolor]', array(
	'type' => 'option',
	'default' => '#396CF2',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_couponslider_btn_bgcolor', array(
	'label' => __('Home Coupon Slider Button Background Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[home_couponslider_btn_bgcolor]',
)) );
// Home Coupon Slider Button Hover Color
$wp_customize->add_setting( 'complete[home_couponslider_btn_hcolor]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_couponslider_btn_hcolor', array(
	'label' => __('Home Coupon Slider Button Hover Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[home_couponslider_btn_hcolor]',
)) );
// Home Coupon Slider Button Hover Background Color
$wp_customize->add_setting( 'complete[home_couponslider_btn_hbgcolor]', array(
	'type' => 'option',
	'default' => '#2A2A2A',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_couponslider_btn_hbgcolor', array(
	'label' => __('Home Coupon Slider Button Hover Background Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[home_couponslider_btn_hbgcolor]',
)) );
// Home Coupon Slider Pager Color
$wp_customize->add_setting( 'complete[home_couponslider_pager_color]', array(
	'type' => 'option',
	'default' => '#396cf2',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_couponslider_pager_color', array(
	'label' => __('Home Coupon Slider Pager Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[home_couponslider_pager_color]',
)) );
// Home Coupon Slider Pager Color
$wp_customize->add_setting( 'complete[home_couponslider_active_pager_color]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_couponslider_active_pager_color', array(
	'label' => __('Home Coupon Slider Active Pager Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[home_couponslider_active_pager_color]',
)) );

// Team Box Background Color
$wp_customize->add_setting( 'complete[team_box_color_id]', array(
	'type' => 'option',
	'default' => '#f7f7f7',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_box_color_id', array(
	'label' => __('Team Box Background Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[team_box_color_id]',
)) );	

///
// Social Icon Color
$wp_customize->add_setting( 'complete[social_text_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_text_color_id', array(
	'label' => __('Social Icon Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_text_color_id]',
) ) );
///

// Social Icon Background Color
$wp_customize->add_setting( 'complete[social_icon_color_id]', array(
	'type' => 'option',
	'default' => '#2e2e2e',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_icon_color_id', array(
	'label' => __('Social Icon Bgcolor','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_icon_color_id]',
) ) );

// Social Icon Hover Background Color
$wp_customize->add_setting( 'complete[social_hover_icon_color_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_hover_icon_color_id', array(
	'label' => __('Social Icon Hover Bgcolor','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_hover_icon_color_id]',
) ) );

// Testimonial Box Background Color
$wp_customize->add_setting( 'complete[testimonialbox_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonialbox_color_id', array(
	'label' => __('Testimonial Box Bgcolor','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonialbox_color_id]',
) ) );

// Testimonial Box Title colo
$wp_customize->add_setting( 'complete[testimonialbox_title_color]', array(
	'type' => 'option',
	'default' => '#242424',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonialbox_title_color', array(
	'label' => __('Testimonial Box Title color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonialbox_title_color]',
) ) );

// Testimonial Box Designation color
$wp_customize->add_setting( 'complete[testimonialbox_desig_color]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonialbox_desig_color', array(
	'label' => __('Testimonial Box Designation color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonialbox_desig_color]',
) ) );

// Testimonial Box Text color
$wp_customize->add_setting( 'complete[testimonialbox_txt_color]', array(
	'type' => 'option',
	'default' => '#5e5e5e',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonialbox_txt_color', array(
	'label' => __('Testimonial Box Text color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonialbox_txt_color]',
) ) );

////////////////////////////////////////////////

// Testimonial Box Text Color
$wp_customize->add_setting( 'complete[testimonialbox_txt_color]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonialbox_txt_color', array(
	'label' => __('Testimonial Box Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonialbox_txt_color]',
) ) );

///////////////////////////////////////////////

// Testimonial Pager Background Color
$wp_customize->add_setting( 'complete[testimonial_pager_color_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_pager_color_id', array(
	'label' => __('Testimonial Pager Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonial_pager_color_id]',
) ) );

// Testimonial Active Pager Background Color
$wp_customize->add_setting( 'complete[testimonial_activepager_color_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_activepager_color_id', array(
	'label' => __('Testimonial Active Pager Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonial_activepager_color_id]',
) ) );

// Gallery Filter Color
$wp_customize->add_setting( 'complete[gallery_filtertxt_color_id]', array(
	'type' => 'option',
	'default' => '#909090',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_filtertxt_color_id', array(
	'label' => __('Gallery Filter Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_filtertxt_color_id]',
) ) );


// Gallery Filter Color
$wp_customize->add_setting( 'complete[gallery_activefiltertxt_color_id]', array(
	'type' => 'option',
	'default' => '#f1b500',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_activefiltertxt_color_id', array(
	'label' => __('Gallery Filter Active Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_activefiltertxt_color_id]',
) ) );

// Gallery Title Color
$wp_customize->add_setting( 'complete[gallery_title_color_id]', array(
	'type' => 'option',
	'default' => '#fff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_title_color_id', array(
	'label' => __('Gallery Title Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_title_color_id]',
) ) );

// Gallery Title Background Color
$wp_customize->add_setting( 'complete[gallery_title_bg_color_id]', array(
	'type' => 'option',
	'default' => '#64b744',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_title_bg_color_id', array(
	'label' => __('Gallery Title Background Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_title_bg_color_id]',
) ) );

// Skills Bar Background Color
$wp_customize->add_setting( 'complete[skillsbar_bgcolor_id]', array(
	'type' => 'option',
	'default' => '#f8f8f8',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'skillsbar_bgcolor_id', array(
	'label' => __('Skills Bar Background Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[skillsbar_bgcolor_id]',
) ) );

// Skills Bar Text Color
$wp_customize->add_setting( 'complete[skillsbar_text_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'skillsbar_text_color_id', array(
	'label' => __('Skills Bar Text Color','complete'),
	'section' => 'general_color_section',
	'settings' => 'complete[skillsbar_text_color_id]',
) ) );

//---------TYPOGRAPHY SETTINGS---------------------	

// Site Content Font Family
$wp_customize->add_setting( 'complete[content_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'transport' => 'postMessage',
	'sanitize_callback' => 'esc_attr',
	
) );
			$wp_customize->add_control('content_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[content_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Site Content Font Subsets
$wp_customize->add_setting( 'complete[content_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('content_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[content_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );


//Site Content Font Size
$wp_customize->add_setting('complete[content_font_id][font-size]', array(
	'type' => 'option',
	'default' => '15px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('content_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[content_font_id][font-size]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );
//--------------------All Headings Fonts Family And Size----------------------			
// H1 Font Family
$wp_customize->add_setting( 'complete[global_h1_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h1_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h1_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H1 Font Subsets
$wp_customize->add_setting( 'complete[global_h1_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h1_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h1_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H1 Font Size
$wp_customize->add_setting('complete[global_h1_font_id][font-size]', array(
	'type' => 'option',
	'default' => '32px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h1_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h1_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );	
			
// H2 Font Family
$wp_customize->add_setting( 'complete[global_h2_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h2_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h2_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H2 Font Subsets
$wp_customize->add_setting( 'complete[global_h2_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h2_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h2_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H2 Font Size
$wp_customize->add_setting('complete[global_h2_font_id][font-size]', array(
	'type' => 'option',
	'default' => '28px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h2_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h2_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H3 Font Family
$wp_customize->add_setting( 'complete[global_h3_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h3_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h3_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H3 Font Subsets
$wp_customize->add_setting( 'complete[global_h3_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h3_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h3_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H3 Font Size
$wp_customize->add_setting('complete[global_h3_font_id][font-size]', array(
	'type' => 'option',
	'default' => '24px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h3_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h3_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H4 Font Family
$wp_customize->add_setting( 'complete[global_h4_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h4_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h4_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H4 Font Subsets
$wp_customize->add_setting( 'complete[global_h4_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h4_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h4_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H4 Font Size
$wp_customize->add_setting('complete[global_h4_font_id][font-size]', array(
	'type' => 'option',
	'default' => '13px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h4_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h4_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H5 Font Family
$wp_customize->add_setting( 'complete[global_h5_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h5_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h5_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H5 Font Subsets
$wp_customize->add_setting( 'complete[global_h5_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h5_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h5_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H5 Font Size
$wp_customize->add_setting('complete[global_h5_font_id][font-size]', array(
	'type' => 'option',
	'default' => '11px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h5_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h5_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H6 Font Family
$wp_customize->add_setting( 'complete[global_h6_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h6_font_family', array(
					'type' => 'select',
					'label' => __('Family','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h6_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H6 Font Subsets
$wp_customize->add_setting( 'complete[global_h6_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h6_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','complete'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h6_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H6 Font Size
$wp_customize->add_setting('complete[global_h6_font_id][font-size]', array(
	'type' => 'option',
	'default' => '9px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h6_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h6_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );																		

//Turn All Headings to Uppercase
$wp_customize->add_setting('complete[txt_upcase_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'txt_upcase_id', array(
				'label' => __('Turn All Headings to Uppercase','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[txt_upcase_id]',
			)) );



//---------------LAYOUT CALLBACK-------------------//
function complete_layout_callback( $control ) {
    $layout_setting = $control->manager->get_setting('complete[site_layout_id]')->value();
     
    if ( $layout_setting == 'site_boxed' ) return true;
     
    return false;
}


//---------------HEADER CALLBACK-------------------//
function complete_transparent_header_callback( $control ) {
    $header_setting = $control->manager->get_setting('complete[head_transparent]')->value();
     
    if ( $header_setting == 1 ) return true;
     
    return false;
}
