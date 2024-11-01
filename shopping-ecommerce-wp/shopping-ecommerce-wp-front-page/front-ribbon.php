<?php
if(get_theme_mod('shopping_ecommerce_wp_disable_ribbon_sec',false) == true){
    return;
  }
if(get_theme_mod('shopping_ecommerce_wp_ribbon_background','image')=='image'){
?>
<section class="texture-ribbon-section bg-image">
	
<?php shopping_ecommerce_wp_display_customizer_shortcut( 'shopping_ecommerce_wp_ribbon' );?>
<div class="row content-wrap">
    <div class="col-md-6 texture-ribbon-content">
        <div class="texture-discount-area">          
            <div class="texture-ribbon-content-col-title" ><h3><?php echo esc_html(get_theme_mod('shopping_ecommerce_wp_ribbon_title','SALE ENDS IN 1 DAY')); ?></h3></div>

        	<div class="texture-ribbon-content-col1" ><h3><?php echo esc_html(get_theme_mod('shopping_ecommerce_wp_ribbon_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue lorem id porta volutpat.')); ?></h3></div>
        </div>
    	<?php if(get_theme_mod('shopping_ecommerce_wp_ribbon_btn_text','Call To Action')!==''):?>
    	<div class="texture-ribbon-content-col2" ><a href="<?php echo esc_url(get_theme_mod('shopping_ecommerce_wp_ribbon_btn_link','#'));?>" class="ribbon-btn"><?php echo esc_html(get_theme_mod('shopping_ecommerce_wp_ribbon_btn_text','Call To Action'));?></a></div>
        <?php endif; ?>
    </div>
    <div class="col-md-6"></div>
</div>

</section>
<?php }elseif(get_theme_mod('shopping_ecommerce_wp_ribbon_background')=='video'){?>
<section class="texture-ribbon-section">
<video autoplay="autoplay" loop playsinline id="bgvid" muted  poster="<?php echo get_theme_mod( 'shopping_ecommerce_wp_ribbon_video_poster_image'); ?>">
<source src="<?php echo get_theme_mod( 'shopping_ecommerce_wp_ribbon_bg_video'); ?>" type="video/mp4" />
</video>	

<?php shopping_ecommerce_wp_display_customizer_shortcut( 'shopping_ecommerce_wp_ribbon' );?>
<div class="content-wrap">
	<div class="container">
    <div class="texture-ribbon-content">
        <div class="texture-ribbon-content-col-title" ><h3><?php echo esc_html(get_theme_mod('shopping_ecommerce_wp_ribbon_title','SALE ENDS IN 1 DAY')); ?></h3></div>
    	<div class="texture-ribbon-content-col1" ><h3><?php echo esc_html(get_theme_mod('shopping_ecommerce_wp_ribbon_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue lorem id porta volutpat.')); ?></h3></div>
    	<?php if(get_theme_mod('shopping_ecommerce_wp_ribbon_btn_text','')!==''):?>
    	<div class="texture-ribbon-content-col2" ><a href="<?php echo esc_url(get_theme_mod('shopping_ecommerce_wp_ribbon_btn_link',''));?>" class="ribbon-btn"><?php echo esc_html(get_theme_mod('shopping_ecommerce_wp_ribbon_btn_text','Call To Action'));?></a></div>
        <?php endif; ?>
    </div>
</div>
</div>
</section>
<?php }?>