<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

  <?php 
    wp_head();
    $growth = get_theme_mod('dohko_growth_settings');
    if ( !empty($growth['analytics']) ) { print $growth['analytics'];}
    if ( !empty($growth['pixel']) ) { print $growth['pixel'];}
    if ( !empty($growth['mailchimp']) ) { print $growth['mailchimp'];}
    $brand = get_theme_mod('dohko_brand_settings');
    if ( !empty($brand['logo_header']) ) { $logo_header = $brand['logo_header'];}
    else { $logo_header = IMAGES.'/dohko logo.png';}
    $url = home_url( '/' );
    // Obteniendo enlaces del customizer
    $social = get_theme_mod('dohko_social_settings');
    if ( !empty($social['facebook']) ) { $facebook = $social['facebook'];}
    if ( !empty($social['instagram']) ) { $instagram = $social['instagram'];}
    if ( !empty($social['youtube']) ) { $youtube = $social['youtube'];}
    if ( !empty($social['linkedin']) ) { $linkedin = $social['linkedin'];}
    if ( !empty($social['twitter']) ) { $twitter = $social['twitter'];}
    if ( !empty($social['whatsapp']) ) { $whatsapp = $social['whatsapp'];}
    if ( !empty($social['pinterest']) ) { $pinterest = $social['pinterest'];}
    if ( !empty($social['googleplus']) ) { $googleplus = $social['googleplus'];} 
    if ( !empty($social['discord']) ) { $discord = $social['discord'];}
    if ( !empty($social['twitch']) ) { $twitch = $social['twitch'];}
  ?>	
</head>
<body>
  <header>
    <div id='header-top' class='flex-center-row group'>
      <div class='col-3 col-mob-4 col-tab-3 left fullheight flex-center-row'>
        <a href="<?php echo esc_url($url) ?>">
          <img id="logo-header" src="<?php print $logo_header; ?>" alt="<?php bloginfo('name'); ?>" />
        </a>
      </div>
      <div class='col-7 col-tab-3 left fullheight flex-center-row hide-responsive'>
        <div class="searchbar">
          <?php get_search_form(); ?>
        </div>
      </div>
      <div class='col-2 col-tab-2 left fullheight flex-center-row hide-responsive'>
        <?php if(isset($facebook)): ?><a class='social' href="<?php echo esc_url($facebook); ?>" target="_blank"><i class="fa fa-facebook header_icon" aria-hidden="true"></i></a><?php endif; ?>
        <?php if(isset($instagram)): ?><a class='social' href="<?php echo esc_url($instagram); ?>" target="_blank"><i class="fa fa-instagram header_icon" aria-hidden="true"></i></a><?php endif; ?>
        <?php if(isset($youtube)): ?><a class='social' href="<?php echo  esc_url($youtube); ?>" target="_blank"><i class="fa fa-youtube header_icon" aria-hidden="true"></i></a><?php endif; ?>
        <?php if(isset($linkedin)): ?><a class='social' href="<?php echo  esc_url($linkedin); ?>" target="_blank"><i class="fa fa-linkedin header_icon" aria-hidden="true"></i></a><?php endif; ?>
        <?php if(isset($twitter)): ?><a class='social' href="<?php echo  esc_url($twitter); ?>" target="_blank"><i class="fa fa-twitter header_icon" aria-hidden="true"></i></a><?php endif; ?>
        <?php if(isset($whatsapp)): ?><a class='social' href="https://wa.me/51<?php print $whatsapp; ?>" target="_blank"><i class="fa fa-whatsapp header_icon" aria-hidden="true"></i></a><?php endif; ?>
        <?php if(isset($pinterest)): ?><a class='social' href="<?php echo  esc_url($pinterest); ?>" target="_blank"><i class="fa fa-pinterest header_icon" aria-hidden="true"></i></a><?php endif; ?>
        <?php if(isset($googleplus)): ?><a class='social' href="<?php echo esc_url($googleplus); ?>" target="_blank"><i class="fa fa-google-plus-official header_icon" aria-hidden="true"></i></a><?php endif; ?>
        <?php if(isset($discord)): ?><a class='social' href="<?php echo esc_url($discord); ?>" target="_blank"><i class="fab fa-discord header_icon" aria-hidden="true"></i></a><?php endif; ?>
        <?php if(isset($twitch)): ?><a class='social' href="<?php echo  esc_url($twitch); ?>" target="_blank"><i class="fa fa-twitch header_icon" aria-hidden="true"></i></a><?php endif; ?>
      </div>
    </div>
   <div id='header-menu'>
     <?php wp_megamenu(array('theme_location' => 'main-menu')); ?>
   </div> 
 </header>