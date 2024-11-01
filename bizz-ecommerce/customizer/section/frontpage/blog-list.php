<?php
$wp_customize->add_setting( 'bizz_ecommerce_disable_blog_list_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_disable_blog_list_sec', array(
                'label'                 => esc_html__('Disable Section', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_product_slide_list',
                'settings'              => 'bizz_ecommerce_disable_blog_list_sec',
            ) ) );
// section heading
$wp_customize->add_setting('bizz_ecommerce_blog_list_heading', array(
	    'default' => __('News & Blogs','bizz-ecommerce'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'bizz_ecommerce_blog_list_heading', array(
        'label'    => __('Section Heading', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_product_slide_list',
         'type'       => 'text',
));


// section sub heading
$wp_customize->add_setting('bizz_ecommerce_blog_list_subheading', array(
      'default' => __('BEST TO UPDATE','bizz-ecommerce'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'bizz_ecommerce_blog_list_subheading', array(
        'label'    => __('Section Sub Heading', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_product_slide_list',
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
$wp_customize->add_setting('bizz_ecommerce_blog_list_cat', array(
'default' => $default,
'sanitize_callback' => 'bizz_ecommerce_sanitize_select',
) );
$wp_customize->add_control( 'bizz_ecommerce_blog_list_cat', array(
'label'   => __('Select Category','bizz-ecommerce'),
'section' => 'bizz_ecommerce_product_slide_list',
'type' => 'select',
'choices' => $category,
) );


//number of posts to show
$wp_customize->add_setting('bizz_ecommerce_countblog_list', array(
'default' => 3,
'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'bizz_ecommerce_countblog_list', array(
'label'   => __('No Of Posts To Show','bizz-ecommerce'),
'section' => 'bizz_ecommerce_product_slide_list',
'type' => 'number',
'input_attrs' => array(
                'min' => '1', 'step' => '', 'max' => '9',
        ),

) ); 