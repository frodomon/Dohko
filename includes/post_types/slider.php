<?php
  /** Create the Custom Post Type**/
  add_action('init', 'slider_register');  
  function slider_register() {  
    $labels = array(
      'name' => __('Slides'),
      'singular_name' => __('Slide'),
      'menu_name' => __('Slider Manager'),
      'name_admin_bar' => __('Slide'),
      'add_new' => __('Add New Slide'), 
      'add_new_item' => __('Add New Slide'), 
      'new_item' => __('New Slide'),
      'edit_item' => __('Edit Slide'),
      'view_item' => __('View Slide'),
      'all_items' => __('All Slides'),
      'search_items' => __('Search Slides'),

    );
    //Arguments to create post type.
    $args = array(  
      'labels' => $labels,
      'description' => __('Slider'),
      'public' => true,  
      'show_ui' => true,
      'show_in_menu' => true,
      'rewrite' => array('slug' => 'slides', 'with_front' => false),
      'capability_type' => 'post',  
      'has_archive' => true,
      'hierarchical' => true,
      'menu_position' => null,
      'supports' => array('title', 'editor', 'thumbnail'),
      'menu_icon' => 'dashicons-images-alt2',
    );  
    //Register type and custom taxonomy for type.
    register_post_type( 'slides' , $args );   
  }
  function slider_add_meta(){  
    add_meta_box("slider-meta", "Slider Options", "slider_meta_options", "slides", "normal", "high");   
  }
  add_action('add_meta_boxes','slider_add_meta');
  function slider_meta_options(){
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
        
    $custom = get_post_custom($post->ID);
    $website = $custom["website"][0]; 
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
    </div>   
    <?php  
  } 
    
  add_action('save_post', 'slider_save_extras'); 
  
  function slider_save_extras(){  
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ //if you remove this the sky will fall on your head.
      return $post_id;
    }else{
      update_post_meta($post->ID, "website", $_POST["website"]); 
    } 
  }  

  add_filter("manage_edit-slides_columns", "slider_edit_columns");   

  function slider_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Slider Name",
      "website" => "Website",
    );  
    return $columns;
  } 

  add_action("manage_slides_posts_custom_column",  "slides_custom_columns"); 

  function slides_custom_columns($column){
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