<section id="services">
  <h2 class="section-title">SERVICIOS</h2>
  <p class="section-description">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
	<div class="services group">
		<?php 
      $posts= query_posts(array(
        'post_type' => 'services',
        'order'=>'ASC'));
      foreach ($posts as $post) :  setup_postdata($post); 
    ?>      
    <div class="service">
      <?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      	<div class="service-thumbnail" style="background:url(<?php echo $post_thumbnail_url; ?>) no-repeat center center; background-size:110%">
      	</div>
      </a>
      <div class="service-content">
        <h3 class='service-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class='service-excerpt'><?php echo get_the_excerpt($post); ?></p>
      </div>
    </div>
    <?php endforeach;  
    wp_reset_postdata(); ?>
	</div>
</section>