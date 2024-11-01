<?php
if(get_theme_mod('bizz_ecommerce_disable_product_slide_sec',false) == true){
    return;
  }
?>

<section class="texture-product-slide-section">
  <div class="container">
    <?php bizz_ecommerce_display_customizer_shortcut( 'bizz_ecommerce_product_slide_section' );?>

  <div class="section-title-heading text-center">
    <h2 class="heading"><?php echo esc_html(get_theme_mod('bizz_ecommerce_product_slider_heading','New Arrivals'));?><span class="heading-2"><?php echo esc_html(get_theme_mod('bizz_ecommerce_product_slider_subheading','BEST OF PRODUCT'));?></span></h2>
  </div>

<div class="content-wrap">
    <div class="texture-slide texture-product-slide owl-carousel">
      <?php    
          $term_id = get_theme_mod('bizz_ecommerce_product_slider_cat');  
          $prdct_optn = get_theme_mod('bizz_ecommerce_product_slide_optn','recent');
          bizz_ecommerce_product_cat_filter_default_loop($term_id,$prdct_optn); 
      ?>
    </div>
  </div>
</div>
</section>