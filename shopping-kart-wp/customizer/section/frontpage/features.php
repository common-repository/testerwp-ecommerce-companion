<?php 
$wp_customize->add_setting( 'shopping_kart_wp_disable_highlight_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_kart_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_kart_wp_disable_highlight_sec', array(
                'label'                 => esc_html__('Disable Section', 'shopping-kart-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_kart_wp_highlight',
                'settings'              => 'shopping_kart_wp_disable_highlight_sec',
            ) ) );

//Highlight Content Via Repeater
if ( class_exists( 'Shopping_Kart_WP_Repeater' ) ) {
    $wp_customize->add_setting(
'shopping_kart_wp_highlight_content', array(
'sanitize_callback' => 'shopping_kart_wp_repeater_sanitize',  
'default'           => Shopping_Kart_WP_Defaults_Models::instance()->get_feature_default(),
        )
    );

    $wp_customize->add_control(
        new Shopping_Kart_WP_Repeater(
            $wp_customize, 'shopping_kart_wp_highlight_content', array(
                'label'                                => esc_html__( 'Features Content', 'shopping-kart-wp' ),
                'section'                              => 'shopping_kart_wp_highlight',
                'priority'                             => 15,
                'add_field_label'                      => esc_html__( 'Add new Feature', 'shopping-kart-wp' ),
                'item_name'                            => esc_html__( 'Feature', 'shopping-kart-wp' ),
                
                'customizer_repeater_title_control'    => true, 
                'customizer_repeater_color_control'		=>	false, 
                'customizer_repeater_color2_control' 	=> false,
                'customizer_repeater_icon_control'	   => true,
                'customizer_repeater_subtitle_control' => true, 

                'customizer_repeater_text_control'    => false,  

                'customizer_repeater_image_control'    => false,  
                'customizer_repeater_link_control'     => false,
                'customizer_repeater_repeater_control' => false,  
                                 
                
            ),'Shopping_Kart_WP_Ship_Repeater'
        )
    );
}