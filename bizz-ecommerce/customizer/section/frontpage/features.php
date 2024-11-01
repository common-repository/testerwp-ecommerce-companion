<?php 
$wp_customize->add_setting( 'bizz_ecommerce_disable_highlight_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_disable_highlight_sec', array(
                'label'                 => esc_html__('Disable Section', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_highlight',
                'settings'              => 'bizz_ecommerce_disable_highlight_sec',
            ) ) );

//Highlight Content Via Repeater
if ( class_exists( 'Bizz_Ecommerce_Repeater' ) ) {
    $wp_customize->add_setting(
'bizz_ecommerce_highlight_content', array(
'sanitize_callback' => 'bizz_ecommerce_repeater_sanitize',  
'default'           => Bizz_Ecommerce_Defaults_Models::instance()->get_feature_default(),
        )
    );

    $wp_customize->add_control(
        new Bizz_Ecommerce_Repeater(
            $wp_customize, 'bizz_ecommerce_highlight_content', array(
                'label'                                => esc_html__( 'Features Content', 'bizz-ecommerce' ),
                'section'                              => 'bizz_ecommerce_highlight',
                'priority'                             => 15,
                'add_field_label'                      => esc_html__( 'Add new Feature', 'bizz-ecommerce' ),
                'item_name'                            => esc_html__( 'Feature', 'bizz-ecommerce' ),
                
                'customizer_repeater_title_control'    => true, 
                'customizer_repeater_color_control'		=>	false, 
                'customizer_repeater_color2_control' 	=> false,
                'customizer_repeater_icon_control'	   => true,
                'customizer_repeater_subtitle_control' => true, 

                'customizer_repeater_text_control'    => false,  

                'customizer_repeater_image_control'    => false,  
                'customizer_repeater_link_control'     => false,
                'customizer_repeater_repeater_control' => false,  
                                 
                
            ),'Bizz_Ecommerce_Ship_Repeater'
        )
    );
}