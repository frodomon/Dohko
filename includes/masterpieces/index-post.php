<?php 
	//POST THUMBNAIL on INDEX
	function index_post_thumbnail(){
    global $post;
		if ( has_post_thumbnail()) { ?>
		  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	      <?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
        <img src="<?php echo $post_thumbnail_url; ?>" /> 
		  </a>
    <?php }
	}
  //POST TITLE ON INDEX
	function index_post_title(){ 
	?>
    <h3 class="pad-bot"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php }
  //POST CONTENT ON INDEX AND SINGLE
	function dohko_post_content() {
  	global $post;
    if (is_singular() && $post->post_content !== '') {  
      $format = get_post_format($post);
      if ( strcmp($format,'chat') == 0) { 
        dohko_excerpt(); ?>
        <div class="post-content format-chat">
      <?php }
      else {
      ?>
        <div class="post-content">
          <?php dohko_excerpt();
      }
          the_content(); ?>
        </div>
    <?php } 
    if (!is_singular()) { 
      dohko_excerpt();
    } 
	}
  //SHOW THE EXCERPT WITH SEPARATOR
	function dohko_excerpt(){
 		global $post;
    if (is_singular()) {?>
      <hr class='separator'>
    <?php }
  ?>	
  	<div class="pad-bot">
  		<?php the_excerpt(); ?>
    </div>
  <?php
  }
  //SHOW THE EXCERPT WITHOUT SEPARATOR
  function dohko_only_excerpt_text(){
  ?>
    <div class="index-post-excerpt">
      <?php the_excerpt(); ?>
    </div>
  <?php }
  //READ MORE ON INDEX
  function dohko_read_more(){
  ?>
		<div class="read_more-button group">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="read_more">
        <p class='readmore'><?php _e('Leer Más','dohko'); ?></p>
      </a>
		</div>
  	
  <?php }

  //POST AUTHOR AND DATE ON INDEX
  function dohko_post_attributes(){
  ?>
    <div class="fullwidth pad-bot group">
      <div class="col-6 left">
        <p class='alignleft attributes'>Por <a href="<?php the_author_meta('user_url',false); ?>"><?php the_author(); ?></a></p>
      </div>
      <div class="col-6 left">
        <?php
          $year = get_the_time( 'Y' );
          $month = get_the_time( 'm' );
        ?>
        <p class='alignright attributes'><a href="<?php echo get_month_link( $year, $month ); ?>"><?php the_time('d F Y'); ?></a></p>
      </div>
    </div>
  <?php 
  }
  //META TAGS on INDEX
  function dohko_meta_index(){
  ?>
    <hr class="margin-bot">
    <div class='meta-tags'>
      <?php 
        the_category(', '); 
        the_tags('<ul class="post-tags"><li>','</li><li>','</li></ul>'); 
      ?>
    </div>
  <?php }
?>
