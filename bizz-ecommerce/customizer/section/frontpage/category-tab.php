<?php
$wp_customize->add_setting( 'bizz_ecommerce_disable_cat_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_disable_cat_sec', array(
                'label'                 => esc_html__('Disable Section', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_category_tab_section',
                'settings'              => 'bizz_ecommerce_disable_cat_sec',
            ) ) );
// section heading
$wp_customize->add_setting('bizz_ecommerce_cat_tab_heading', array(
        'default' => __('Best','bizz-ecommerce'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'bizz_ecommerce_cat_tab_heading', array(
        'label'    => __('Section Heading', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_category_tab_section',
         'type'       => 'text',
));

// section subheading
$wp_customize->add_setting('bizz_ecommerce_cat_tab_subheading', array(
        'default' => __('IN THIS MONTH','bizz-ecommerce'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'bizz_ecommerce_cat_tab_subheading', array(
        'label'    => __('Section Sub Heading', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_category_tab_section',
         'type'       => 'text',
));


//= Choose All Category  =   
    if (class_exists( 'Bizz_Ecommerce_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('bizz_ecommerce_category_tab_list', array(
        'default'           => '',
        'sanitize_callback' => 'bizz_ecommerce_checkbox_explode'
    ));
    $wp_customize->add_control(new Bizz_Ecommerce_Customize_Control_Checkbox_Multiple(
            $wp_customize,'bizz_ecommerce_category_tab_list', array(
        'settings'=> 'bizz_ecommerce_category_tab_list',
        'label'   => __( 'Choose Categories To Show', 'bizz-ecommerce' ),
        'section' => 'bizz_ecommerce_category_tab_section',
        'choices' => bizz_ecommerce_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  

$wp_customize->add_setting('bizz_ecommerce_category_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_select',
    ));
$wp_customize->add_control( 'bizz_ecommerce_category_optn', array(
        'settings' => 'bizz_ecommerce_category_optn',
        'label'   => __('Choose Option','bizz-ecommerce'),
        'section' => 'bizz_ecommerce_category_tab_section',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','bizz-ecommerce'),
        'featured'   => __('Featured','bizz-ecommerce'),
        'random'     => __('Random','bizz-ecommerce'),
            
        ),
    ));

$wp_customize->add_setting( 'bizz_ecommerce_single_row_slide_cat', array(
                'default'               => true,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_single_row_slide_cat', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_category_tab_section',
                'settings'              => 'bizz_ecommerce_single_row_slide_cat',
            ) ) );


// Add an option to disable the logo.
  $wp_customize->add_setting( 'bizz_ecommerce_cat_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'bizz_ecommerce_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Bizz_Ecommerce_Toggle_Control( $wp_customize, 'bizz_ecommerce_cat_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'bizz-ecommerce' ),
    'section'     => 'bizz_ecommerce_category_tab_section',
    'type'        => 'toggle',
    'settings'    => 'bizz_ecommerce_cat_slider_optn',
  ) ) );