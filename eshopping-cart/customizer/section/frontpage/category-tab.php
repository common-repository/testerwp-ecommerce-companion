<?php
$wp_customize->add_setting( 'eshopping_cart_disable_cat_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_disable_cat_sec', array(
                'label'                 => esc_html__('Disable Section', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping_cart_category_tab_section',
                'settings'              => 'eshopping_cart_disable_cat_sec',
            ) ) );
// section heading
$wp_customize->add_setting('eshopping_cart_cat_tab_heading', array(
        'default' => __('Best','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_cat_tab_heading', array(
        'label'    => __('Section Heading', 'eshopping-cart'),
        'section'  => 'eshopping_cart_category_tab_section',
         'type'       => 'text',
));

// section subheading
$wp_customize->add_setting('eshopping_cart_cat_tab_subheading', array(
        'default' => __('IN THIS MONTH','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_cat_tab_subheading', array(
        'label'    => __('Section Sub Heading', 'eshopping-cart'),
        'section'  => 'eshopping_cart_category_tab_section',
         'type'       => 'text',
));


//= Choose All Category  =   
    if (class_exists( 'EShopping_Cart_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('eshopping_cart_category_tab_list', array(
        'default'           => '',
        'sanitize_callback' => 'eshopping_cart_checkbox_explode'
    ));
    $wp_customize->add_control(new EShopping_Cart_Customize_Control_Checkbox_Multiple(
            $wp_customize,'eshopping_cart_category_tab_list', array(
        'settings'=> 'eshopping_cart_category_tab_list',
        'label'   => __( 'Choose Categories To Show', 'eshopping-cart' ),
        'section' => 'eshopping_cart_category_tab_section',
        'choices' => eshopping_cart_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  

$wp_customize->add_setting('eshopping_cart_category_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_select',
    ));
$wp_customize->add_control( 'eshopping_cart_category_optn', array(
        'settings' => 'eshopping_cart_category_optn',
        'label'   => __('Choose Option','eshopping-cart'),
        'section' => 'eshopping_cart_category_tab_section',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','eshopping-cart'),
        'featured'   => __('Featured','eshopping-cart'),
        'random'     => __('Random','eshopping-cart'),
            
        ),
    ));

$wp_customize->add_setting( 'eshopping_cart_single_row_slide_cat', array(
                'default'               => true,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_single_row_slide_cat', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping_cart_category_tab_section',
                'settings'              => 'eshopping_cart_single_row_slide_cat',
            ) ) );


// Add an option to disable the logo.
  $wp_customize->add_setting( 'eshopping_cart_cat_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'eshopping_cart_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new EShopping_Cart_Toggle_Control( $wp_customize, 'eshopping_cart_cat_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'eshopping-cart' ),
    'section'     => 'eshopping_cart_category_tab_section',
    'type'        => 'toggle',
    'settings'    => 'eshopping_cart_cat_slider_optn',
  ) ) );