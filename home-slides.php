<div id="slideshow">
  <ul class="slides">
    <?php 
      $slides = query_posts(array(
        'post_type' => 'slides',
        'order'     => 'ASC'
      ));
      foreach ($slides as $slide) :  setup_postdata($slide); 
          $slide_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($slide->ID) ); 
          $custom = get_post_custom($slide->ID);      
          if ( !empty($custom["slide_title"][0]) ) { $title = $custom["slide_title"][0];}
          if ( !empty($custom["slide_content"][0]) ) { $content = $custom["slide_content"][0];}
          if ( !empty($custom["button_content"][0]) ) { $btn_content = $custom["button_content"][0];}
          if ( !empty($custom["button_link"][0]) ) { $btn_link = $custom["button_link"][0];}        
      ?> 
        <li>
          <img class='slide' src=<?php echo esc_url($slide_thumbnail_url); ?> >
          <div class='slide-content'>
            <div class='fullwidth fullheight flex-center-center-row'>
              <div class="slide-wrap left">
                <?php if (!empty($title)) { ?><p class='slide-text'><?php echo $title; ?></p><?php } ?>    
              </div>
              <div class="fullwidth">
                <?php if (!empty($content)) { ?><p class='slide-text'><?php echo $content; ?></p><?php } ?>    
              </div>
              <?php if (!empty($btn_content)) { ?>
              <div class="slide-btn">
                <a href= '<?php echo esc_url("$btn_link"); ?>' target="_blank"><p class='slide-btn-text'><?php echo $btn_content; ?></p></a>
              </div>
              <?php } ?>    
            </div>
            
          </div>
        </li>
      <?php endforeach;  
      wp_reset_postdata(); 
    ?>
  </ul>
</div>