<?php
$wp_customize->add_setting( 'shopping_ecommerce_wp_disable_category_slide_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_ecommerce_wp_disable_category_slide_sec', array(
                'label'                 => esc_html__('Disable Section', 'shopping-ecommerce-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_ecommerce_wp_cat_slide_section',
                'settings'              => 'shopping_ecommerce_wp_disable_category_slide_sec',
            ) ) );

// section heading
$wp_customize->add_setting('shopping_ecommerce_wp_cat_slider_heading', array(
	    'default' => __('Woo Category','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_ecommerce_wp_cat_slider_heading', array(
        'label'    => __('Section Heading', 'shopping-ecommerce-wp'),
        'section'  => 'shopping_ecommerce_wp_cat_slide_section',
         'type'       => 'text',
));

// section subheading
$wp_customize->add_setting('shopping_ecommerce_wp_cat_slider_subheading', array(
        'default' => __('Sub Heading','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_ecommerce_wp_cat_slider_subheading', array(
        'label'    => __('Section Sub Heading', 'shopping-ecommerce-wp'),
        'section'  => 'shopping_ecommerce_wp_cat_slide_section',
         'type'       => 'text',
));

//= Choose All Category  =   
    if (class_exists( 'Shopping_Ecommerce_wp_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('shopping_ecommerce_wp_category_slide_list', array(
        'default'           => '',
        'sanitize_callback' => 'shopping_ecommerce_wp_checkbox_explode'
    ));
    $wp_customize->add_control(new Shopping_Ecommerce_WP_Customize_Control_Checkbox_Multiple(
            $wp_customize,'shopping_ecommerce_wp_category_slide_list', array(
        'settings'=> 'shopping_ecommerce_wp_category_slide_list',
        'label'   => __( 'Choose Categories To Show', 'shopping-ecommerce-wp' ),
        'section' => 'shopping_ecommerce_wp_cat_slide_section',
        'choices' => shopping_ecommerce_WP_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  
    $wp_customize->add_setting('shopping_ecommerce_wp_cat_item_no', array(
            'default'           =>4,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' =>'shopping_ecommerce_wp_sanitize_number',
        )
    );
    $wp_customize->add_control('shopping_ecommerce_wp_cat_item_no', array(
            'type'        => 'number',
            'section'     => 'shopping_ecommerce_wp_cat_slide_section',
            'label'       => __( 'No. of Column to show', 'shopping-ecommerce-wp' ),
            'input_attrs' => array(
                'min'  => 4,
                'step' => 1,
                'max'  => 10,
            ),
        )
    ); 
// Add an option to disable the logo.
  $wp_customize->add_setting( 'shopping_ecommerce_wp_category_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Shopping_Ecommerce_WP_Toggle_Control( $wp_customize, 'shopping_ecommerce_wp_category_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'shopping-ecommerce-wp' ),
    'section'     => 'shopping_ecommerce_wp_cat_slide_section',
    'type'        => 'toggle',
    'settings'    => 'shopping_ecommerce_wp_category_slider_optn',
  ) ) );