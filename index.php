<?php get_header(); ?>
<section id='blog' class='group'>
	<div class="col-9 col-mob-4 pad-bot-2x left group">
		<?php if (is_category()){ ?>
			<h3 class="pad-bot-4x"><?php 
				_e('Categoría: ','dohko');
				single_cat_title();
				?>
			</h3>
		<?php } if (is_tag()){ ?>
			<h3 class="pad-bot-4x"><?php 
				_e('Etiqueta: ','dohko');
				single_tag_title();
				?>
			</h3>
		<?php } elseif (is_search()){ ?>
			<h3 class="pad-bot-4x"><?php 
				_e('Resultados de bùsqueda para: ','dohko');
				the_search_query();
				?>
			</h3>
		<?php } elseif (is_day()){ ?>
			<h3 class="pad-bot-4x"><?php 
				_e('Archivo: ','dohko');
				the_time( get_option('date_format'));
				?>
			</h3>
		<?php } elseif (is_month()){ ?>
			<h3 class="pad-bot-4x"><?php 
				_e('Archivo: ','dohko');
				the_time('F Y');
				?>
			</h3>
		<?php } elseif (is_year()){ ?>
			<h3 class="pad-bot-4x"><?php 
				_e('Archivo: ','dohko');
				the_time( 'Y');
				?>
			</h3>
		<?php } elseif (is_author()){ ?>
			<h3 class="pad-bot-4x"><?php 
				_e('Artículos de: ','dohko');
				$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
				echo $curauth->display_name;
				?>
			</h3>
		<?php  } /* elseif (is_home()){ 
			if (!is_front_page() ){?>
				<h3 class="pad-bot-4x"><?php wp_title('',true,'right');?></h3>
		<?php }} */	?> 
		<div id="grid" class="group pad-bot-4x" data-columns >
			<?php
				if (have_posts()) :  
					while (have_posts()) : the_post();
						if ( get_post_format() ) {
							get_template_part( 'includes/post_format/loop/loop', get_post_format() );
						}
						else {
							get_template_part( 'includes/post_format/loop/loop','single' );
						} 
					endwhile; else: 
				endif; 
			?>
		</div>
		<?php dohko_pagination($pages = '', $range = 2); ?>
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
<script type="text/javascript">
	window.sr = ScrollReveal({
	 reset: true,
	 origin: 'bottom',
	 mobile: false
	});
	sr.reveal('.index-post');
 	jQuery(window).ready(function($) {
	  $('.gallery-post').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: true,
      slideshow: true,
      slideshowSpeed: 7000,
      randomize:false,
      prevText:"",
      nextText:"",
	  });
	  $('.entry-video').fitVids();
	}); 
</script>