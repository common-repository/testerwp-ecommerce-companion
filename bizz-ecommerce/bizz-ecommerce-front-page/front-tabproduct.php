<?php
if(get_theme_mod('bizz_ecommerce_disable_cat_sec',false) == true){
    return;
  }
?>
<section class="texture-product-tab-section">
  <div class="container-fluid">
  <?php bizz_ecommerce_display_customizer_shortcut( 'bizz_ecommerce_category_tab_section' );?>
 <!-- texture head start -->
  <div id="texture-cat-tab" class="texture-cat-tab">
  <!-- <div class="texture-heading-wrap"> -->
  
    <div class="section-title-heading text-center">
      <h2 class="heading"><?php echo esc_html(get_theme_mod('bizz_ecommerce_cat_tab_heading','Best'));?><span class="heading-2"><?php echo esc_html(get_theme_mod('bizz_ecommerce_cat_tab_subheading','IN THIS MONTH'));?></span></h2>
    </div>

<!-- tab head start -->
<?php  $term_id = get_theme_mod('bizz_ecommerce_category_tab_list');   
bizz_ecommerce_category_tab_list($term_id); 
?>
<!-- </div> -->
<!-- tab head end -->
<div class="content-wrap">
  <div class="tab-content">
      <div class="texture-slide texture-product-cat-slide owl-carousel">
       <?php 
          $term_id = get_theme_mod('bizz_ecommerce_category_tab_list'); 
          $prdct_optn = get_theme_mod('bizz_ecommerce_category_optn','recent');
          bizz_ecommerce_product_cat_filter_default_loop($term_id,$prdct_optn); 
         ?>
      </div>
    </div>
  </div>
</div>
</div>
</section>