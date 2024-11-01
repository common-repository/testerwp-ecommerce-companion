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
$wp_customize->add_setting( 'bizz_ecommerce_disable_product_slide_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_disable_product_slide_sec', array(
                'label'                 => esc_html__('Disable Section', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_product_slide_section',
                'settings'              => 'bizz_ecommerce_disable_product_slide_sec',
            ) ) );
// section heading
$wp_customize->add_setting('bizz_ecommerce_product_slider_heading', array(
	    'default' => __('New Arrivals','bizz-ecommerce'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'bizz_ecommerce_product_slider_heading', array(
        'label'    => __('Section Heading', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_product_slide_section',
         'type'       => 'text',
));

// section heading
$wp_customize->add_setting('bizz_ecommerce_product_slider_subheading', array(
        'default' => __('BEST OF PRODUCT','bizz-ecommerce'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'bizz_ecommerce_product_slider_subheading', array(
        'label'    => __('Section Sub Heading', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_product_slide_section',
         'type'       => 'text',
));

//control setting for select options
	$wp_customize->add_setting('bizz_ecommerce_product_slider_cat', array(
	'default' => 0,
	'sanitize_callback' => 'bizz_ecommerce_sanitize_select',
	) );
	$wp_customize->add_control( 'bizz_ecommerce_product_slider_cat', array(
	'label'   => __('Select Category','bizz-ecommerce'),
	'section' => 'bizz_ecommerce_product_slide_section',
	'type' => 'select',
	'choices' => bizzecommerce_product_category_list(array('taxonomy' =>'product_cat'),true),
	) );

$wp_customize->add_setting('bizz_ecommerce_product_slide_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_select',
    ));
$wp_customize->add_control( 'bizz_ecommerce_product_slide_optn', array(
        'settings' => 'bizz_ecommerce_product_slide_optn',
        'label'   => __('Choose Option','bizz-ecommerce'),
        'section' => 'bizz_ecommerce_product_slide_section',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','bizz-ecommerce'),
        'featured'   => __('Featured','bizz-ecommerce'),
        'random'     => __('Random','bizz-ecommerce'),
            
        ),
    ));

$wp_customize->add_setting( 'bizz_ecommerce_single_row_prdct_slide', array(
                'default'               => true,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_single_row_prdct_slide', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_product_slide_section',
                'settings'              => 'bizz_ecommerce_single_row_prdct_slide',
            ) ) );


// Add an option to disable the logo.
  $wp_customize->add_setting( 'bizz_ecommerce_product_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'bizz_ecommerce_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Bizz_Ecommerce_Toggle_Control( $wp_customize, 'bizz_ecommerce_product_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'bizz-ecommerce' ),
    'section'     => 'bizz_ecommerce_product_slide_section',
    'type'        => 'toggle',
    'settings'    => 'bizz_ecommerce_product_slider_optn',
  ) ) );