<?php /* Template Name: Archives */ ?>
<?php get_header(); ?>
<section id="page" class="group">
	<div class="col-9 col-tab-6 col-mob-4 left">
		<div class="w90">
			<h2><?php _e('Historial por mes:','dohko') ?></h2>
			<ul>
				<?php wp_get_archives(array(
					'type'		=>	'monthly',
				)); ?>
			</ul>
			<h2><?php _e('Historial por categoria:','dohko'); ?></h2>
			<ul>
				 <?php wp_list_categories('hierarchical=0&title_li='); ?>
			</ul>	
		</div>
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>