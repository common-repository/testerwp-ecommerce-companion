<?php
if(get_theme_mod('shopping_kart_wp_disable_category_slide_sec',false) == true){
    return;
  }
?>

<section class="texture-category-slide-section">
  <div class="container-fluid">

  <?php shopping_kart_wp_display_customizer_shortcut( 'shopping_kart_wp_cat_slide_section' );?>
  
  <div class="section-title-heading text-center">
    <h2 class="heading"><?php echo esc_html(get_theme_mod('shopping_kart_wp_cat_slider_heading','Woo Category'));?><span class="heading-2"><?php echo esc_html(get_theme_mod('shopping_kart_wp_cat_slider_subheading','Sub Heading'));?></span></h2>
  </div>

<div class="content-wrap">
<?php if(get_theme_mod('shopping_kart_wp_cat_slide_layout','cat-layout-1')=='cat-layout-1'):?>
<div class="texture-slide texture-cat-slide owl-carousel">
<?php   
  if( taxonomy_exists( 'product_cat' ) ){
      $term_id = get_theme_mod('shopping_kart_wp_category_slide_list'); 
      // category filter  
      $args = array(
            
            'orderby'    => 'menu_order',
            'order'      => 'ASC',
            'hide_empty' => 0,
            'slug'       => $term_id
        );

      $product_categories = get_terms( 'product_cat', $args );
      
      $count = count($product_categories);

      $category_list = $cate_product = '';
      if ( $count > 0 ){
      foreach ( $product_categories as $product_category ){
              //global $product; 
              $category_product = array();
  $term_link = get_term_link( $product_category, 'product_cat' );
  $thumbnail_id = get_term_meta( $product_category->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
  $image = wp_get_attachment_url( $thumbnail_id ); 
  
 if($image){
    $image = wp_get_attachment_image_src($thumbnail_id, 'wptexture_category_image', true);
    $image = wp_get_attachment_url( $thumbnail_id ); 
  }else{
    $image = esc_url(TESTERWP_CUSTOMIZER_PLUGIN_URL . 'shopping-kart-wp/assets/images/def-cat.png');
  }
     


              $current_class = '';
             
$category_list .='<div class="texture-category">';
if(!empty($image)){
$category_list .='<div class="texture-cat-box">
                              <a href="'.$term_link.'">';
                               $category_list .=' <img src="' . $image . '" alt="" />';
                               $category_list .='</a>
                              </div>';
                               }
                              $category_list .='<div class="texture-cat-text">
                                   <div class="texture-cat-title">
                                     <a href="'.$term_link.'"><span class="title">'.$product_category->name. '</span></a>
                                     </div>
                                     
                              </div>
                                 
                  </div>';
          }
          echo wp_kses_post($category_list);
       }
    } 

  ?>
  </div>
<?php elseif(get_theme_mod('shopping_kart_wp_cat_slide_layout')=='cat-layout-2'):?>
<div class="cat-wrap cat-layout-2">
  <div class="cat-content">
<?php   
  if( taxonomy_exists( 'product_cat' ) ){
      $term_id = get_theme_mod('shopping_kart_wp_category_slide_list'); 
      // category filter  
      $args = array(
            
            'orderby'    => 'title',
            'order'      => 'ASC',
            'hide_empty' => 1,
            'slug'       => $term_id
        );

      $product_categories = get_terms( 'product_cat', $args );

      $count = count($product_categories);

      $category_list = $cate_product = '';
      if ( $count > 0 ){
      foreach ( $product_categories as $product_category ){
              //global $product; 
              $category_product = array();
  $term_link = get_term_link( $product_category, 'product_cat' );
  $thumbnail_id = get_term_meta( $product_category->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
  $image = wp_get_attachment_url( $thumbnail_id ); 
  $current_class = '';           
  $category_list .='<div class="cat-list">
                   <a href="'.esc_url($term_link).'">
                      <img src="'.esc_url($image).'">
                      <span>'.esc_html($product_category->name).'</span>
                    </a>
                  </div>';       
          }
          echo wp_kses_post($category_list);
       }
    } 
  ?>
   </div>
</div>
<?php elseif(get_theme_mod('shopping_kart_wp_cat_slide_layout')=='cat-layout-3'):?>
<div class="cat-wrap cat-layout-3">
  <div class="cat-content-3">
      
     
      
<?php   
  if( taxonomy_exists( 'product_cat' ) ){
      $term_id = get_theme_mod('shopping_kart_wp_category_slide_list'); 
      // category filter  
      $args = array(
            
            'orderby'    => 'title',
            'order'      => 'ASC',
            'hide_empty' => 1,
            'slug'       => $term_id
        );

      $product_categories = get_terms( 'product_cat', $args );

      $count = count($product_categories);

      $category_list = $cate_product = '';
      if ( $count > 0 ){
      foreach ( $product_categories as $product_category ){
              //global $product; 
              $category_product = array();
  $term_link = get_term_link( $product_category, 'product_cat' );
  $thumbnail_id = get_term_meta( $product_category->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
  $image = wp_get_attachment_url( $thumbnail_id ); 
  $current_class = '';           
  $category_list .='<div class="cat-col">
<div class="cat-col-wrap">
  <img src="'.esc_url($image).'">
        <div class="hover-area">
          <span class="cat-title">'.esc_html($product_category->name).'</span>
          <div class="prd-total-number"><span class="item">'.$product_category->count.esc_html('Product','shopping-kart-wp').'</span></div>
              </div>
              <a href="'.esc_url($term_link).'"> </a>
      </div></div>';       
          }
          echo wp_kses_post($category_list);
       }
    } 
  ?>
  </div>
</div>
<?php endif;?>
</div>
</div>
</section>