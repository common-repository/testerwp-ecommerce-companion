<?php
$wp_customize->add_setting( 'eshopping_cart_disable_blog_list_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_disable_blog_list_sec', array(
                'label'                 => esc_html__('Disable Section', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping_cart_product_slide_list',
                'settings'              => 'eshopping_cart_disable_blog_list_sec',
            ) ) );
// section heading
$wp_customize->add_setting('eshopping_cart_blog_list_heading', array(
	    'default' => __('News & Blogs','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_blog_list_heading', array(
        'label'    => __('Section Heading', 'eshopping-cart'),
        'section'  => 'eshopping_cart_product_slide_list',
         'type'       => 'text',
));


// section sub heading
$wp_customize->add_setting('eshopping_cart_blog_list_subheading', array(
      'default' => __('BEST TO UPDATE','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_blog_list_subheading', array(
        'label'    => __('Section Sub Heading', 'eshopping-cart'),
        'section'  => 'eshopping_cart_product_slide_list',
         'type'       => 'text',
));


/*category post*/
$categories = get_categories();

$category = array();
$k = 0;
foreach ($categories as $cat)
{
    if ($k == 0)
    {
        $default = $cat->slug;
        $k++;
    }
    $category[$cat->slug] = $cat->name;
}

//control setting for select options
$wp_customize->add_setting('eshopping_cart_blog_list_cat', array(
'default' => $default,
'sanitize_callback' => 'eshopping_cart_sanitize_select',
) );
$wp_customize->add_control( 'eshopping_cart_blog_list_cat', array(
'label'   => __('Select Category','eshopping-cart'),
'section' => 'eshopping_cart_product_slide_list',
'type' => 'select',
'choices' => $category,
) );


//number of posts to show
$wp_customize->add_setting('eshopping_cart_countblog_list', array(
'default' => 3,
'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'eshopping_cart_countblog_list', array(
'label'   => __('No Of Posts To Show','eshopping-cart'),
'section' => 'eshopping_cart_product_slide_list',
'type' => 'number',
'input_attrs' => array(
                'min' => '1', 'step' => '', 'max' => '9',
        ),

) ); 