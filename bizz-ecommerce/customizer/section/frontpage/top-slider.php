<?php
$wp_customize->add_setting( 'bizz_ecommerce_disable_top_slider_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_disable_top_slider_sec', array(
                'label'                 => esc_html__('Disable Section', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_top_slider_section',
                'settings'              => 'bizz_ecommerce_disable_top_slider_sec',
            ) ) );

//Slider Content Via Repeater
if ( class_exists( 'Bizz_Ecommerce_Repeater' ) ){
    $wp_customize->add_setting(
     'bizz_ecommerce_top_slide_content', array(
     'sanitize_callback' => 'bizz_ecommerce_repeater_sanitize',  
     'default'           => '',
        )
    );
    $wp_customize->add_control(
        new Bizz_Ecommerce_Repeater(
            $wp_customize, 'bizz_ecommerce_top_slide_content', array(
                'label'                                => esc_html__( 'Slide Content', 'bizz-ecommerce' ),
                'section'                              => 'bizz_ecommerce_top_slider_section',
                'add_field_label'                      => esc_html__( 'Add New Slide', 'bizz-ecommerce' ),
                'item_name'                            => esc_html__( 'Slide', 'bizz-ecommerce' ),
                
                'customizer_repeater_title_control'    => true,   
                'customizer_repeater_subtitle_control'    => true, 
                'customizer_repeater_text_control'    => true,  
                'customizer_repeater_image_control'    => true, 
                'customizer_repeater_logo_image_control'    => false,  
                'customizer_repeater_link_control'     => true,
                'customizer_repeater_repeater_control' => false,  
                                 
                
            ),'bizz_ecommerce_top_slide_content'
        )
    );
}
