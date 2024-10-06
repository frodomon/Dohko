<div class="thumbnail">
	<?php if ( has_post_thumbnail()) { ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
			<img src="<?php echo $post_thumbnail_url; ?>" /> 
		</a>
	<?php } ?>
</div>
<div class="index-post-content">
  <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
</div>