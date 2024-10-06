<?php
  /** Create the Custom Post Type**/
  function products_register() {  
    $labels = array(
      'name'                => __('Products', 'dohko'),
      'singular_name'       => __('Producto', 'dohko'),
      'menu_name'           => __('Productos', 'dohko'),
      'all_items'           => __('Todos los productos', 'dohko'),
      'add_new'             => __('Añadir nuevo', 'dohko'), 
      'add_new_item'        => __('Añadir nuevo producto', 'dohko'), 
      'new_item'            => __('Nuevo Producto', 'dohko'),
      'edit_item'           => __('Editar Producto', 'dohko'),
      'update_item'         => __('Actualizar Producto', 'dohko'),
      'view_item'           => __('Ver Producto', 'dohko'),
      'search_items'        => __('Buscar Productos', 'dohko'),
      'not_found'           => __('No encontrado', 'dohko'),
      'not_found_in_trash'  => __('No hay nada en la papelera', 'dohko')
    );
    //Arguments to create post type.
    $args = array(  
      'label'                 => __('Product','dohko'),
      'description'           => __('Productos para mostrar en la página de inicio', 'dohko'),
      'labels'                => $labels,
      'supports'              => array('title', 'thumbnail'),
      'hierarchical'          => false,
      'public'                => true,  
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 20,
      'menu_icon'             => 'dashicons-images-alt2',
      'show_in_admin_bar'     => false,
      'show_in_nav_menus'     => false,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'show_in_rest'          => true,
      'publicly_queryable'    => true,
      'rewrite'               => array('slug' => 'products', 'with_front' => false),
      'capability_type'       => 'post',    
    );  
    register_post_type( 'products' , $args );
  }
  add_action('init', 'products_register');

  function create_product_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
      'name'              => __( 'Game Lines', 'dohko'),
      'singular_name'     => __( 'Game Line', 'dohko'),
      'menu_name'         => __( 'Game Lines', 'dohko'),
      'search_items'      => __( 'Search Game Lines', 'dohko'),
      'all_items'         => __( 'All Game Lines', 'dohko'),
      'parent_item'       => __( 'Parent Game Line', 'dohko'),
      'parent_item_colon' => __( 'Parent Game Line:', 'dohko'),
      'new_item_name'     => __( 'New Game Line Name', 'dohko'),
      'add_new_item'      => __( 'Add New Game Line', 'dohko'),
      'edit_item'         => __( 'Edit Game Line', 'dohko'),
      'update_item'       => __( 'Update Game Line', 'dohko'),
      'add_or_remove_items'        => __( 'Agregar o eliminar productos', 'dohko' ),
      'choose_from_most_used'      => __( 'Escoge entre los más usados', 'dohko' ),
      'popular_items'              => __( 'Productos populares', 'dohko' ),
      'search_items'               => __( 'Buscar productos', 'dohko' ),
      'not_found'                  => __( 'No se encontro productos', 'dohko' ),
      'no_terms'                   => __( 'No hay productos', 'dohko' ),
      'items_list'                 => __( 'Lista de productos', 'dohko' ),
    );
    $args = array(
      'label'             => __('Game Line','dohko'),
      'labels'            => $labels,
      'hierarchical'      => true,
      'public'            => true,
      'show_ui'           => true,
      'show_in_rest'      => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array( 'slug' => 'gamelines', 'with_front'=> false ),
    );
    register_taxonomy( 'gamelines', array( 'products' ), $args );
  }
  add_action( 'init', 'create_product_taxonomies', 0);

  //Arreglo con la estructura de los nuevos campos personalizados
  $product_custom_fields = array(
    array(
      'label' => __('Nombre Corto', 'dohko'),
      'description' => __('Ingresa el nombre corto del producto', 'dohko'),
      'id' => 'shortname',
      'type' => 'text'
    ),
    array(
      'label' => __('Descripcion', 'dohko'),
      'description' => __('Ingresa la descripcion del producto', 'dohko'),
      'id' => 'description',
      'type' => 'text'
    ),
    array(
      'label' => __('Precio Full', 'dohko'),
      'description' => __('Ingresa el precio de lista del producto', 'dohko'),
      'id' => 'preciofull',
      'type' => 'text'
    ),
    array(
      'label' => __('Precio Preventa', 'dohko'),
      'description' => __('Ingresa el precio de preventa del producto', 'dohko'),
      'id' => 'precioprevta',
      'type' => 'text'
    ),
    array(
      'label' => __('Precio Oferta', 'dohko'),
      'description' => __('Ingresa el precio oferta del producto', 'dohko'),
      'id' => 'preciooferta',
      'type' => 'text'
    )
  );

  
  function products_meta_options(){
    global $product_custom_fields, $post;

    wp_nonce_field('product_meta_options_nonce', 'meta_box_nonce');
    //if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id; ?>

    <div class="metabox">
      <?php foreach($product_custom_fields as $attribute){
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
    <?php  
  } 
  function products_metabox(){  
    add_meta_box("products-meta", __("Product Options",'dohko'), "products_meta_options", "products", "normal", "high");   
  }
  add_action('add_meta_boxes','products_metabox');

  function products_save_metabox($post_id ){  
    global $product_custom_fields, $post;

    // Verificamos envío del nonce
    if ( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'product_meta_options_nonce' ) ) {
      return;
    }
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ //if you remove this the sky will fall on your head.
      return $post_id;
    }
    foreach($product_custom_fields as $attribute){
      $old = get_post_meta($post_id, $attribute['id'], true);
      $new =  $_POST[$attribute['id']];
      if ( $new && $new != $old ) {
        update_post_meta($post_id, $attribute['id'], $new);   
      } elseif ( $new == '' && $old ){
        delete_post_meta($post_id, $attribute['id'], $old);
      }   
    } 
  }  
  add_action('save_post','products_save_metabox');

  function products_edit_columns($columns){
    $extra = array(
      'shortname'     => __('Short Name','dohko'),
      'description'   => __('Description','dohko'),
      'preciofull'    => __('Full Price','dohko'),
      'precioprevta'  => __('Pre-Sale Price','dohko'),
      'preciooferta'  => __('Offer Price','dohko')
    );  
    return array_merge($columns, $extra);
  } 
  add_filter("manage_edit-products_columns", "products_edit_columns");

  function products_custom_columns($column){
    $custom = get_post_custom();
    if (isset($custom[$column])){ echo $custom[$column][0]; } 
  } 
  add_action("manage_products_posts_custom_column",  "products_custom_columns");
?>