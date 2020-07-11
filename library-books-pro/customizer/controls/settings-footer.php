<?php


//============================FOOTER SECTION=================================

//Scroll To Top Button
$wp_customize->add_setting('complete[totop_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'totop_id', array(
				'label' => __('Scroll To Top Button','complete'),
				'description' => __( 'Turn On/Off The button that appears on bottom right when you scroll down to pages.', 'complete' ),
				'section' => 'footercolors_section',
				'settings' => 'complete[totop_id]',
			)) );


// Footer Background Color
$wp_customize->add_setting( 'complete[footer_color_id]', array(
	'type' => 'option',
	'default' => '#111111',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_color_id', array(
				'label' => __('Footer Background Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_color_id]',
			) ) );

// Footer Background Image
	$wp_customize->add_setting( 'complete[footer_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_bg_image',array(
			'label'       => __( 'Footer Background Image', 'complete' ),
			'section'     => 'footercolors_section',
			'settings'    => 'complete[footer_bg_image]'
				)
			)
	);

//FOOTER Widget Text Color
$wp_customize->add_setting( 'complete[footwdgtxt_color_id]', array(
	'type' => 'option',
	'default' => '#838282',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footwdgtxt_color_id', array(
				'label' => __('Footer Text Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footwdgtxt_color_id]',
			) ) );


//FOOTER Widget Title Color
$wp_customize->add_setting( 'complete[footer_title_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_title_color', array(
				'label' => __('Footer Title Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_title_color]',
			) ) );
			
			
			
//Footer Info Box
$wp_customize->add_setting( 'complete[footer_info_bgcolor]', array(
	'type' => 'option',
	'default' => '#070707',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_info_bgcolor', array(
				'label' => __('Footer Info Box Background Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_info_bgcolor]',
			) ) );
			
$wp_customize->add_setting( 'complete[footer_info_iconcolor]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_info_iconcolor', array(
				'label' => __('Footer Info Icon Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_info_iconcolor]',
			) ) );	
			
$wp_customize->add_setting( 'complete[footer_info_titlecolor]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_info_titlecolor', array(
				'label' => __('Footer Info Title Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_info_titlecolor]',
			) ) );		
			
$wp_customize->add_setting( 'complete[footer_info_desccolor]', array(
	'type' => 'option',
	'default' => '#757575',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_info_desccolor', array(
				'label' => __('Footer Info Description Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_info_desccolor]',
			) ) );	
			
			
			
$wp_customize->add_setting( 'complete[footer_info_shrtcolor]', array(
	'type' => 'option',
	'default' => '#f19100',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_info_shrtcolor', array(
				'label' => __('Footer Info Box Short Border Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_info_shrtcolor]',
			) ) );
			
$wp_customize->add_setting( 'complete[footer_info_dividercolor]', array(
	'type' => 'option',
	'default' => '#1f1f1f',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_info_dividercolor', array(
				'label' => __('Footer Info Box Divider Border Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_info_dividercolor]',
			) ) );
			
$wp_customize->add_setting( 'complete[footer_menu_color]', array(
	'type' => 'option',
	'default' => '#838282',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_color', array(
				'label' => __('Footer Menu Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_menu_color]',
			) ) );
			
$wp_customize->add_setting( 'complete[footer_menu_hover_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_hover_color', array(
				'label' => __('Footer Menu Hover Color','complete'),
				'section' => 'footercolors_section',
				'settings' => 'complete[footer_menu_hover_color]',
			) ) );
			
