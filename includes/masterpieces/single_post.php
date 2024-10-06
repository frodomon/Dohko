<?php
	function single_post_thumbnail(){
    global $post;
		if ( has_post_thumbnail()) { 
			$post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
      <img src="<?php echo $post_thumbnail_url; ?>" /> 
    <?php }
	}
  //POST TITLE
	function dohko_post_title(){ 
	?>
    <h2 class="pad-bot"><?php the_title(); ?></h2>
	<?php }
  //POST META TAGS
	function dohko_meta_top(){
  ?>
    <div class="fullwidth pad-bot group">
      <div class="col-6 left">
        <p class='attributes'>Por <?php the_author_posts_link(); ?>, <?php echo get_the_date('j F Y'); ?></p>
      </div>
      <div class="col-6 left">
        <div class='meta-tags alignright'>
          <?php
            the_category(', ');
            // (the_tags('<ul class="post-tags"><li>','</li><li>','</li></ul>')); 
          ?>
        </div>
      </div>
    </div> 
  <?php }

  function dohko_social_share() { 
		global $post;
  ?>
	  <div class='share_social pad-bot-2x'>
	  	<h4 class="pad-bot">Compartir:</h4>
      <div class="flex-center-row pad-bot">
    		<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="share_links" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;">
     			<i class="fa fa-facebook-square share_icons"></i>
    		</a>
    		<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo urlencode(get_the_title()); ?>" class="share_links" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;">
    			<i class="fa fa-twitter share_icons"></i>
    		</a>
    		<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="share_links" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
          <i class="fa fa-google-plus-official share_icons"></i>
        </a>
      </div>    
    </div>
	<?php
    
  }

  function dohko_related_posts_category() { 
    global $post;
    $orig_post = $post;
    $post_id = get_the_ID();
    $category_ids = array();
    $categories = get_the_category($post_id);
    if ($categories && ! is_wp_error($categories)) {
      foreach($categories as $category) array_push( $category_ids,$category->term_id);
      $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post_id),
        'posts_per_page'=>3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'tax_query' => 
          array(  
            array(
              'taxonomy' => 'post_format',
              'field' => 'slug',
              'terms' => array('post-format-quote', 'post-format-status'),
              'operator' => 'NOT IN'
            )
          ),
        'ignore_sticky_posts'=>1
      );
      $my_query = new WP_query( $args );
      if( $my_query->have_posts() ) { ?>
        <h3 class="pad-bot">Podría Interesarte:</h3>
        <div class="flex-top-row pad-bot group">
      <?php
        while( $my_query->have_posts() ) {
          $my_query->the_post(); ?>

          <div class="col-4 col-mob-4 left">
            <article class="index-post">
              <?php 
              if ( get_post_format() ) { get_template_part( 'includes/recent_posts_widget/layout', get_post_format() );}
              else { ?>
                <div class="thumbnail">
                  <?php index_post_thumbnail(); ?>
                </div> 
                <div class="index-post-content">
                  <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                </div>
              <?php } ?>
            </article>
          </div>
        <?php } ?>
        </div>
      <?php }
    }
    $post = $orig_post;
    wp_reset_postdata(); 
  }

  function dohko_related_posts_tags() { 
    global $post;
    $orig_post = $post;
    $tags = wp_get_post_tags($post->ID);
      if ($tags) {
        $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
        $args=array(
          'tag__in' => $tag_ids,
          'post__not_in' => array($post->ID),
          'posts_per_page'=>3,
          'post_type' => 'post',
          'post_status' => 'publish',
          'tax_query' => 
            array(  
              array(
                'taxonomy' => 'post_format',
                'field' => 'slug',
                'terms' => array('post-format-quote', 'post-format-status'),
                'operator' => 'NOT IN'
              )
            ),
          'caller_get_posts'=>1
        );
        $my_query = new wp_query( $args );
      if( $my_query->have_posts() ) {
        echo '<h3 class="fbc-title">Podría Interesarte:</h3><div id="related_posts" class="group">';
        while( $my_query->have_posts() ) {
          $my_query->the_post(); ?>

          <div class="related_post">
            <?php
              if ( get_post_format() ) {
                get_template_part( 'includes/recent_posts_widget/layout', get_post_format() );
              }
              else { ?>
                <?php if ( has_post_thumbnail()) { 
                  $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class='related_thumbnail' style="background: url('<?php echo $post_thumbnail_url; ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover;  -o-background-size: cover; background-size: cover;">
                    </div>
                  </a>  
              <?php } } ?>
              <a href="<?php the_permalink(); ?>">
                <div class='related_title'>
                  <h4 class="no-margin rp_title"><?php the_title(); ?></h4>
                </div>
              </a>
          </div>
        <?php }
        echo '</div>';
      }
    }
    $post = $orig_post;
    wp_reset_query(); 
  }
  
?>