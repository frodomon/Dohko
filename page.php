<?php get_header(); ?>
<section id="page" class="group">
	<div class="col-9 col-tab-6 col-mob-4 left">
		<div class="w90">
			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
				<div class="post group">
					<?php dohko_post_title(); ?>
					<hr class='separator'>
					<?php the_content(); ?>
				</div>
			<?php endwhile; else: ?>
				<p><?php _e('No posts were found. Sorry!'); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>