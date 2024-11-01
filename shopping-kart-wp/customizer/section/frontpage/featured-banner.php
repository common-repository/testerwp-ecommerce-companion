<?php
$wp_customize->add_setting( 'shopping_kart_wp_disable_fea_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_kart_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_kart_wp_disable_fea_sec', array(
                'label'                 => esc_html__('Disable Section', 'shopping-kart-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_kart_wp_feature_banner_section',
                'settings'              => 'shopping_kart_wp_disable_fea_sec',
            ) ) );

// slider-layout-3
$wp_customize->add_setting('shopping_kart_wp_fea_adimg', array(
        'default' => TESTERWP_CUSTOMIZER_PLUGIN_URL .'shopping-kart-wp/assets/images/feature1.jpg',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'shopping_kart_wp_fea_adimg', array(
        'label'          => __('Image 1', 'shopping-kart-wp'),
        'section'        => 'shopping_kart_wp_feature_banner_section',
        'settings'       => 'shopping_kart_wp_fea_adimg',
 )));

$wp_customize->add_setting('shopping_kart_wp_fea_url', array(
        'default' =>'#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_text',
));
$wp_customize->add_control( 'shopping_kart_wp_fea_url', array(
        'label'    => __('url', 'shopping-kart-wp'),
        'section'  => 'shopping_kart_wp_feature_banner_section',
         'type'    => 'url',
));

$wp_customize->add_setting('shopping_kart_wp_fea_adimg2', array(
        'default' => TESTERWP_CUSTOMIZER_PLUGIN_URL .'shopping-kart-wp/assets/images/feature2.jpg',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'shopping_kart_wp_fea_adimg2', array(
        'label'          => __('Image 2', 'shopping-kart-wp'),
        'section'        => 'shopping_kart_wp_feature_banner_section',
        'settings'       => 'shopping_kart_wp_fea_adimg2',
 )));

$wp_customize->add_setting('shopping_kart_wp_fea_url2', array(
        'default' =>'#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_text',
));
$wp_customize->add_control( 'shopping_kart_wp_fea_url2', array(
        'label'    => __('url', 'shopping-kart-wp'),
        'section'  => 'shopping_kart_wp_feature_banner_section',
         'type'    => 'url',
));

$wp_customize->add_setting('shopping_kart_wp_fea_adimg3', array(
        'default' => TESTERWP_CUSTOMIZER_PLUGIN_URL .'shopping-kart-wp/assets/images/feature1.jpg',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'shopping_kart_wp_fea_adimg3', array(
        'label'          => __('Image 3', 'shopping-kart-wp'),
        'section'        => 'shopping_kart_wp_feature_banner_section',
        'settings'       => 'shopping_kart_wp_fea_adimg3',
 )));

$wp_customize->add_setting('shopping_kart_wp_fea_url3', array(
        'default' =>'#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_text',
));
$wp_customize->add_control( 'shopping_kart_wp_fea_url3', array(
        'label'    => __('url', 'shopping-kart-wp'),
        'section'  => 'shopping_kart_wp_feature_banner_section',
         'type'    => 'url',
));