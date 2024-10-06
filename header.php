<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>	
</head>
<body>
  <div id='wrap'>
	  <header>
	  	<div class="header-logo">
	      <?php $logo= get_option( 'dohko_logo');
	      	if (strcmp($logo, '') === 0) { $logo = IMAGES.'/dohko logo.png'; } 
          $url = home_url( '/' );
	       ?>
	      <a href="<?php echo esc_url($url) ?>"><img id="logo-header" src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" /></a>
	    </div>
      <div class="header-menu">
      	<?php
          if ( is_front_page() ) { ?>
          <div class="header-searchbar"></div>
        <?php
          } else {
            get_search_form();
          }
          wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'sf-menu' ));
        ?>
        <div class="togglemenu">
          <a class="togglebar" href="#" title="Menu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
        </div>
      </div>
    </header>	
    <hr class="header_separator"/>
    <div class="responsive-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primary mobile', 'menu_class' => 'toggle-menu' ) ); ?>
    </div>