//FOOTER LAYOUT SELECT
$wp_customize->add_setting('complete[foot_layout_id]', array(
		'type' => 'option',
        'default' => '3',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
 
			$wp_customize->add_control( new complete_Control_Radio_Image( $wp_customize, 'foot_layout_id', array(
					'type' => 'radio-image',
					'label' => __('Footer Layout','complete'),
					'section' => 'footercolors_section',
					'settings' => 'complete[foot_layout_id]',
					'choices' => array(
						'1' => array( 'url' => get_template_directory_uri().'/assets/images/foot-1-col.jpg', 'label' => 'Layout 1' ),
						'2' => array( 'url' => get_template_directory_uri().'/assets/images/foot-2-col.jpg', 'label' => 'Layout 2' ),
						'3' => array( 'url' => get_template_directory_uri().'/assets/images/foot-3-col.jpg', 'label' => 'Layout 3' ),
						'4' => array( 'url' => get_template_directory_uri().'/assets/images/foot-4-col.jpg', 'label' => 'Layout 4' ),
						'5' => array( 'url' => get_template_directory_uri().'/assets/images/foot-no-col.jpg', 'label' => 'No Columns' ),
					),
			) ));			
			
//----------------------Footer Columns 1----------------------------------
	$wp_customize->add_setting('complete[foot_cols1_title]', array(
		'type' => 'option',
		'default'	=> __('ABOUT LIBRARY BOOKS','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_cols1_title', array( 
		'type' => 'text',
		'label'	=> __('Columns 1 Title','complete'),
		'section' => 'footer_columns_section',
		'settings' => 'complete[foot_cols1_title]',
	)) );	
	
$wp_customize->add_setting('complete[foot_cols1_content]', array(
	'type' => 'option',
	'default' => '<p>Aliquam porta tincidunt enim. Sed temporing nulla sedding facilis egestas, lorem lacus and elementum mi, malesuada ornare ipsum erat convallis ipsum orem lacus elementum porta tincidunt enim. </p>
<p>Aenean ac convallis nibh. In non arcu vel lacus fringilla tempus. Nullam dictum placerat nisi...</p>',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'foot_cols1_content', array( 
				'type' => 'editor',
				'label' => __('Columns 1 Content','complete'), 
				'section' => 'footer_columns_section',
				'settings' => 'complete[foot_cols1_content]',
			)) );	
 	 
//----------------------Footer Columns 1----------------------------------		

//----------------------Footer Columns 2----------------------------------
	$wp_customize->add_setting('complete[foot_cols2_title]', array(
		'type' => 'option',
		'default'	=> __('NAVIGATION','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_cols2_title', array( 
		'type' => 'text',
		'label'	=> __('Columns 2 Title','complete'),
		'section' => 'footer_columns_section',
		'settings' => 'complete[foot_cols2_title]',
	)) );	
	
$wp_customize->add_setting('complete[foot_cols2_content]', array(
	'type' => 'option',
	'default' => '[footermenu menu="footer"]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'foot_cols2_content', array( 
				'type' => 'editor',
				'label' => __('Columns 2 Content','complete'), 
				'section' => 'footer_columns_section',
				'settings' => 'complete[foot_cols2_content]',
			)) );	
 	 
//----------------------Footer Columns 2----------------------------------	

//----------------------Footer Columns 3----------------------------------
	$wp_customize->add_setting('complete[foot_cols3_title]', array(
		'type' => 'option',
		'default'	=> __('RECENT POSTS','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_cols3_title', array( 
		'type' => 'text',
		'label'	=> __('Columns 3 Title','complete'),
		'section' => 'footer_columns_section',
		'settings' => 'complete[foot_cols3_title]',
	)) );	
	
$wp_customize->add_setting('complete[foot_cols3_content]', array(
	'type' => 'option',
	'default' => '[footerposts show="2"]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'foot_cols3_content', array( 
				'type' => 'editor',
				'label' => __('Columns 3 Content','complete'), 
				'section' => 'footer_columns_section',
				'settings' => 'complete[foot_cols3_content]',
			)) );	
 	 
//----------------------Footer Columns 3----------------------------------	

//----------------------Footer Columns 4----------------------------------
	$wp_customize->add_setting('complete[foot_cols4_title]', array(
		'type' => 'option',
		'default'	=> __('CONTACT US','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_cols4_title', array( 
		'type' => 'text',
		'label'	=> __('Columns 4 Title','complete'),
		'section' => 'footer_columns_section',
		'settings' => 'complete[foot_cols4_title]',
	)) );	
	
$wp_customize->add_setting('complete[foot_cols4_content]', array(
	'type' => 'option',
	'default' => '<p>Street 238,52 tempor Donec ultricies mattis nulla, suscipit risus tristique ut.</p><div class="spacecode" id="" style="height:10px;"></div><p style="margin-bottom: 10px;"><span style="margin-right: 20px;">Phone:</span> 1.800.555.6789</p><p style="margin-bottom: 10px;"><span style="margin-right: 21px;">E-mail:</span> <a href="mailto:support@sitename.com">support@sitename.com</a></p><p style="margin-bottom: 10px;"><span style="margin-right: 11px;">Website:</span> <a href="https://www.pinnaclethemes.net">pinnaclethemes.net</a></p>',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'foot_cols4_content', array( 
				'type' => 'editor',
				'label' => __('Columns 4 Content','complete'), 
				'section' => 'footer_columns_section',
				'settings' => 'complete[foot_cols4_content]',
			)) );	
 	 
//----------------------Footer Columns 4----------------------------------	



//----------------------Footer Info Box ----------------------------------
	$wp_customize->add_setting('complete[foot_infobox1_heading]', array(
		'type' => 'option',
		'default'	=> __('VISIT US','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_infobox1_heading', array( 
		'type' => 'text',
		'label'	=> __('Column 1 Heading','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[foot_infobox1_heading]',
	)) );
	
	$wp_customize->add_setting('complete[foot_infobox1_icon]', array(
		'type' => 'option',
		'default'	=> __('<i class="fa fa-map-o" aria-hidden="true"></i>','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_infobox1_icon', array( 
		'type' => 'text',
		'label'	=> __('Column 1 Icon','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[foot_infobox1_icon]',
	)) );	
	
	$wp_customize->add_setting('complete[foot_infobox1_description]', array(
		'type' => 'option',
		'default'	=> __('Aliquam porta tincidunt enim.','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_infobox1_description', array( 
		'type' => 'textarea',
		'label'	=> __('Column 1 Description','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[foot_infobox1_description]',
	)) );
	
	
	
	$wp_customize->add_setting('complete[foot_infobox2_heading]', array(
		'type' => 'option',
		'default'	=> __('EMAIL US','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_infobox2_heading', array( 
		'type' => 'text',
		'label'	=> __('Column 2 Heading','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[foot_infobox2_heading]',
	)) );
	
	$wp_customize->add_setting('complete[foot_infobox2_icon]', array(
		'type' => 'option',
		'default'	=> __('<i class="fa fa-envelope-o" aria-hidden="true"></i>','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_infobox2_icon', array( 
		'type' => 'text',
		'label'	=> __('Column 2 Icon','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[foot_infobox2_icon]',
	)) );	
	
	$wp_customize->add_setting('complete[foot_infobox2_description]', array(
		'type' => 'option',
		'default'	=> __('info@sitename.com','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_infobox2_description', array( 
		'type' => 'textarea',
		'label'	=> __('Column 2 Description','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[foot_infobox2_description]',
	)) );	
	
	$wp_customize->add_setting('complete[foot_infobox3_heading]', array(
		'type' => 'option',
		'default'	=> __('CALL US','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_infobox3_heading', array( 
		'type' => 'text',
		'label'	=> __('Column 3 Heading','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[foot_infobox3_heading]',
	)) );
	
	$wp_customize->add_setting('complete[foot_infobox3_icon]', array(
		'type' => 'option',
		'default'	=> __('<i class="fa fa-phone" aria-hidden="true"></i>','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_infobox3_icon', array( 
		'type' => 'text',
		'label'	=> __('Column 3 Icon','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[foot_infobox3_icon]',
	)) );	
	
	$wp_customize->add_setting('complete[foot_infobox3_description]', array(
		'type' => 'option',
		'default'	=> __('987 685 4528','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'foot_infobox3_description', array( 
		'type' => 'textarea',
		'label'	=> __('Column 3 Description','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[foot_infobox3_description]',
	)) );	
	
	
// Hide Section
	$wp_customize->add_setting('complete[hide_foot_infobox]',array(
			'type' => 'option',
			'default' => '0',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_foot_infobox', array(
		'label' => __('Hide This Section','complete'),
		'section' => 'footer_infobox_section',
		'settings' => 'complete[hide_foot_infobox]',
	)) );	

//----------------------------COPYRIGHT SECTION------------------------------

//Footer Copyright Text
$wp_customize->add_setting('complete[footer_text_id]', array(
	'type' => 'option',
	'default' => __('&copy; Copyright 2018 Library Books Pro. All Rights Reserved. Designed by <a href="https://www.pinnaclethemes.net/" target="_blank" rel="nofollow">Pinnacle Themes</a>','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Editor_Control( $wp_customize, 'footer_text_id', array( 
				'type' => 'editor',
				'label' => __('Footer Copyright Text','complete'),
				'section' => 'copyright_section',
				'settings' => 'complete[footer_text_id]',
			)) );


//Copyright Area Background
$wp_customize->add_setting( 'complete[copyright_bg_color]', array(
	'type' => 'option',
	'default' => '#070707',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_bg_color', array(
				'label' => __('Copyright Area Background','complete'),
				'section' => 'copyright_section',
				'settings' => 'complete[copyright_bg_color]',
			) ) );

//Copyright Text Color
$wp_customize->add_setting( 'complete[copyright_txt_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_txt_color', array(
				'label' => __('Copyright Text Color','complete'),
				'section' => 'copyright_section',
				'settings' => 'complete[copyright_txt_color]',
			) ) );