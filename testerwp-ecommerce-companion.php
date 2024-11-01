<?php 
/*
  Plugin Name: Testerwp Ecommerce Companion
  Description: Testerwp Ecommerce Companion is the plugin which enhence the theme functionality. You can add theme sections like Top Slider, Featured Banner, Category Slider, Product Carousel, News & Blog, Features etc.
  Version: 1.19
  Author: wptexture
  Text Domain: testerwp-ecommerce-companion
  Author URI: #
 */

  if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// define constants
define('TESTERWP_CUSTOMIZER_VERSION', '1.11');
define('TESTERWP_CUSTOMIZER_PLUGIN_URL', plugin_dir_url(__FILE__));
define('TESTERWP_CUSTOMIZER_PLUGIN_PATH', plugin_dir_path(__FILE__) );

function testerwp_customizer_text_domain(){
	$theme = wp_get_theme();
	$themeArr=array();
	$themeArr[] = $theme->get( 'TextDomain' );
	$themeArr[] = $theme->get( 'Template' );
	return $themeArr;
}

$theme = testerwp_customizer_text_domain(); 

if(in_array("medical-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'medical-elementor/demo/import.php' );	
}

if(in_array("real-estate-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'real-estate-elementor/demo/import.php' );	
}

if(in_array("real-estate-elementor-pro", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'real-estate-elementor-pro/demo/import.php' );	
}

if(in_array("wedding-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'wedding-elementor/demo/import.php' );	
}

if(in_array("restaurant-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'restaurant-elementor/demo/import.php' );	
}

if(in_array("cleaning-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'cleaning-elementor/demo/import.php' );	
}

if(in_array("business-company-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'business-company-elementor/demo/import.php' );	
}

if(in_array("beauty-parlour-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'beauty-parlour-elementor/demo/import.php' );	
}

if(in_array("photography-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'photography-elementor/demo/import.php' );	
}

if(in_array("religion-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'religion-elementor/demo/import.php' );	
}

if(in_array("garden-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'garden-elementor/demo/import.php' );	
}

if(in_array("non-profit-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'non-profit-elementor/demo/import.php' );	
}

if(in_array("software-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'software-elementor/demo/import.php' );	
}

if(in_array("gym-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'gym-elementor/demo/import.php' );	
}

if(in_array("lawyer-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'lawyer-elementor/demo/import.php' );	
}

if(in_array("education-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'education-elementor/demo/import.php' );	
}

if(in_array("fitness-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'fitness-elementor/demo/import.php' );	
}

if(in_array("hosting-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'hosting-elementor/demo/import.php' );	
}

if(in_array("construction-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'construction-elementor/demo/import.php' );	
}

if(in_array("real-estate-company", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'real-estate-company/demo/import.php' );	
}

if(in_array("automobile-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'automobile-elementor/demo/import.php' );	
}

if(in_array("event-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'event-elementor/demo/import.php' );	
}

if(in_array("finance-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'finance-elementor/demo/import.php' );	
}

if(in_array("agency-elementor", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'agency-elementor/demo/import.php' );	
}

if(in_array("biz-ecommerce", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'biz-ecommerce/demo/import.php' );	
}

if(in_array("bizz-ecommerce", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'bizz-ecommerce/demo/import.php' );	
}

if(in_array("shopping-kart-wp", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'shopping-kart-wp/demo/import.php' );	
}

if(in_array("shopping-ecommerce-wp", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'shopping-ecommerce-wp/demo/import.php' );	
}

if(in_array("eshopping-cart", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'eshopping-cart/demo/import.php' );	
}

add_image_size( 'wptexture_category_image',300,300,true);

function testerwp_customizer_load_plugin() {

	$theme = testerwp_customizer_text_domain();

	if(in_array("bizz-ecommerce", $theme)){
		include_once( plugin_dir_path(__FILE__) . 'bizz-ecommerce/include.php' );
	}
	if(in_array("shopping-kart-wp", $theme)){
		include_once( plugin_dir_path(__FILE__) . 'shopping-kart-wp/include.php' );
	}
	if(in_array("shopping-ecommerce-wp", $theme)){
		include_once( plugin_dir_path(__FILE__) . 'shopping-ecommerce-wp/include.php' );
	}
	if(in_array("eshopping-cart", $theme)){
		include_once( plugin_dir_path(__FILE__) . 'eshopping-cart/include.php' );
	}
}
add_action('after_setup_theme', 'testerwp_customizer_load_plugin');

?>