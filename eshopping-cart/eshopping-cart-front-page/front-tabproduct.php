<?php
if(get_theme_mod('eshopping_cart_disable_cat_sec',false) == true){
    return;
  }
?>
<section class="texture-product-tab-section">
  <div class="container-fluid">
  <?php eshopping_cart_display_customizer_shortcut( 'eshopping_cart_category_tab_section' );?>
 <!-- texture head start -->
  <div id="texture-cat-tab" class="texture-cat-tab">
  <!-- <div class="texture-heading-wrap"> -->
  
    <div class="section-title-heading text-center">
      <h2 class="heading"><?php echo esc_html(get_theme_mod('eshopping_cart_cat_tab_heading','Best in this month'));?></h2>
    </div>

<!-- tab head start -->
<?php  $term_id = get_theme_mod('eshopping_cart_category_tab_list');   
eshopping_cart_category_tab_list($term_id); 
?>
<!-- </div> -->
<!-- tab head end -->
<div class="content-wrap">
  <div class="tab-content">
      <div class="texture-slide texture-product-cat-slide owl-carousel">
       <?php 
          $term_id = get_theme_mod('eshopping_cart_category_tab_list'); 
          $prdct_optn = get_theme_mod('eshopping_cart_category_optn','recent');
          eshopping_cart_product_cat_filter_default_loop($term_id,$prdct_optn); 
         ?>
      </div>
    </div>
  </div>
</div>
</div>
</section>