<?php
if(get_theme_mod('shopping_kart_wp_disable_highlight_sec',false) == true){
    return;
  }
?>
<section class="texture-product-highlight-section">
  <div class="container">
	 <?php shopping_kart_wp_display_customizer_shortcut( 'shopping_kart_wp_highlight' );?>
<div class="content-wrap">
      <div class="texture-highlight-feature-wrap">
          <?php   
            $default =  Shopping_Kart_WP_Defaults_Models::instance()->get_feature_default();
            shopping_kart_wp_highlight_content('shopping_kart_wp_highlight_content', $default);
           ?>
      </div>
  </div>
</div>
</section>