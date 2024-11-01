<?php 
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

function cleaning_elementor_import_files(){
  return apply_filters(
    'cleaning_elementor_demo_site', array(
    array(
        'import_file_name' => esc_html__('Cleaning Elementor','cleaning-elementor'),
        'import_file_url'=> esc_url('https://testerwp.com/demo-data/cleaning-elementor/cleaning-elementor.xml'),
        'import_customizer_file_url'=> esc_url('https://testerwp.com/demo-data/cleaning-elementor/cleaning-elementor.dat'),
        'import_widget_file_url'=> esc_url('https://testerwp.com/demo-data/cleaning-elementor/cleaning-elementor.wie'),
        'preview_url'=> esc_url('https://testerwp.com/wp/cleaning-elementor/'),
        'import_notice' => __( 'Before importing the demo data, Install & Activate the recommended plugins.', 'cleaning-elementor' ),
       )
     )
  );
}
add_filter( 'pt-ocdi/import_files', 'cleaning_elementor_import_files');

/**
 * OCDI after import.
 *
 * @since 1.0.0
 */
function cleaning_elementor_after_import(){

  // Assign front page and posts page (blog page).
  $front_page_id = null;
  $blog_page_id  = null;

  $front_page = get_page_by_title( 'home' );

  if ( $front_page ) {
    if ( is_array( $front_page ) ){
      $first_page = array_shift( $front_page );
      $front_page_id = $first_page->ID;
    } else {
      $front_page_id = $front_page->ID;
    }
  }

  $blog_page = get_page_by_title( 'blog' );

  if ( $blog_page ) {
    if ( is_array( $blog_page ) ) {
      $first_page = array_shift( $blog_page );
      $blog_page_id = $first_page->ID;
    } else {
      $blog_page_id = $blog_page->ID;
    }
  }

  if ( $front_page_id && $blog_page_id ) {
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id );
    update_option( 'page_for_posts', $blog_page_id );
  }

  // Assign navigation menu locations.
  $menu_location_details = array(
    'cleaning-elementor-above-menu'    => 'frontpage',
    'cleaning-elementor-main-menu'     => 'frontpage',
    'cleaning-elementor-footer-menu'   => 'footer',
    );

  if ( ! empty( $menu_location_details ) ){
    $navigation_settings = array();
    $current_navigation_menus = wp_get_nav_menus();
    if ( ! empty( $current_navigation_menus ) && ! is_wp_error( $current_navigation_menus ) ) {
      foreach ( $current_navigation_menus as $menu ) {
        foreach ( $menu_location_details as $location => $menu_slug ) {
          if ( $menu->slug === $menu_slug ) {
            $navigation_settings[ $location ] = $menu->term_id;
          }
        }
      }
    }
    set_theme_mod( 'nav_menu_locations', $navigation_settings );
  }
}

add_action( 'pt-ocdi/after_import', 'cleaning_elementor_after_import' );