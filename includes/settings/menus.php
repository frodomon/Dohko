<?php
	function dohko_menus(){
	  register_nav_menus(array(
	  	'main-menu' => __('Main Menu','dohko'),
	  	'footer-menu' => __('Footer Menu','dohko'),
	  	'mobile-menu' => __( 'Mobile Menu', 'dohko' )
	  ));
	}
	add_action( 'init', 'dohko_menus' );
?>