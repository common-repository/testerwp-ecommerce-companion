<?php
if(get_theme_mod('bizz_ecommerce_disable_highlight_sec',false) == true){
    return;
  }
?>
<section class="texture-product-highlight-section">
  <div class="container">
	 <?php bizz_ecommerce_display_customizer_shortcut( 'bizz_ecommerce_highlight' );?>
<div class="content-wrap">
      <div class="texture-highlight-feature-wrap">
          <?php   
            $default =  Bizz_Ecommerce_Defaults_Models::instance()->get_feature_default();
            bizz_ecommerce_highlight_content('bizz_ecommerce_highlight_content', $default);
           ?>
      </div>
  </div>
</div>
</section>