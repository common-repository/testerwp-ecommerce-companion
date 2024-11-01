<?php 
/**
 * all customizer setting includeed
 *
 * @param  
 * @return mixed|string
 */
function bizz_ecommerce_plugin_customize_register( $wp_customize ){
//Front Page
require TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'bizz-ecommerce/customizer/section/frontpage/top-slider.php';
require TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'bizz-ecommerce/customizer/section/frontpage/featured-banner.php';
require TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'bizz-ecommerce/customizer/section/frontpage/category-tab.php';
require TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'bizz-ecommerce/customizer/section/frontpage/product-slide.php';
require TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'bizz-ecommerce/customizer/section/frontpage/category-slider.php';
require TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'bizz-ecommerce/customizer/section/frontpage/blog-list.php';

require TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'bizz-ecommerce/customizer/section/frontpage/ribbon.php';
require TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'bizz-ecommerce/customizer/section/frontpage/features.php';
require TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'bizz-ecommerce/customizer/section/frontpage/tab-productimage.php';

}
add_action('customize_register','bizz_ecommerce_plugin_customize_register');