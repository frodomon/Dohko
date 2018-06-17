<hr class="section-separator">
<section id="clients" class="group">
  <h2 class="section-title">CLIENTS</h2>
  <div class="clients group">
    <?php 
      $posts= query_posts(array(
        'post_type' => 'clients',
        'order'=>'ASC'));
      foreach ($posts as $post) :  setup_postdata($post); 
    ?>      
      <div class="client">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
          <img src=" <?php echo $post_thumbnail_url; ?>">
        </a>
      </div>
    <?php endforeach;
    wp_reset_postdata(); ?>
  </div>
</section>