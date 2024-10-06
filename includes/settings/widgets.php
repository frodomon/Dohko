<?php
	class Dohko_Recent_Posts_Widget extends WP_Widget {

		public function __construct() {
			parent::__construct(
		 		'dohko_recent_posts_widget', // Base ID
				'Dohko Recent Posts', // Name
				array( 'description' => __( 'Displays the recent posts')) // Args
			);
		}
		
		public function widget( $args, $instance ) {
			extract( $args );
			$title = apply_filters( 'widget_title', $instance['title'] );
			$dis_posts = $instance['dis_posts'];

			echo $before_widget;
			if ( ! empty( $title ) ) echo $before_title . $title . $after_title;

			$args = array( 
				'posts_per_page' => $dis_posts,
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
					)
			);
			$posts = new WP_Query($args); ?>

			<div class='recent_post'>
			<?php
			if ($posts->have_posts()){
				while ( $posts->have_posts() ) {
					$post = $posts->the_post(); ?>
	        	<h5 class="pad-bot-2x"><a class='rp_list' href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><i class="fa fa-edit rp_icon" aria-hidden="true"></i><?php the_title(); ?></a></h5>
		    <?php }
		  } ?>
		  </div>
			<?php 
				wp_reset_postdata();
				echo $after_widget; 
		}

		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['dis_posts'] = strip_tags( $new_instance['dis_posts'] );

			return $instance;
		}

		public function form( $instance ) {
			$title = (isset( $instance[ 'title' ])) ? esc_attr($instance['title']) : 'Recent Posts';
			$dis_posts = (isset( $instance['dis_posts'])) ? esc_attr($instance['dis_posts']) : '3';
		?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?>
					<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
				</label>
			</p>
	    <p>
	    	<label for="<?php echo $this->get_field_id('dis_posts'); ?>"><?php _e('Number of Posts Displayed:'); ?>
	    		<input class="widefat" id="<?php echo $this->get_field_id('dis_posts'); ?>" name="<?php echo $this->get_field_name('dis_posts'); ?>" type="text" value="<?php echo $dis_posts; ?>" />
	    	</label>
	    </p>
		<?php 
		}
	}
	function load_widget(){
		register_widget( 'Dohko_Recent_Posts_Widget' );
	}
	add_action("widgets_init","load_widget");
?>