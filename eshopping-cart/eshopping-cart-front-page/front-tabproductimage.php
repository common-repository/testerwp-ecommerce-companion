<?php
if(get_theme_mod('eshopping_cart_disable_product_img_sec',false) == true){
    return;
  }
if (get_theme_mod('eshopping_cart_product_img_sec_adimg','') != '') {
 $banner_img = 'image-enable';
}
else{
 $banner_img = 'image-disable';
}
?>

<section class="texture-product-image-tab-section">
   <div class="container-fluid">
  <?php eshopping_cart_display_customizer_shortcut( 'eshopping_cart_product_tab_image' );?>
 <!-- texture head start -->
  <div id="texture-cat-tab" class="texture-cat-tab">
  <!-- <div class="texture-heading-wrap"> -->
  
  <div class="section-title-heading text-center">
    <h2 class="heading"><?php echo esc_html(get_theme_mod('eshopping_cart_product_img_sec_heading','New Product'));?></h2>
  </div>

<!-- tab head start -->
<?php  $term_id = get_theme_mod('eshopping_cart_product_img_sec_cat_list');   
eshopping_cart_category_tab_list($term_id); 
?>
<!-- </div> -->
<!-- tab head end -->
<div class="content-wrap <?php echo esc_attr(get_theme_mod('eshopping_cart_product_img_sec_side')); ?>">
 <?php  if (get_theme_mod('eshopping_cart_product_img_sec_adimg','') != '') { ?>
  <div class="tab-image">
    <img src="<?php echo esc_url(get_theme_mod('eshopping_cart_product_img_sec_adimg','')); ?>">
  </div>
  <?php  }  ?>
  <div class="tab-content <?php echo esc_attr($banner_img); ?>">
      <div class="texture-slide texture-product-image-cat-slide owl-carousel">
       <?php 
          $term_id = get_theme_mod('eshopping_cart_product_img_sec_cat_list'); 
          $prdct_optn = get_theme_mod('eshopping_cart_product_img_sec_optn','recent');
          eshopping_cart_product_cat_filter_default_loop($term_id,$prdct_optn); 
         ?>
      </div>
  </div>
  </div>
</div>
</div>
</section>