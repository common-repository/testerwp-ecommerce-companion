<?php
$wp_customize->add_setting( 'shopping_kart_wp_disable_top_slider_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_kart_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_kart_wp_disable_top_slider_sec', array(
                'label'                 => esc_html__('Disable Section', 'shopping-kart-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_kart_wp_top_slider_section',
                'settings'              => 'shopping_kart_wp_disable_top_slider_sec',
            ) ) );

//Slider Content Via Repeater
if ( class_exists( 'Shopping_Kart_WP_Repeater' ) ){
    $wp_customize->add_setting(
     'shopping_kart_wp_top_slide_content', array(
     'sanitize_callback' => 'shopping_kart_wp_repeater_sanitize',  
     'default'           => '',
        )
    );
    $wp_customize->add_control(
        new Shopping_Kart_WP_Repeater(
            $wp_customize, 'shopping_kart_wp_top_slide_content', array(
                'label'                                => esc_html__( 'Slide Content', 'shopping-kart-wp' ),
                'section'                              => 'shopping_kart_wp_top_slider_section',
                'add_field_label'                      => esc_html__( 'Add New Slide', 'shopping-kart-wp' ),
                'item_name'                            => esc_html__( 'Slide', 'shopping-kart-wp' ),
                
                'customizer_repeater_title_control'    => true,   
                'customizer_repeater_subtitle_control'    => true, 
                'customizer_repeater_text_control'    => true,  
                'customizer_repeater_image_control'    => true, 
                'customizer_repeater_logo_image_control'    => false,  
                'customizer_repeater_link_control'     => true,
                'customizer_repeater_repeater_control' => false,  
                                 
                
            ),'shopping_kart_wp_top_slide_content'
        )
    );
}
