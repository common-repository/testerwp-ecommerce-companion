<?php
if(get_theme_mod('shopping_kart_wp_disable_top_slider_sec',false) == true){
    return;
  }
?>
<section class="texture-slider-section   <?php echo esc_attr(get_theme_mod('shopping_kart_wp_top_slide_layout','slide-layout-1'));?>">
  
<?php 
shopping_kart_wp_display_customizer_shortcut( 'shopping_kart_wp_top_slider_section' );
if(get_theme_mod('shopping_kart_wp_top_slide_layout','slide-layout-1')=='slide-layout-1'):?>
 <div class="texture-slider-content-wrap">
      
        <div class="texture-slider-content-bar">
          <div class="texture-slider-full-slide owl-carousel">
            <?php shopping_kart_wp_top_slider_2_content('shopping_kart_wp_top_slide_content', ''); ?>
          </div>
        </div>
      
  </div> 
 <?php endif; ?>   

</section>