<?php
  /** Create the Custom Post Type**/
  add_action('init', 'service_register');  
  function service_register() {  
    //Arguments to create post type.
    $args = array(  
      'label' => __('Services Manager'),  
      'singular_label' => __('Service'),  
      'public' => true,  
      'show_ui' => true,  
      'capability_type' => 'post',  
      'hierarchical' => true,  
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'rewrite' => array('slug' => 'services', 'with_front' => false),
      'menu_icon' => 'dashicons-portfolio',
    );  
    //Register type and custom taxonomy for type.
    register_post_type( 'services' , $args );   
  }  
?>