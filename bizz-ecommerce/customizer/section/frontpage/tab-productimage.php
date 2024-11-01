<?php
$wp_customize->add_setting( 'bizz_ecommerce_disable_product_img_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_disable_product_img_sec', array(
                'label'                 => esc_html__('Disable Section', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_product_tab_image',
                'settings'              => 'bizz_ecommerce_disable_product_img_sec',
 ) ) );

// section heading
$wp_customize->add_setting('bizz_ecommerce_product_img_sec_heading', array(
        'default' => __('New Product','bizz-ecommerce'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'bizz_ecommerce_product_img_sec_heading', array(
        'label'    => __('Section Heading', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_product_tab_image',
         'type'       => 'text',
));

// section subheading
$wp_customize->add_setting('bizz_ecommerce_product_img_sec_subheading', array(
        'default' => __('COMMING SOON','bizz-ecommerce'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'bizz_ecommerce_product_img_sec_subheading', array(
        'label'    => __('Section Sub Heading', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_product_tab_image',
         'type'       => 'text',
));

//= Choose All Category  =   
    if (class_exists( 'Bizz_Ecommerce_Customize_Control_Checkbox_Multiple')){
   $wp_customize->add_setting('bizz_ecommerce_product_img_sec_cat_list', array(
        'default'           => '',
        'sanitize_callback' => 'bizz_ecommerce_checkbox_explode'
    ));
    $wp_customize->add_control(new Bizz_Ecommerce_Customize_Control_Checkbox_Multiple(
            $wp_customize,'bizz_ecommerce_product_img_sec_cat_list', array(
        'settings'=> 'bizz_ecommerce_product_img_sec_cat_list',
        'label'   => __( 'Choose Categories To Show', 'bizz-ecommerce' ),
        'section' => 'bizz_ecommerce_product_tab_image',
        'choices' => bizz_ecommerce_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  

$wp_customize->add_setting('bizz_ecommerce_product_img_sec_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_select',
    ));
$wp_customize->add_control( 'bizz_ecommerce_product_img_sec_optn', array(
        'settings' => 'bizz_ecommerce_product_img_sec_optn',
        'label'   => __('Choose Option','open-mart'),
        'section' => 'bizz_ecommerce_product_tab_image',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','bizz-ecommerce'),
        'featured'   => __('Featured','bizz-ecommerce'),
        'random'     => __('Random','bizz-ecommerce'),
            
        ),
    ));

// Add an option to disable the logo.
  $wp_customize->add_setting( 'bizz_ecommerce_product_img_sec_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'bizz_ecommerce_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Bizz_Ecommerce_Toggle_Control( $wp_customize, 'bizz_ecommerce_product_img_sec_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'bizz-ecommerce' ),
    'section'     => 'bizz_ecommerce_product_tab_image',
    'type'        => 'toggle',
    'settings'    => 'bizz_ecommerce_product_img_sec_slider_optn',
  ) ) );

  $wp_customize->add_setting('bizz_ecommerce_product_img_sec_adimg', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'bizz_ecommerce_product_img_sec_adimg', array(
        'label'          => __('Upload Image', 'bizz-ecommerce'),
        'section'        => 'bizz_ecommerce_product_tab_image',
        'settings'       => 'bizz_ecommerce_product_img_sec_adimg',
 )));

$wp_customize->add_setting('bizz_ecommerce_product_img_sec_side', array(
        'default'        => 'left',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_select',
    ));
$wp_customize->add_control( 'bizz_ecommerce_product_img_sec_side', array(
        'settings' => 'bizz_ecommerce_product_img_sec_side',
        'label'   => __('PLace Image On','bizz-ecommerce'),
        'section' => 'bizz_ecommerce_product_tab_image',
        'type'    => 'select',
        'choices'    => array(
        'left'     => __('Left','bizz-ecommerce'),
        'right'     => __('Right','bizz-ecommerce'),
            
        ),
    ));
$wp_customize->add_setting( 'bizz_ecommerce_product_img_sec_single_row_slide', array(
                'default'               => true,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_product_img_sec_single_row_slide', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_product_tab_image',
                'settings'              => 'bizz_ecommerce_product_img_sec_single_row_slide',
            ) ) );