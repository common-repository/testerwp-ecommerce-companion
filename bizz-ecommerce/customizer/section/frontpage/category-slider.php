<?php
$wp_customize->add_setting( 'bizz_ecommerce_disable_category_slide_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_disable_category_slide_sec', array(
                'label'                 => esc_html__('Disable Section', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_cat_slide_section',
                'settings'              => 'bizz_ecommerce_disable_category_slide_sec',
            ) ) );

// section heading
$wp_customize->add_setting('bizz_ecommerce_cat_slider_heading', array(
	    'default' => __('Woo Category','bizz-ecommerce'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'bizz_ecommerce_cat_slider_heading', array(
        'label'    => __('Section Heading', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_cat_slide_section',
         'type'       => 'text',
));

// section subheading
$wp_customize->add_setting('bizz_ecommerce_cat_slider_subheading', array(
        'default' => __('Sub Heading','bizz-ecommerce'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'bizz_ecommerce_cat_slider_subheading', array(
        'label'    => __('Section Sub Heading', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_cat_slide_section',
         'type'       => 'text',
));

//= Choose All Category  =   
    if (class_exists( 'Bizz_Ecommerce_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('bizz_ecommerce_category_slide_list', array(
        'default'           => '',
        'sanitize_callback' => 'bizz_ecommerce_checkbox_explode'
    ));
    $wp_customize->add_control(new Bizz_Ecommerce_Customize_Control_Checkbox_Multiple(
            $wp_customize,'bizz_ecommerce_category_slide_list', array(
        'settings'=> 'bizz_ecommerce_category_slide_list',
        'label'   => __( 'Choose Categories To Show', 'bizz-ecommerce' ),
        'section' => 'bizz_ecommerce_cat_slide_section',
        'choices' => bizz_ecommerce_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  
    $wp_customize->add_setting('bizz_ecommerce_cat_item_no', array(
            'default'           =>4,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' =>'bizz_ecommerce_sanitize_number',
        )
    );
    $wp_customize->add_control('bizz_ecommerce_cat_item_no', array(
            'type'        => 'number',
            'section'     => 'bizz_ecommerce_cat_slide_section',
            'label'       => __( 'No. of Column to show', 'bizz-ecommerce' ),
            'input_attrs' => array(
                'min'  => 4,
                'step' => 1,
                'max'  => 10,
            ),
        )
    ); 
// Add an option to disable the logo.
  $wp_customize->add_setting( 'bizz_ecommerce_category_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'bizz_ecommerce_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Bizz_Ecommerce_Toggle_Control( $wp_customize, 'bizz_ecommerce_category_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'bizz-ecommerce' ),
    'section'     => 'bizz_ecommerce_cat_slide_section',
    'type'        => 'toggle',
    'settings'    => 'bizz_ecommerce_category_slider_optn',
  ) ) );