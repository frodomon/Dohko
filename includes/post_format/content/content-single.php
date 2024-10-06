<article >
	<div class="thumbnail">
		<?php single_post_thumbnail(); ?>
	</div>
	<div class="post group">
		<?php 
			dohko_post_title();
			dohko_meta_top();
			dohko_post_content();
			if(is_singular()) { 
				dohko_social_share();
			}
			dohko_related_posts_category(); ?>
			<div class="fullwidth">
    		<?php echo do_shortcode('[fbcomments width="100%"]'); ?>
    	</div>
	</div>
</article>