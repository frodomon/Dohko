<div class="gallery-post">
    <ul class="slides">
      <?php 
        if ( get_post_gallery() ) :
          $gallery = get_post_gallery( get_the_ID(), false );
          /* Loop through all the image and output them one by one */
          foreach( $gallery['src'] as $src ) : ?>
            <li>
              <img class='slide' src="<?php echo $src; ?>" />
            </li>
      <?php 
          endforeach; 
        endif;
      ?>
    </ul>
</div>

