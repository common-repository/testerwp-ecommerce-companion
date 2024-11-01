<?php
$wp_customize->add_setting( 'eshopping_cart_disable_product_img_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_disable_product_img_sec', array(
                'label'                 => esc_html__('Disable Section', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping_cart_product_tab_image',
                'settings'              => 'eshopping_cart_disable_product_img_sec',
 ) ) );

// section heading
$wp_customize->add_setting('eshopping_cart_product_img_sec_heading', array(
        'default' => __('New Product','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_product_img_sec_heading', array(
        'label'    => __('Section Heading', 'eshopping-cart'),
        'section'  => 'eshopping_cart_product_tab_image',
         'type'       => 'text',
));

// section subheading
$wp_customize->add_setting('eshopping_cart_product_img_sec_subheading', array(
        'default' => __('COMMING SOON','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_product_img_sec_subheading', array(
        'label'    => __('Section Sub Heading', 'eshopping-cart'),
        'section'  => 'eshopping_cart_product_tab_image',
         'type'       => 'text',
));

//= Choose All Category  =   
    if (class_exists( 'EShopping_Cart_Customize_Control_Checkbox_Multiple')){
   $wp_customize->add_setting('eshopping_cart_product_img_sec_cat_list', array(
        'default'           => '',
        'sanitize_callback' => 'eshopping_cart_checkbox_explode'
    ));
    $wp_customize->add_control(new EShopping_Cart_Customize_Control_Checkbox_Multiple(
            $wp_customize,'eshopping_cart_product_img_sec_cat_list', array(
        'settings'=> 'eshopping_cart_product_img_sec_cat_list',
        'label'   => __( 'Choose Categories To Show', 'eshopping-cart' ),
        'section' => 'eshopping_cart_product_tab_image',
        'choices' => eshopping_cart_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  

$wp_customize->add_setting('eshopping_cart_product_img_sec_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_select',
    ));
$wp_customize->add_control( 'eshopping_cart_product_img_sec_optn', array(
        'settings' => 'eshopping_cart_product_img_sec_optn',
        'label'   => __('Choose Option','open-mart'),
        'section' => 'eshopping_cart_product_tab_image',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','eshopping-cart'),
        'featured'   => __('Featured','eshopping-cart'),
        'random'     => __('Random','eshopping-cart'),
            
        ),
    ));

// Add an option to disable the logo.
  $wp_customize->add_setting( 'eshopping_cart_product_img_sec_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'eshopping_cart_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new EShopping_Cart_Toggle_Control( $wp_customize, 'eshopping_cart_product_img_sec_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'eshopping-cart' ),
    'section'     => 'eshopping_cart_product_tab_image',
    'type'        => 'toggle',
    'settings'    => 'eshopping_cart_product_img_sec_slider_optn',
  ) ) );

  $wp_customize->add_setting('eshopping_cart_product_img_sec_adimg', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'eshopping_cart_product_img_sec_adimg', array(
        'label'          => __('Upload Image', 'eshopping-cart'),
        'section'        => 'eshopping_cart_product_tab_image',
        'settings'       => 'eshopping_cart_product_img_sec_adimg',
 )));

$wp_customize->add_setting('eshopping_cart_product_img_sec_side', array(
        'default'        => 'left',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_select',
    ));
$wp_customize->add_control( 'eshopping_cart_product_img_sec_side', array(
        'settings' => 'eshopping_cart_product_img_sec_side',
        'label'   => __('PLace Image On','eshopping-cart'),
        'section' => 'eshopping_cart_product_tab_image',
        'type'    => 'select',
        'choices'    => array(
        'left'     => __('Left','eshopping-cart'),
        'right'     => __('Right','eshopping-cart'),
            
        ),
    ));
$wp_customize->add_setting( 'eshopping_cart_product_img_sec_single_row_slide', array(
                'default'               => true,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_product_img_sec_single_row_slide', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping_cart_product_tab_image',
                'settings'              => 'eshopping_cart_product_img_sec_single_row_slide',
            ) ) );