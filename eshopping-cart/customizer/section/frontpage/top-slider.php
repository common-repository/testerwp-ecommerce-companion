<?php
$wp_customize->add_setting( 'eshopping_cart_disable_top_slider_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_disable_top_slider_sec', array(
                'label'                 => esc_html__('Disable Section', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping_cart_top_slider_section',
                'settings'              => 'eshopping_cart_disable_top_slider_sec',
            ) ) );

//Slider Content Via Repeater
if ( class_exists( 'EShopping_Cart_Repeater' ) ){
    $wp_customize->add_setting(
     'eshopping_cart_top_slide_content', array(
     'sanitize_callback' => 'eshopping_cart_repeater_sanitize',  
     'default'           => '',
        )
    );
    $wp_customize->add_control(
        new EShopping_Cart_Repeater(
            $wp_customize, 'eshopping_cart_top_slide_content', array(
                'label'                                => esc_html__( 'Slide Content', 'eshopping-cart' ),
                'section'                              => 'eshopping_cart_top_slider_section',
                'add_field_label'                      => esc_html__( 'Add New Slide', 'eshopping-cart' ),
                'item_name'                            => esc_html__( 'Slide', 'eshopping-cart' ),
                
                'customizer_repeater_title_control'    => true,   
                'customizer_repeater_subtitle_control'    => true, 
                'customizer_repeater_text_control'    => true,  
                'customizer_repeater_image_control'    => true, 
                'customizer_repeater_logo_image_control'    => false,  
                'customizer_repeater_link_control'     => true,
                'customizer_repeater_repeater_control' => false,  
                                 
                
            ),'eshopping_cart_top_slide_content'
        )
    );
}
