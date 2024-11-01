<?php 
$wp_customize->add_setting( 'eshopping_cart_disable_highlight_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_disable_highlight_sec', array(
                'label'                 => esc_html__('Disable Section', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping_cart_highlight',
                'settings'              => 'eshopping_cart_disable_highlight_sec',
            ) ) );

//Highlight Content Via Repeater
if ( class_exists( 'EShopping_Cart_Repeater' ) ) {
    $wp_customize->add_setting(
'eshopping_cart_highlight_content', array(
'sanitize_callback' => 'eshopping_cart_repeater_sanitize',  
'default'           => EShopping_Cart_Defaults_Models::instance()->get_feature_default(),
        )
    );

    $wp_customize->add_control(
        new EShopping_Cart_Repeater(
            $wp_customize, 'eshopping_cart_highlight_content', array(
                'label'                                => esc_html__( 'Features Content', 'eshopping-cart' ),
                'section'                              => 'eshopping_cart_highlight',
                'priority'                             => 15,
                'add_field_label'                      => esc_html__( 'Add new Feature', 'eshopping-cart' ),
                'item_name'                            => esc_html__( 'Feature', 'eshopping-cart' ),
                
                'customizer_repeater_title_control'    => true, 
                'customizer_repeater_color_control'		=>	false, 
                'customizer_repeater_color2_control' 	=> false,
                'customizer_repeater_icon_control'	   => true,
                'customizer_repeater_subtitle_control' => true, 

                'customizer_repeater_text_control'    => false,  

                'customizer_repeater_image_control'    => false,  
                'customizer_repeater_link_control'     => false,
                'customizer_repeater_repeater_control' => false,  
                                 
                
            ),'EShopping_Cart_Ship_Repeater'
        )
    );
}