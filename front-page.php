<?php 
  get_header();
  $frontpage = get_theme_mod('dohko_frontpage_settings');
  if (isset($frontpage['slides']) && $frontpage['slides']){ get_template_part( 'home', 'slides');}
  if (isset($frontpage['offers']) && $frontpage['offers']){ get_template_part( 'home', 'offers');}
  if (isset($frontpage['about']) && $frontpage['about']){ get_template_part( 'home', 'about');}
  if (isset($frontpage['services']) && $frontpage['services']){ get_template_part( 'home', 'services');}
  if (isset($frontpage['clients']) && $frontpage['clients']){ get_template_part( 'home', 'clients');}
  if (isset($frontpage['supplierss']) && $frontpage['suppliers']){ get_template_part( 'home', 'suppliers');}
  if (isset($frontpage['blog']) && $frontpage['blog']){ get_template_part( 'home', 'blog');}
  get_footer(); 
?>
<script type="text/javascript">
 	jQuery(window).ready(function($) {
	  var height = $('#slideshow').width()/3;
	  $('#slideshow').css({'height':height + 'px'});
	  $('#slideshow').flexslider({
      animation: "fade",
      animationLoop: true,
      slideshow: true,
      slideshowSpeed: 7000,
      randomize:false,
      prevText:"",
      nextText:"",
    });
	}); 
</script>