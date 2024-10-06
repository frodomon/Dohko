<section id="news" class="group">
  <h2 class="pad-bot aligncenter">BLOG</h2>
  <div id="news-posts" class="fullwidth flex-top-row group">
    <?php 
      $posts= query_posts(array(
        'posts_per_page' => '4',
        'post_type' => 'post',
        'post_status' => 'publish',
        'tax_query' => 
          array(  
            array(
              'taxonomy' => 'post_format',
              'field' => 'slug',
              'terms' => array('post-format-quote', 'post-format-status','post-format-gallery','post-format-chat','post-format-video','post-format-audio','post-format-link'),
              'operator' => 'NOT IN'
            )
          )
      ));
      foreach ($posts as $post) :  setup_postdata($post); 
    ?>      
      <div class="col-3 col-mob-4 col-tab-4 left">
        <article class="index-post">
          <div class="thumbnail">
            <?php index_post_thumbnail();?>
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
      </div>
    <?php endforeach;
    wp_reset_postdata(); ?>
  </div>
</section>