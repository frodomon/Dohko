<?php	if ( has_post_thumbnail()) { ?>
	<a href="<?php echo esc_url(get_field('link_url')); ?>" title="<?php the_title_attribute(); ?>">
	  <?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
    <img src="<?php echo $post_thumbnail_url; ?>" /> 
	</a>
<?php } ?>
