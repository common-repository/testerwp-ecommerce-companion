<?php
if(get_theme_mod('bizz_ecommerce_disable_fea_sec',false) == true){
    return;
  }
?>

<section id="feature" class="feature-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="banner-box">
              <div class="banner-wrapper">
                <div class="banner-img">

                  <img src="<?php echo esc_url(get_theme_mod('bizz_ecommerce_fea_adimg', TESTERWP_CUSTOMIZER_PLUGIN_URL .'bizz-ecommerce/assets/images/feature1.jpg'));?>" alt="banner1">
                  
                  <div class="banner-text">
                    <span><?php echo esc_html(get_theme_mod('bizz_ecommerce_fea_subtitle','Super Sale'));?></span>
                    <h2><?php echo esc_html(get_theme_mod('bizz_ecommerce_fea_title','Woman Collection'));?></h2>
                    <div class="b-button red-b-button">
                      <a href="<?php echo esc_url(get_theme_mod('bizz_ecommerce_fea_url','#'));?>" target="_blank"><?php echo esc_html(get_theme_mod('bizz_ecommerce_fea_btntext','Shop Now'));?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="banner-box">
              <div class="banner-wrapper">
                <div class="banner-img">
                  
              		<img src="<?php echo esc_url(get_theme_mod('bizz_ecommerce_fea_adimg2',TESTERWP_CUSTOMIZER_PLUGIN_URL .'bizz-ecommerce/assets/images/feature2.jpg'));?>" alt="banner2">
          		
                  <div class="banner-text">
                    <span><?php echo esc_html(get_theme_mod('bizz_ecommerce_fea_subtitle2','Super Sale'));?></span>
                    <h2><?php echo esc_html(get_theme_mod('bizz_ecommerce_fea_title2','New Collection'));?></h2>
                    <div class="b-button red-b-button">
                      <a href="<?php echo esc_url(get_theme_mod('bizz_ecommerce_fea_url2','#'));?>" target="_blank"><?php echo esc_html(get_theme_mod('bizz_ecommerce_fea_btntext2','Shop Now'));?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="banner-box">
              <div class="banner-wrapper">
                <div class="banner-img">
                  
                  <img src="<?php echo esc_url(get_theme_mod('bizz_ecommerce_fea_adimg3',TESTERWP_CUSTOMIZER_PLUGIN_URL .'bizz-ecommerce/assets/images/feature1.jpg'));?>" alt="banner3">
                  
                  <div class="banner-text">
                    <span><?php echo esc_html(get_theme_mod('bizz_ecommerce_fea_subtitle3','Super Sale'));?></span>
                    <h2><?php echo esc_html(get_theme_mod('bizz_ecommerce_fea_title3','New Collection'));?></h2>
                    <div class="b-button red-b-button">
                      <a href="<?php echo esc_url(get_theme_mod('bizz_ecommerce_fea_url3','#'));?>" target="_blank"><?php echo esc_html(get_theme_mod('bizz_ecommerce_fea_btntext3','Shop Now'));?></a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>