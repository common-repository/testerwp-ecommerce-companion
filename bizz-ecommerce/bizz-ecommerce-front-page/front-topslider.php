<?php
if(get_theme_mod('bizz_ecommerce_disable_top_slider_sec',false) == true){
    return;
  }
?>
<section class="texture-slider-section   <?php echo esc_attr(get_theme_mod('bizz_ecommerce_top_slide_layout','slide-layout-1'));?>">
  
<?php 
bizz_ecommerce_display_customizer_shortcut( 'bizz_ecommerce_top_slider_section' );
if(get_theme_mod('bizz_ecommerce_top_slide_layout','slide-layout-1')=='slide-layout-1'):?>
 <div class="texture-slider-content-wrap">
      
        <div class="texture-slider-content-bar">
          <div class="texture-slider-full-slide owl-carousel">
            <?php bizz_ecommerce_top_slider_2_content('bizz_ecommerce_top_slide_content', ''); ?>
          </div>
        </div>
      
  </div> 
 <?php endif; ?>   

</section>