<?php
$wp_customize->add_setting( 'eshopping_cart_disable_ribbon_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_disable_ribbon_sec', array(
                'label'                 => esc_html__('Disable Section', 'eshopping-cart'),
                'type'                  => 'checkbox',
                 'priority'   => 1,
                'section'               => 'eshopping_cart_ribbon',
                'settings'              => 'eshopping_cart_disable_ribbon_sec',
            ) ) );

$wp_customize->add_setting('eshopping_cart_ribbon_background', array(
                'default'               => 'image',
                'sanitize_callback'     => 'eshopping_cart_sanitize_select',
            ) );
$wp_customize->add_control( new EShopping_Cart_Customizer_Buttonset_Control( $wp_customize, 'eshopping_cart_ribbon_background', array(
                'label'                 => esc_html__( 'Choose Ribbon Background', 'eshopping-cart' ),
                 'priority'   => 2,
                'section'               => 'eshopping_cart_ribbon',
                'settings'              => 'eshopping_cart_ribbon_background',
                'choices'               => array(
                    'image'             => esc_html__( 'Image', 'eshopping-cart' ),
                    'video'             => esc_html__( 'Video', 'eshopping-cart' ), 
                ),
        ) ) );
    $wp_customize->add_setting( 'eshopping_cart_ribbon_bg_img_url', array(
        'default' => TESTERWP_CUSTOMIZER_PLUGIN_URL .'eshopping-cart/assets/images/ribbon.jpg',
        'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_setting( 'eshopping_cart_ribbon_bg_img_id', array(
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'eshopping_cart_ribbon_bg_background_repeat', array(
        'default' => 'no-repeat',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'eshopping_cart_ribbon_bg_background_size', array(
        'default' => 'auto',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'eshopping_cart_ribbon_bg_background_attach', array(
        'default' => 'scroll',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'eshopping_cart_ribbon_bg_background_position', array(
        'default' => 'center center',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    // Registers example_background control
    $wp_customize->add_control(
        new EShopping_Cart_Customize_Custom_Background_Control(
            $wp_customize,
            'eshopping_cart_ribbon_bg_background_image',
            array(
                'label'     => esc_html__( 'Background Image', 'eshopping-cart' ),
                'section'   => 'eshopping_cart_ribbon',
                'priority'   => 2,
                'settings'    => array(
                    'image_url' => 'eshopping_cart_ribbon_bg_img_url',
                    'image_id' => 'eshopping_cart_ribbon_bg_img_id',
                    'repeat' => 'eshopping_cart_ribbon_bg_background_repeat', // Use false to hide the field
                    'size' => 'eshopping_cart_ribbon_bg_background_size',
                    'position' => 'eshopping_cart_ribbon_bg_background_position',
                    'attach' => 'eshopping_cart_ribbon_bg_background_attach'
                )
            )
        )
    );

    $wp_customize->add_setting('eshopping_cart_ribbon_bg_video', array(
           'default'        => '',
           'sanitize_callback' => 'sanitize_text_field'
       ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
           $wp_customize, 'eshopping_cart_ribbon_bg_video', array(
           'label'    => __('Upload Background Video', 'oneline'),
           'section'  => 'eshopping_cart_ribbon',
           'settings' => 'eshopping_cart_ribbon_bg_video',
    )));
    $wp_customize->add_setting('eshopping_cart_ribbon_video_poster_image', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'eshopping_cart_ribbon_video_poster_image', array(
        'label'    => __('Upload Video Poster Image', 'oneline'),
        'section'  => 'eshopping_cart_ribbon',
        'settings' => 'eshopping_cart_ribbon_video_poster_image',
    )));

$wp_customize->add_setting('eshopping_cart_ribbon_title', array(
        'default'           => 'SALE ENDS IN 1 DAY',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
        
  ));
$wp_customize->add_control('eshopping_cart_ribbon_title', array(
        'label'    => __('Text', 'eshopping-cart'),
        'section'  => 'eshopping_cart_ribbon',
        'settings' => 'eshopping_cart_ribbon_title',
         'type'    => 'text',
 ));    

$wp_customize->add_setting('eshopping_cart_ribbon_text', array(
        'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue lorem id porta volutpat.',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_textarea',
        'transport'         => 'postMessage',
        
  ));
$wp_customize->add_control('eshopping_cart_ribbon_text', array(
        'label'    => __('Ribbon Subtitle', 'eshopping-cart'),
        'section'  => 'eshopping_cart_ribbon',
        'settings' => 'eshopping_cart_ribbon_text',
         'type'    => 'textarea',
 ));

$wp_customize->add_setting('eshopping_cart_ribbon_btn_text', array(
        'default'           => 'Call To Action',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
        
  ));
$wp_customize->add_control('eshopping_cart_ribbon_btn_text', array(
        'label'    => __('Button Text', 'eshopping-cart'),
        'section'  => 'eshopping_cart_ribbon',
        'settings' => 'eshopping_cart_ribbon_btn_text',
         'type'    => 'text',
 ));

$wp_customize->add_setting('eshopping_cart_ribbon_btn_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        
  ));
$wp_customize->add_control('eshopping_cart_ribbon_btn_link', array(
        'label'    => __('Button Link', 'eshopping-cart'),
        'section'  => 'eshopping_cart_ribbon',
        'settings' => 'eshopping_cart_ribbon_btn_link',
         'type'    => 'text',
 ));
