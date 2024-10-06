<?php get_header(); ?>
<section class="group">
	<div id="blog" class="col-9 col-tab-6 col-mob-4 left">
		<div class="w90">
			<?php if (have_posts()) :  while (have_posts()) : the_post(); 
				if ( get_post_format() ) {
					get_template_part( 'includes/post_format/content/content', get_post_format() );
				} 
				else {
					get_template_part( 'includes/post_format/content/content', 'single' );
				}?>
			<?php endwhile; else: ?>
				<p><?php _e('No posts were found. Sorry!'); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
<script type="text/javascript">
 	jQuery(window).ready(function($) {
	  $('.gallery-post').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: true,
      slideshow: true,
      slideshowSpeed: 7000,
      randomize:false,
      prevText:"",
      nextText:"",
	  });
	  $('.entry-video').fitVids();
	}); 
</script>