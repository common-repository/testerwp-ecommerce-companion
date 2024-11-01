<?php
if(get_theme_mod('bizz_ecommerce_disable_blog_list_sec',false) == true){
    return;
  }

$blog_list_cat  = get_theme_mod('bizz_ecommerce_blog_list_cat','');  
$countblog_list = get_theme_mod('bizz_ecommerce_countblog_list',3); 
?>
<section class="texture-product-list-section">
  <div class="container">
        <?php bizz_ecommerce_display_customizer_shortcut( 'bizz_ecommerce_product_slide_list' );?>

  <div class="section-title-heading text-center">
    <h2 class="heading"><?php echo esc_html(get_theme_mod('bizz_ecommerce_blog_list_heading','News & Blogs'));?><span class="heading-2"><?php echo esc_html(get_theme_mod('bizz_ecommerce_blog_list_subheading','BEST TO UPDATE'));?></span></h2>
  </div>      

<?php 

$args = array(
        'category_name'=>$blog_list_cat,
        'posts_per_page'=> $countblog_list,
        );

$the_query = new WP_Query( $args );

if($blog_list_cat == ""){
  $category = get_categories();
  $blog_list_cat =  $category[0]->cat_name;
}

?>
  
<div class="row">
<?php
 if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
       

    <div class="col-lg-4 col-md-6 col-sm-12">
      <article class="blog-item blog-1">
          <div class="post-img">
              <?php the_post_thumbnail(); ?>
          </div>
          <div class="post-content pt-4 text-left">
              <h5>
                  <a class="heading" href="blog-detail.html"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></a>
              </h5>
              <p class="text-left"><?php the_excerpt(); ?></p>
              <div class="btn-wraper">
                <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>
              </div>
          </div>
      </article>
    </div>    
  <?php  
endwhile; endif;
wp_reset_postdata();
?>
</div>

</div>
</section>