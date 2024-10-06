<?php
//ADD IMAGE UPLOADER TO POSTS

	function dohko_include_upload_image() {
		/*
		 * I recommend to add additional conditions just to not to load the scipts on each page
		 * like:
		 * if ( !in_array('post-new.php','post.php') ) return;
		 */
		if ( ! did_action( 'wp_enqueue_media' ) ) {
			wp_enqueue_media();
		}
 		wp_enqueue_script( 'upload_image', JAVASCRIPTS .'/image_uploader.js', array('jquery'), null, false );
	}
	add_action( 'admin_enqueue_scripts', 'dohko_include_upload_image' );

	/*
	 * @param string $name Name of option or name of post custom field.
	 * @param string $value Optional Attachment ID
	 * @return string HTML of the Upload Button
	 */
	function dohko_image_uploader_field( $name, $value = '') {
		$image = ' button">Upload image';
		$image_size = 'full'; // it would be better to use thumbnail size here (150x150 or so)
		$display = 'none'; // display state ot the "Remove image" button
	 
		if( $image_attributes = wp_get_attachment_image_src( $value, $image_size ) ) {
	 
			// $image_attributes[0] - image URL
			// $image_attributes[1] - image width
			// $image_attributes[2] - image height
	 
			$image = '"><img src="' . $image_attributes[0] . '" style="max-width:95%;display:block;" />';
			$display = 'inline-block';
	 
		} 
	 
		return '
		<div>
			<a href="#" class="dohko_upload_image_button' . $image . '</a>
			<input type="hidden" name="' . $name . '" id="' . $name . '" value="' . $value . '" />
			<a href="#" class="dohko_remove_image_button" style="display:inline-block;display:' . $display . '">Remove image</a>
		</div>';
	}

	/*
	 * Add a meta box
	 */
	add_action( 'admin_menu', 'dohko_meta_box_add' );
	 
	function dohko_meta_box_add() {
		add_meta_box('dohkodiv', // meta box ID
			'More settings', // meta box title
			'dohko_print_box', // callback function that prints the meta box HTML 
			'post', // post type where to add it
			'normal', // priority
			'high' ); // position
	}
	 
	/*
	 * Meta Box HTML
	 */
	function dohko_print_box( $post ) {
		$meta_key = '2nd_img';
		echo dohko_image_uploader_field( $meta_key, get_post_meta($post->ID, $meta_key, true) );
	}
	 
	/*
	 * Save Meta Box data
	 */
	add_action('save_post', 'dohko_save');
	 
	function dohko_save( $post_id ) {
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
			return $post_id;
	 
		$meta_key = '2nd_img';
	 
		update_post_meta( $post_id, $meta_key, $_POST[$meta_key] );
	 
		// if you would like to attach the uploaded image to this post, uncomment the line:
	  wp_update_post( array( 'ID' => $_POST[$meta_key], 'post_parent' => $post_id ) );
	 
		return $post_id;
	}
