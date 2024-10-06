<?php
/**
 * FUNCIONES Y SCRIPTS
 * 
 * @package Dohko
 * @subpackage dohko
 * @since 1.0
*/
  define('DOHKO_DIR', get_template_directory_uri());
  define('IMAGES', DOHKO_DIR."/images"); 
  define('JAVASCRIPTS', DOHKO_DIR."/js");
  /* include_once( ABSPATH . 'wp-admin/includes/plugin.php' ) */
  
  // Load styles and scripts
  require_once('includes/scripts.php');
  // require_once('includes/upload_images/upload_images.php');

  // Load more wordoress functionality
  require_once('includes/settings/attachments.php');
  require_once('includes/settings/excerpt.php');
  require_once('includes/settings/menus.php');
  require_once('includes/settings/sidebars.php');
  require_once('includes/settings/thumbnails.php');
  require_once('includes/settings/widgets.php');
  
  // Functions for load posts on index and single
  require_once('includes/masterpieces/pagination.php');
  require_once('includes/masterpieces/single_post.php');
  require_once('includes/masterpieces/index-post.php');
  require_once('includes/masterpieces/post-formats.php');

  // CUSTOM FIELDS FOR POST FORMAT
  define( 'ACF_LITE', true );
  include_once('includes/acf/acf.php');
  include_once('includes/post_format/acf_fields.php');

  // Load Theme Options
  require_once('includes/theme_options/theme_features.php');
  require_once('includes/theme_options/customizer/customizer.php');
  require_once('includes/theme_options/customizer/color.php');

  //Required Plugins feature
  require_once('includes/tgm/tgm.php' );

  //Custom Post Types
  require_once('includes/post_types/slides.php');
  require_once('includes/post_types/products.php');
  /*
  require_once('includes/post_types/services.php');
  require_once('includes/post_types/clients.php');
  require_once('includes/post_types/suppliers.php');
  
*/  

  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

?>