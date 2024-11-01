<?php
if(get_theme_mod('eshopping_cart_disable_highlight_sec',false) == true){
    return;
  }
?>
<section class="texture-product-highlight-section">
  <div class="container">
	 <?php eshopping_cart_display_customizer_shortcut( 'eshopping_cart_highlight' );?>
<div class="content-wrap">
      <div class="texture-highlight-feature-wrap">
          <?php   
            $default =  EShopping_Cart_Defaults_Models::instance()->get_feature_default();
            eshopping_cart_highlight_content('eshopping_cart_highlight_content', $default);
           ?>
      </div>
  </div>
</div>
</section>