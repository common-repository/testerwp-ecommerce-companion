<?php
if(get_theme_mod('eshopping_cart_disable_top_slider_sec',false) == true){
    return;
  }
?>
<section class="texture-slider-section   <?php echo esc_attr(get_theme_mod('eshopping_cart_top_slide_layout','slide-layout-1'));?>">
  
<?php 
eshopping_cart_display_customizer_shortcut( 'eshopping_cart_top_slider_section' );
if(get_theme_mod('eshopping_cart_top_slide_layout','slide-layout-1')=='slide-layout-1'):?>
 <div class="texture-slider-content-wrap">
      
        <div class="texture-slider-content-bar">
          <div class="texture-slider-full-slide owl-carousel">
            <?php eshopping_cart_top_slider_2_content('eshopping_cart_top_slide_content', ''); ?>
          </div>
        </div>
      
  </div> 
 <?php endif; ?>   

</section>