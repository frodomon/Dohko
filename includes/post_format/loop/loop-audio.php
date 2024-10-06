<article class="index-post">
	<div class="thumbnail">
		<?php get_template_part( 'includes/post_format/layout/layout', 'audio' ); ?>
	</div>
	<div class="index-post-content">
		<?php 
			dohko_post_attributes();
			index_post_title();
			dohko_post_content();
			dohko_meta_index()
		?>
	</div>
</article>