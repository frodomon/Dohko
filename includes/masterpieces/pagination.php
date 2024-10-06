<?php
  function dohko_pagination($pages = '', $range = 2) {
    $showitems = ($range * 2)+1;  
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
      global $wp_query;
      $pages = $wp_query->max_num_pages;
      if(!$pages){ $pages = 1;}
    }   
    if(1 != $pages){ ?>
      <div class='pagination flex-center-row'>
      <?php if($paged > 2 && $paged > $range+1 && $showitems < $pages){ ?> <a href='<?php echo get_pagenum_link(1); ?>'> <?php _e('Primero'); ?></a><?php } ?>
      <?php if($paged > 1 && $showitems < $pages) { ?> <a href='<?php echo get_pagenum_link( $paged - 1); ?>'><</a><?php }
      //para cada pagina
      for ($i=1; $i <= $pages; $i++){
        if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
          if ($paged == $i){ ?>
            <p class='current'><?php echo $i; ?></p>
          <?php }
          else{ ?>
            <p class='inactive'><a href='<?php echo get_pagenum_link($i); ?>'><?php echo $i ?></a></p>
          <?php }
        }
      }
      if ($paged < $pages && $showitems < $pages){ ?>
        <p><a href='<?php echo get_pagenum_link($paged + 1); ?>'>></a></p>
      <?php } 
      if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){ ?>
        <p><a href='<?php echo get_pagenum_link($pages); ?>'><?php echo _e('Último'); ?></a></p>
      <?php } ?> 
      </div>
    <?php }
  }
?>