<?php
  /* Create the Custom Post Type */
  function slides_register() {  
    $labels = array(
      'name'                => __('Slides', 'dohko'),
      'singular_name'       => __('Slide', 'dohko'),
      'menu_name'           => __('Slides', 'dohko'),
      'all_items'           => __('Todos los slides', 'dohko'),
      'add_new'             => __('Añadir nuevo', 'dohko'), 
      'add_new_item'        => __('Añadir nuevo slide', 'dohko'), 
      'new_item'            => __('Nuevo slide', 'dohko'),
      'edit_item'           => __('Editar slide', 'dohko'),
      'update_item'         => __('Actualizar slide', 'dohko'),
      'view_item'           => __('Ver slide', 'dohko'),
      'search_items'        => __('Buscar slides', 'dohko'),
      'not_found'           => __('No encontrado', 'dohko'),
      'not_found_in_trash'  => __('No hay nada en la papelera', 'dohko')
    );
    //Arguments to create post type.
    $args = array(
      'label'                 => __('Slide','dohko'),
      'description'           => __('Slides para mostrar en la página de inicio', 'dohko'),
      'labels'                => $labels,
      'supports'              => array('title', 'thumbnail'),
      'hierarchical'          => false,
      'public'                => true,  
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 20,
      'menu_icon'             => 'dashicons-slides',
      'show_in_admin_bar'     => false,
      'show_in_nav_menus'     => false,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'show_in_rest'          => true,
      'publicly_queryable'    => true,
      'rewrite'               => array('slug' => 'slides', 'with_front' => false),
      'capability_type'       => 'post',        
    );
    //Register type and custom taxonomy for type.
    register_post_type( 'slides' , $args );   
  }
  add_action('init', 'slides_register');

  //Arreglo con la estructura de los nuevos campos personalizados
  $slider_custom_fields = array(
    array(
      'label' => __('Titulo Slider', 'dohko'),
      'description' => __('Ingresa el título del slider', 'dohko'),
      'id' => 'slide_title',
      'type' => 'text'
    ),
    array(
      'label' => __('Bajada Slider', 'dohko'),
      'description' => __('Ingresa la bajada del slider', 'dohko'),
      'id' => 'slide_content',
      'type' => 'text'
    ),
    array(
      'label' => __('Texto del botón', 'dohko'),
      'description' => __('Ingresa el texto que tendrá el botón del slider', 'dohko'),
      'id' => 'button_content',
      'type' => 'text'
    ),
    array(
      'label' => __('Enlace del botón', 'dohko'),
      'description' => __('Ingresa el enlace que tendrá el botón del slider', 'dohko'),
      'id' => 'button_link',
      'type' => 'text'
    )
  );

  // Agregar el metabox al administrador de wordpress
  function slides_meta_options(){
    global $slider_custom_fields, $post;

    wp_nonce_field('slides_meta_options_nonce', 'meta_box_nonce');
   // if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
    ?>
    <div class="metabox">
      <?php foreach($slider_custom_fields as $attribute){
        //Obtener el valor del campo
        $custom = get_post_meta($post->ID, $attribute['id'], true);    
      ?>  
        <div class="field">
          <div class="fieldname">
            <label for="<?php echo $attribute['id']; ?>"><?php echo $attribute['label']; ?></label>
          </div>
          <div class="fieldvalue">
            <input class="widefat" id="<?php echo $attribute['id']; ?>" type="text" name="<?php echo $attribute['id']; ?>" value="<?php echo $custom; ?>">
            <span class="howto"><?php echo $attribute['description']; ?></span>
          </div>    
        </div>
      <?php } ?>
    </div>
  <?php }
  function slides_metabox(){  
    add_meta_box("slides-meta", __("Slides Options",'dohko'), "slides_meta_options", "slides", "normal", "high");   
  }
  add_action('add_meta_boxes','slides_metabox');

  //Grabando los campos personalizados del custom post type
  function slides_save_metabox( $post_id ){
    global $slider_custom_fields, $post;

    // Verificamos envío del nonce
    if ( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'slides_meta_options_nonce' ) ) {
      return;
    }
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ //if you remove this the sky will fall on your head.
      return;
    }
    foreach($slider_custom_fields as $attribute){
      $old = get_post_meta($post_id, $attribute['id'], true);
      $new =  $_POST[$attribute['id']];
      if ( $new && $new != $old ) {
        update_post_meta($post_id, $attribute['id'], $new);   
      } elseif ( $new == '' && $old ){
        delete_post_meta($post_id, $attribute['id'], $old);
      }   
    } 
  }
  add_action('save_post','slides_save_metabox');

  //Agregando columnas con los campos personalizados del tipo de Post
  function slides_edit_columns( $columns ){

    $extra = array(
      'slide_title' => __('Slide Title', 'dohko'),
      'slide_content' => __('Slide Content', 'dohko'),
      'button_content' => __('Button Text', 'dohko'),
      'button_link' => __('Button Link', 'dohko')
    );
    return array_merge($columns, $extra);
  }
  add_filter('manage_edit-slides_columns','slides_edit_columns');

  //Mostrando el valor de los campos personalizados del tipo de Post
  function slides_custom_columns( $column ){
    $custom = get_post_custom();
    if (isset($custom[$column])){ echo $custom[$column][0]; } 
    /*
    switch ( $column ){
      case 'slide_title':
        echo $custom[$column][0];
        break;
      case 'slide_content':
        echo $custom[$column][0];
        break;
      case 'button_content':
        echo $custom[$column][0];
        break;
      case 'button_link':
        echo $custom[$column][0];
        break;
    }
    */
  }
  add_action('manage_slides_posts_custom_column','slides_custom_columns');
?>