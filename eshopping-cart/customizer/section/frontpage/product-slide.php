<?php 
function eshoppingcart_product_category_list($arr='',$all=true){
    $cats = array();
    if($all == true){
        $cats[0] = 'All Categories';
    }
    foreach ( get_categories($arr) as $categories => $category ){
        $cats[$category->slug] = $category->name;
     }
     return $cats;
}
$wp_customize->add_setting( 'eshopping_cart_disable_product_slide_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_disable_product_slide_sec', array(
                'label'                 => esc_html__('Disable Section', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping_cart_product_slide_section',
                'settings'              => 'eshopping_cart_disable_product_slide_sec',
            ) ) );
// section heading
$wp_customize->add_setting('eshopping_cart_product_slider_heading', array(
	    'default' => __('New Arrivals','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_product_slider_heading', array(
        'label'    => __('Section Heading', 'eshopping-cart'),
        'section'  => 'eshopping_cart_product_slide_section',
         'type'       => 'text',
));

// section heading
$wp_customize->add_setting('eshopping_cart_product_slider_subheading', array(
        'default' => __('BEST OF PRODUCT','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_product_slider_subheading', array(
        'label'    => __('Section Sub Heading', 'eshopping-cart'),
        'section'  => 'eshopping_cart_product_slide_section',
         'type'       => 'text',
));

//control setting for select options
	$wp_customize->add_setting('eshopping_cart_product_slider_cat', array(
	'default' => 0,
	'sanitize_callback' => 'eshopping_cart_sanitize_select',
	) );
	$wp_customize->add_control( 'eshopping_cart_product_slider_cat', array(
	'label'   => __('Select Category','eshopping-cart'),
	'section' => 'eshopping_cart_product_slide_section',
	'type' => 'select',
	'choices' => eshoppingcart_product_category_list(array('taxonomy' =>'product_cat'),true),
	) );

$wp_customize->add_setting('eshopping_cart_product_slide_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_select',
    ));
$wp_customize->add_control( 'eshopping_cart_product_slide_optn', array(
        'settings' => 'eshopping_cart_product_slide_optn',
        'label'   => __('Choose Option','eshopping-cart'),
        'section' => 'eshopping_cart_product_slide_section',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','eshopping-cart'),
        'featured'   => __('Featured','eshopping-cart'),
        'random'     => __('Random','eshopping-cart'),
            
        ),
    ));

$wp_customize->add_setting( 'eshopping_cart_single_row_prdct_slide', array(
                'default'               => true,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_single_row_prdct_slide', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping_cart_product_slide_section',
                'settings'              => 'eshopping_cart_single_row_prdct_slide',
            ) ) );


// Add an option to disable the logo.
  $wp_customize->add_setting( 'eshopping_cart_product_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'eshopping_cart_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new EShopping_Cart_Toggle_Control( $wp_customize, 'eshopping_cart_product_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'eshopping-cart' ),
    'section'     => 'eshopping_cart_product_slide_section',
    'type'        => 'toggle',
    'settings'    => 'eshopping_cart_product_slider_optn',
  ) ) );