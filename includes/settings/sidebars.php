<?php	
	function dohko_sidebars() {
	  register_sidebar( array (
			'name'					=> __( 'Sidebar', 'dohko' ),
			'id'						=> 'main-sidebar',
			'description'		=> __( 'Primary Sidebar', 'dohko' ),
			'class'					=> '',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> "</div>",
			'before_title'	=> '<h3 class="pad-bot-2x">',
			'after_title'		=> '</h3>',
	  ));
	  register_sidebar( array (
			'name'					=> __( 'Footer Left Sidebar', 'dohko' ),
			'id'						=> 'footer-left-sidebar',
			'description'		=> __( 'Footer Left Sidebar', 'dohko' ),
			'class'					=> '',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> "</div>",
			'before_title'	=> '<h3 class="widget-title">',
			'after_title'		=> '</h3>',
	  ));
	  register_sidebar( array (
			'name'					=> __( 'Footer Center Sidebar', 'dohko' ),
			'id'						=> 'footer-center-sidebar',
			'description'		=> __( 'Footer Center Sidebar', 'dohko' ),
			'class'					=> '',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> "</div>",
			'before_title'	=> '<h3 class="widget-title">',
			'after_title'		=> '</h3>',
	  ));
	  register_sidebar( array (
			'name'					=> __( 'Footer Right Sidebar', 'dohko' ),
			'id'						=> 'footer-right-sidebar',
			'description'		=> __( 'Footer Right Sidebar', 'dohko' ),
			'class'					=> '',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> "</div>",
			'before_title'	=> '<h3 class="widget-title">',
			'after_title'		=> '</h3>',
	  ));
	}
	add_action('init','dohko_sidebars');
?>