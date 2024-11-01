<?php
$wp_customize->add_setting( 'eshopping_cart_disable_category_slide_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_disable_category_slide_sec', array(
                'label'                 => esc_html__('Disable Section', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping_cart_cat_slide_section',
                'settings'              => 'eshopping_cart_disable_category_slide_sec',
            ) ) );

// section heading
$wp_customize->add_setting('eshopping_cart_cat_slider_heading', array(
	    'default' => __('Woo Category','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_cat_slider_heading', array(
        'label'    => __('Section Heading', 'eshopping-cart'),
        'section'  => 'eshopping_cart_cat_slide_section',
         'type'       => 'text',
));

// section subheading
$wp_customize->add_setting('eshopping_cart_cat_slider_subheading', array(
        'default' => __('Sub Heading','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_cat_slider_subheading', array(
        'label'    => __('Section Sub Heading', 'eshopping-cart'),
        'section'  => 'eshopping_cart_cat_slide_section',
         'type'       => 'text',
));

//= Choose All Category  =   
    if (class_exists( 'EShopping_Cart_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('eshopping_cart_category_slide_list', array(
        'default'           => '',
        'sanitize_callback' => 'eshopping_cart_checkbox_explode'
    ));
    $wp_customize->add_control(new EShopping_Cart_Customize_Control_Checkbox_Multiple(
            $wp_customize,'eshopping_cart_category_slide_list', array(
        'settings'=> 'eshopping_cart_category_slide_list',
        'label'   => __( 'Choose Categories To Show', 'eshopping-cart' ),
        'section' => 'eshopping_cart_cat_slide_section',
        'choices' => eshopping_cart_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  
    $wp_customize->add_setting('eshopping_cart_cat_item_no', array(
            'default'           =>4,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' =>'eshopping_cart_sanitize_number',
        )
    );
    $wp_customize->add_control('eshopping_cart_cat_item_no', array(
            'type'        => 'number',
            'section'     => 'eshopping_cart_cat_slide_section',
            'label'       => __( 'No. of Column to show', 'eshopping-cart' ),
            'input_attrs' => array(
                'min'  => 4,
                'step' => 1,
                'max'  => 10,
            ),
        )
    ); 
// Add an option to disable the logo.
  $wp_customize->add_setting( 'eshopping_cart_category_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'eshopping_cart_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new EShopping_Cart_Toggle_Control( $wp_customize, 'eshopping_cart_category_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'eshopping-cart' ),
    'section'     => 'eshopping_cart_cat_slide_section',
    'type'        => 'toggle',
    'settings'    => 'eshopping_cart_category_slider_optn',
  ) ) );