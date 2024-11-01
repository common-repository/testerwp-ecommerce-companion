<?php 
function bizzecommerce_product_category_list($arr='',$all=true){
    $cats = array();
    if($all == true){
        $cats[0] = 'All Categories';
    }
    foreach ( get_categories($arr) as $categories => $category ){
        $cats[$category->slug] = $category->name;
     }
     return $cats;
}
$wp_customize->add_setting( 'shopping_ecommerce_wp_disable_product_slide_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_ecommerce_wp_disable_product_slide_sec', array(
                'label'                 => esc_html__('Disable Section', 'shopping-ecommerce-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_ecommerce_wp_product_slide_section',
                'settings'              => 'shopping_ecommerce_wp_disable_product_slide_sec',
            ) ) );
// section heading
$wp_customize->add_setting('shopping_ecommerce_wp_product_slider_heading', array(
	    'default' => __('New Arrivals','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_ecommerce_wp_product_slider_heading', array(
        'label'    => __('Section Heading', 'shopping-ecommerce-wp'),
        'section'  => 'shopping_ecommerce_wp_product_slide_section',
         'type'       => 'text',
));

// section heading
$wp_customize->add_setting('shopping_ecommerce_wp_product_slider_subheading', array(
        'default' => __('BEST OF PRODUCT','shopping-ecommerce-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_ecommerce_wp_product_slider_subheading', array(
        'label'    => __('Section Sub Heading', 'shopping-ecommerce-wp'),
        'section'  => 'shopping_ecommerce_wp_product_slide_section',
         'type'       => 'text',
));

//control setting for select options
	$wp_customize->add_setting('shopping_ecommerce_wp_product_slider_cat', array(
	'default' => 0,
	'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_select',
	) );
	$wp_customize->add_control( 'shopping_ecommerce_wp_product_slider_cat', array(
	'label'   => __('Select Category','shopping-ecommerce-wp'),
	'section' => 'shopping_ecommerce_wp_product_slide_section',
	'type' => 'select',
	'choices' => bizzecommerce_product_category_list(array('taxonomy' =>'product_cat'),true),
	) );

$wp_customize->add_setting('shopping_ecommerce_wp_product_slide_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_select',
    ));
$wp_customize->add_control( 'shopping_ecommerce_wp_product_slide_optn', array(
        'settings' => 'shopping_ecommerce_wp_product_slide_optn',
        'label'   => __('Choose Option','shopping-ecommerce-wp'),
        'section' => 'shopping_ecommerce_wp_product_slide_section',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','shopping-ecommerce-wp'),
        'featured'   => __('Featured','shopping-ecommerce-wp'),
        'random'     => __('Random','shopping-ecommerce-wp'),
            
        ),
    ));

$wp_customize->add_setting( 'shopping_ecommerce_wp_single_row_prdct_slide', array(
                'default'               => true,
                'sanitize_callback'     => 'shopping_ecommerce_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_ecommerce_wp_single_row_prdct_slide', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'shopping-ecommerce-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_ecommerce_wp_product_slide_section',
                'settings'              => 'shopping_ecommerce_wp_single_row_prdct_slide',
            ) ) );


// Add an option to disable the logo.
  $wp_customize->add_setting( 'shopping_ecommerce_wp_product_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'shopping_ecommerce_wp_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Shopping_Ecommerce_WP_Toggle_Control( $wp_customize, 'shopping_ecommerce_wp_product_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'shopping-ecommerce-wp' ),
    'section'     => 'shopping_ecommerce_wp_product_slide_section',
    'type'        => 'toggle',
    'settings'    => 'shopping_ecommerce_wp_product_slider_optn',
  ) ) );