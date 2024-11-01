<?php
if(get_theme_mod('shopping_ecommerce_wp_disable_fea_sec',false) == true){
    return;
  }
?>
  <?php // echo esc_url(get_theme_mod('shopping_ecommerce_wp_fea_url','#')); ?>

<section id="feature" class="feature-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="banner-box">
              <div class="banner-wrapper">
                <div class="banner-img">
                  <a href="<?php echo esc_url(get_theme_mod('shopping_ecommerce_wp_fea_url','#'));?>" target="_blank">
                    <img src="<?php echo esc_url(get_theme_mod('shopping_ecommerce_wp_fea_adimg', TESTERWP_CUSTOMIZER_PLUGIN_URL .'shopping-ecommerce-wp/assets/images/feature1.jpg'));?>" alt="banner1">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="banner-box">
              <div class="banner-wrapper">
                <div class="banner-img">
                  <a href="<?php echo esc_url(get_theme_mod('shopping_ecommerce_wp_fea_url2','#'));?>" target="_blank">
              		  <img src="<?php echo esc_url(get_theme_mod('shopping_ecommerce_wp_fea_adimg2',TESTERWP_CUSTOMIZER_PLUGIN_URL .'shopping-ecommerce-wp/assets/images/feature2.jpg'));?>" alt="banner2">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="banner-box">
              <div class="banner-wrapper">
                <div class="banner-img">
                  <a href="<?php echo esc_url(get_theme_mod('shopping_ecommerce_wp_fea_url3','#'));?>" target="_blank">
                    <img src="<?php echo esc_url(get_theme_mod('shopping_ecommerce_wp_fea_adimg3',TESTERWP_CUSTOMIZER_PLUGIN_URL .'shopping-ecommerce-wp/assets/images/feature1.jpg'));?>" alt="banner3">
                  </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>