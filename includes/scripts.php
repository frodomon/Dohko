<?php
/**
 * 
 * Scripts and styles
 * 
 * @package Dohko
 * @subpackage dohko
 * @since 1.0
 * 
 * First, register style then enqueue for better loading priority
*/
  function dohko_theme_styles() {
  	wp_register_style('fonts-maven', 'https://fonts.googleapis.com/css?family=Maven+Pro', '', '', 'all"');
  	wp_register_style('fonts-raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,700,800,900', '', '', 'all');
  	wp_register_style('font-poppins','https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap', '', '', 'all');
  	wp_register_style('dohko-styles', get_stylesheet_uri(), array('fonts-maven','fonts-raleway','font-poppins'), '1.0','all');
  	wp_enqueue_style('dohko-styles');
  }
  add_action( 'wp_enqueue_scripts', 'dohko_theme_styles' );
  
  // Firs, register script then enqueue for better loading priority
  function dohko_theme_scripts() {	
		wp_register_script( 'font-awesome', 'https://kit.fontawesome.com/3b83791f01.js', '', '5.x', true );
		wp_register_script( 'salvattore', JAVASCRIPTS .'/salvattore.min.js', array('jquery'), '1.0.0', true );
		wp_register_script( 'scrollreveal', JAVASCRIPTS .'/scrollreveal.min.js', array('jquery'), '1.0.0', true );
		wp_register_script( 'flexslider', JAVASCRIPTS .'/jquery.flexslider.js', array('jquery'), '2.7.2', true );
		wp_register_script( 'IframeResizer', JAVASCRIPTS .'/jquery.fitvids.js', array('jquery'), '1.0.0', true ); 
		wp_register_script( 'dohko-scripts', JAVASCRIPTS .'/scripts.js', array('jquery', 'font-awesome', 'salvattore','scrollreveal', 'flexslider', 'IframeResizer'), '1.0.0', true );	
		wp_enqueue_script('dohko-scripts');
	}
	add_action( 'wp_enqueue_scripts', 'dohko_theme_scripts' );
	
	function dohko_admin_scripts(){
		wp_enqueue_style( 'metabox-style', DOHKO_DIR.'/css/metabox.css');
		wp_enqueue_script( 'media-manager-metabox', JAVASCRIPTS .'/media-upload-meta-box.js', array(), '1.0.0', true );
	}
	add_action('admin_enqueue_scripts','dohko_admin_scripts');

?>