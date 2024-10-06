<?php get_header(); ?>
<div id="container">
	<div id="services" class="group">
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
      	<?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
      	
      	<div class="service-img" style="background:url(<?php echo $post_thumbnail_url; ?>) no-repeat center center; background-size:cover">
      	</div>
	      <div class="service-page-content">
	      	<h2 class='page-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	      	<p class='service-content'><?php echo get_the_content($post); ?></p>
	      </div>

		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
