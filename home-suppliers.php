<hr class="section-separator">
<section id="suppliers" class="group">
  <h2 class="section-title">SUPPLIERS</h2>
  <div class="suppliers group">
    <?php 
      $posts= query_posts(array(
        'post_type' => 'suppliers',
        'order'=>'ASC'));
      foreach ($posts as $post) :  setup_postdata($post); 
    ?>      
      <div class="supplier">
        <?php 
          $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $custom = get_post_custom($post->ID);
          $website = $custom["website"][0];
          $img_id = $custom["img_id"][0]; 
          $custom_img = wp_get_attachment_image_src( $img_id, 'full' );
          $custom_doc = wp_get_attachment_url( $img_id );
          $metadata = wp_get_attachment($img_id);
              
        ?>
        <a href="<?php echo $custom_doc; ?>"><?php echo $metadata['title'] ?></a>
        <a href="<?php echo $website; ?>" title="<?php the_title(); ?>">
          <img src=" <?php echo $custom_img[0]; ?>">
        </a>
      </div>
    <?php endforeach;
    wp_reset_postdata(); ?>
  </div>
</section>