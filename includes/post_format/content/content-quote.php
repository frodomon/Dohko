<div class="post group">
	<?php 
		get_template_part( 'includes/post_format/layout/layout', 'quote' );
		if(is_singular()) { 
			dohko_social_share();
		} 
  ?>
</div>