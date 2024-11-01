<?php
$wp_customize->add_setting( 'shopping_ecommerce_wp_disable_product_img_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_ecommerce_wp_disable_product_img_sec', array(
                'label'                 => esc_html__('Disable Section', 'shopping-ecommerce-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_ecommerce_wp_product_tab_image',
                'settings'              => 'shopping_ecommerce_wp_disable_product_img_sec',
 ) ) );

// section heading
$wp_customize->add_setting('shopping_ecommerce_wp_product_img_sec_heading', array(
        'default' => __('New Product','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_ecommerce_wp_product_img_sec_heading', array(
        'label'    => __('Section Heading', 'shopping-ecommerce-wp'),
        'section'  => 'shopping_ecommerce_wp_product_tab_image',
         'type'       => 'text',
));

// section subheading
$wp_customize->add_setting('shopping_ecommerce_wp_product_img_sec_subheading', array(
        'default' => __('COMMING SOON','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_ecommerce_wp_product_img_sec_subheading', array(
        'label'    => __('Section Sub Heading', 'shopping-ecommerce-wp'),
        'section'  => 'shopping_ecommerce_wp_product_tab_image',
         'type'       => 'text',
));

//= Choose All Category  =   
    if (class_exists( 'Shopping_Ecommerce_WP_Customize_Control_Checkbox_Multiple')){
   $wp_customize->add_setting('shopping_ecommerce_wp_product_img_sec_cat_list', array(
        'default'           => '',
        'sanitize_callback' => 'shopping_ecommerce_wp_checkbox_explode'
    ));
    $wp_customize->add_control(new Shopping_Ecommerce_WP_Customize_Control_Checkbox_Multiple(
            $wp_customize,'shopping_ecommerce_wp_product_img_sec_cat_list', array(
        'settings'=> 'shopping_ecommerce_wp_product_img_sec_cat_list',
        'label'   => __( 'Choose Categories To Show', 'shopping-ecommerce-wp' ),
        'section' => 'shopping_ecommerce_wp_product_tab_image',
        'choices' => shopping_ecommerce_wp_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  

$wp_customize->add_setting('shopping_ecommerce_wp_product_img_sec_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_select',
    ));
$wp_customize->add_control( 'shopping_ecommerce_wp_product_img_sec_optn', array(
        'settings' => 'shopping_ecommerce_wp_product_img_sec_optn',
        'label'   => __('Choose Option','open-mart'),
        'section' => 'shopping_ecommerce_wp_product_tab_image',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','shopping-ecommerce-wp'),
        'featured'   => __('Featured','shopping-ecommerce-wp'),
        'random'     => __('Random','shopping-ecommerce-wp'),
            
        ),
    ));

// Add an option to disable the logo.
  $wp_customize->add_setting( 'shopping_ecommerce_wp_product_img_sec_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Shopping_Ecommerce_WP_Toggle_Control( $wp_customize, 'shopping_ecommerce_wp_product_img_sec_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'shopping-ecommerce-wp' ),
    'section'     => 'shopping_ecommerce_wp_product_tab_image',
    'type'        => 'toggle',
    'settings'    => 'shopping_ecommerce_wp_product_img_sec_slider_optn',
  ) ) );

  $wp_customize->add_setting('shopping_ecommerce_wp_product_img_sec_adimg', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'shopping_ecommerce_wp_product_img_sec_adimg', array(
        'label'          => __('Upload Image', 'shopping-ecommerce-wp'),
        'section'        => 'shopping_ecommerce_wp_product_tab_image',
        'settings'       => 'shopping_ecommerce_wp_product_img_sec_adimg',
 )));

$wp_customize->add_setting('shopping_ecommerce_wp_product_img_sec_side', array(
        'default'        => 'left',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_select',
    ));
$wp_customize->add_control( 'shopping_ecommerce_wp_product_img_sec_side', array(
        'settings' => 'shopping_ecommerce_wp_product_img_sec_side',
        'label'   => __('PLace Image On','shopping-ecommerce-wp'),
        'section' => 'shopping_ecommerce_wp_product_tab_image',
        'type'    => 'select',
        'choices'    => array(
        'left'     => __('Left','shopping-ecommerce-wp'),
        'right'     => __('Right','shopping-ecommerce-wp'),
            
        ),
    ));
$wp_customize->add_setting( 'shopping_ecommerce_wp_product_img_sec_single_row_slide', array(
                'default'               => true,
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_ecommerce_wp_product_img_sec_single_row_slide', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'shopping-ecommerce-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_ecommerce_wp_product_tab_image',
                'settings'              => 'shopping_ecommerce_wp_product_img_sec_single_row_slide',
            ) ) );