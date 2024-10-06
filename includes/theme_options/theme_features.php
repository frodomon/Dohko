<?php
/**
 * SOPORTE DEL TEMA
 * 
 * @package Dohko
 * @subpackage dohko
 * @since 1.0
*/
// Add function if not exists with theme support
  if ( ! function_exists('dohko_theme_features') ) {

    // Register Theme Features
    function dohko_theme_features()  {
      // Add theme support for Automatic Feed Links
      add_theme_support( 'automatic-feed-links' );

      // Add theme support for Post Formats
      add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'chat' ) );

      // Add theme support for Featured Images
      add_theme_support( 'post-thumbnails' );

      // Add theme support for HTML5 Semantic Markup
      add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

      // Add theme support for custom CSS in the TinyMCE visual editor
      add_editor_style('css/editor-style.css');

      // Add theme support for Translation
      load_theme_textdomain( 'dohko', get_template_directory() . '/languages' );

      // Add theme support for Navigation Menu
      add_theme_support( 'nav-menus' );
    }
    add_action( 'after_setup_theme', 'dohko_theme_features' );
  }
?>