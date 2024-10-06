<article class="index-post">
	<div class="thumbnail">
		<?php index_post_thumbnail(); ?>
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