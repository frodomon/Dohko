<?php
  /** Create the Custom Post Type**/
  add_action('init', 'supplier_register');  
  function supplier_register() {
    $labels = array(
      'name' => __('Suppliers'),
      'singular_name' => __('Supplier'),
      'menu_name' => __('Supplier Manager'),
      'name_admin_bar' => __('Supplier'),
      'add_new' => __('Add New Supplier'), 
      'add_new_item' => __('Add New Supplier'), 
      'new_item' => __('New Supplier'),
      'edit_item' => __('Edit Supplier'),
      'view_item' => __('View Supplier'),
      'all_items' => __('All Suppliers'),
      'search_items' => __('Search Suppliers'),
    );
    //Arguments to create post type.
    $args = array(  
      'labels' => $labels,
      'description' => __('Suppliers'),
      'public' => true,  
      'show_ui' => true,
      'show_in_menu' => true,
      'rewrite' => array('slug' => 'suppliers', 'with_front' => false),
      'capability_type' => 'post',  
      'has_archive' => true,
      'hierarchical' => true,  
      'menu_position' => null,
      'supports' => array('title', 'editor', 'thumbnail'),
      'menu_icon' => 'dashicons-admin-users',
    );  
    register_post_type( 'suppliers' , $args );   
  }
  function supplier_add_meta(){  
    add_meta_box("supplier-meta", "Supplier Options", "supplier_meta_options", "suppliers", "normal", "high");   
  }
  add_action('add_meta_boxes','supplier_add_meta');
  function supplier_meta_options(){
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
        
    $custom = get_post_custom($post->ID);
    $website = $custom["website"][0]; 

    $img_id = $custom["img_id"][0]; 
    // Get WordPress' media upload URL
    $upload_link = esc_url( get_upload_iframe_src( 'image', $post->ID ) );
    // See if there's a media id already saved as post meta
    $your_img_id = get_post_meta( $post->ID, '_your_img_id', true );
    // Get the image src
    $your_img_src = wp_get_attachment_image_src( $img_id, 'full' );
    // For convenience, see if the array is valid
    $you_have_img = is_array( $your_img_src );
    ?>  

    <div class="metabox">
      <?php 
        $website= ($website == "") ? "http://" : $website;
      ?>
      <div class="field group">
        <div class="fieldname">
          <label>Website:</label>
        </div>
        <div class="fieldvalue">
          <input name="website" value="<?php echo $website; ?>" />
        </div>    
      </div>
      <div class="field group">
        <div class="fieldname">
          <label>Picture:</label>
        </div>
        <div class="fieldvalue">
          <div class="custom-img-container">
            <?php if ( $you_have_img ) : ?>
                <img src="<?php echo $your_img_src[0] ?>"  />
            <?php endif; ?>
          </div>
          <!-- Your add & remove image links -->
          <div class='custom-img-controls'>
            <p class="hide-if-no-js">
               <a class="upload-custom-img <?php if ( $you_have_img  ) { echo 'hidden'; } ?>" href="<?php echo $upload_link ?>">
                <?php _e('Set custom image') ?>
              </a>
              <a class="delete-custom-img <?php if ( ! $you_have_img  ) { echo 'hidden'; } ?>" href="#">
                <?php _e('Remove this image') ?>
              </a>
            </p>
          </div>
          <!-- A hidden input to set and post the chosen image id -->
          <input class="custom-img-id" name="img_id"  value="<?php echo esc_attr( $img_id ); ?>" />
        </div>
      </div>
    </div>   
    <?php  
  } 
    
  add_action('save_post', 'supplier_save_extras'); 
  
  function supplier_save_extras(){  
    global $post;  
    
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ //if you remove this the sky will fall on your head.
      return $post_id;
    }else{
      update_post_meta($post->ID, "website", $_POST["website"]); 
      update_post_meta($post->ID, "img_id", $_POST["img_id"]); 
    } 
  }  

  add_filter("manage_edit-suppliers_columns", "supplier_edit_columns");   

  function supplier_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Supplier Name",
      "website" => "Website",
    );  
    return $columns;
  } 

  add_action("manage_suppliers_posts_custom_column",  "supplier_custom_columns"); 

  function supplier_custom_columns($column){
    global $post;
    $custom = get_post_custom();
    switch ($column)
    {
      case "website":
          echo $custom["website"][0];
          break;
    }
  } 

?>