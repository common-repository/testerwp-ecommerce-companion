<?php
$wp_customize->add_setting( 'shopping_kart_wp_disable_blog_list_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_kart_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_kart_wp_disable_blog_list_sec', array(
                'label'                 => esc_html__('Disable Section', 'shopping-kart-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_kart_wp_product_slide_list',
                'settings'              => 'shopping_kart_wp_disable_blog_list_sec',
            ) ) );
// section heading
$wp_customize->add_setting('shopping_kart_wp_blog_list_heading', array(
	    'default' => __('News & Blogs','shopping-kart-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_kart_wp_blog_list_heading', array(
        'label'    => __('Section Heading', 'shopping-kart-wp'),
        'section'  => 'shopping_kart_wp_product_slide_list',
         'type'       => 'text',
));


// section sub heading
$wp_customize->add_setting('shopping_kart_wp_blog_list_subheading', array(
      'default' => __('BEST TO UPDATE','shopping-kart-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_kart_wp_blog_list_subheading', array(
        'label'    => __('Section Sub Heading', 'shopping-kart-wp'),
        'section'  => 'shopping_kart_wp_product_slide_list',
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
$wp_customize->add_setting('shopping_kart_wp_blog_list_cat', array(
'default' => $default,
'sanitize_callback' => 'shopping_kart_wp_sanitize_select',
) );
$wp_customize->add_control( 'shopping_kart_wp_blog_list_cat', array(
'label'   => __('Select Category','shopping-kart-wp'),
'section' => 'shopping_kart_wp_product_slide_list',
'type' => 'select',
'choices' => $category,
) );


//number of posts to show
$wp_customize->add_setting('shopping_kart_wp_countblog_list', array(
'default' => 3,
'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'shopping_kart_wp_countblog_list', array(
'label'   => __('No Of Posts To Show','shopping-kart-wp'),
'section' => 'shopping_kart_wp_product_slide_list',
'type' => 'number',
'input_attrs' => array(
                'min' => '1', 'step' => '', 'max' => '9',
        ),

) ); 