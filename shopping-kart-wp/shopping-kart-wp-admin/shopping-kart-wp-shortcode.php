<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
function shopping_kart_wp_shortcode_template($section_name=''){
	switch ($section_name){
	case 'shopping_kart_wp_show_frontpage':
	$section = array(
                                                    'front-topslider',
                                                    'front-fbanner',
                                                    'front-categoryslider',
                                                    'front-tabproduct',
                                                    'front-ribbon',
                                                    'front-tabproductimage',
                                                    'front-productslider',
                                                    'front-bloglist',
                                                    'front-highlight',                                             
    );
    foreach($section as $value):
    require_once (TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'shopping-kart-wp/shopping-kart-wp-front-page/'.$value.'.php');
    endforeach;
    break;
	}
}
function shopping_kart_wp_shortcodeid_data($atts){
    $output = '';
    $pull_quote_atts = shortcode_atts(array(
        'section' => ''
            ), $atts);
    $section_name = wp_kses_post($pull_quote_atts['section']);
  	$output = shopping_kart_wp_shortcode_template($section_name);
    return $output;
}
add_shortcode('shopping-kart-wp', 'shopping_kart_wp_shortcodeid_data');