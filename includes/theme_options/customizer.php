<?php
	/*******************************************
    Color scheme
  ********************************************/
  function dohko_customize_register( $wp_customize ) {
    // add the section to contain the settings
    $wp_customize->add_section( 'theme_colors' , array(
        'title' =>  __('Color Scheme','dohko')
    ) );
    // SETTINGS
    $wp_customize->add_setting(
      'bg_header' , array(
        'default' => '#1E3440',
        'type' => 'option',
        'transport' => 'postMessage',
        'capability' => 'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'text_header' , array(
        'default' => '#FFFFFF',
        'type' => 'option',
        'transport' => 'postMessage',
        'capability' => 'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'header_text_hover', array(
        'default'   =>  '#CFCFCF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'header_separator', array(
        'default'   =>  '#1E3440',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'bg_footer', array(
        'default'   =>  '#1E3440',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'footer_text', array(
        'default'   =>  '#FFFFFF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'footer_text_hover', array(
        'default'   =>  '#CFCFCF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    
    $wp_customize->add_setting(
      'separator', array(
        'default'   =>  '#1E3440',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'content_bg', array(
        'default'   =>  '#DADADA',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'main_color', array(
        'default'   =>  '#1E3440',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'main_text', array(
        'default'   =>  '#FFFFFF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'main_text_hover', array(
        'default'   =>  '#CFCFCF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'aux_1', array(
        'default'   =>  '#3C687F',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'aux_2', array(
        'default'   =>  '#5A9BBF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'aux_3', array(
        'default'   =>  '#6CBAE5',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'aux_4', array(
        'default'   =>  '#78CFFF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    // CONTROLS
    $wp_customize->add_control( 
      new WP_Customize_Color_Control(
        $wp_customize, 'bg_header', array(
          'label'   =>  'Header Background Color',
          'description' => 'Background color for Header',
          'section' =>  'theme_colors',
          'settings'  =>  'bg_header'
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Color_Control( 
        $wp_customize, 'text_header', array(
          'label' => 'Header Text Color',
          'description' => 'Text color for Header',
          'section' => 'theme_colors',
          'settings' => 'text_header'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'header_text_hover', array(
          'label'   =>  'Main Text Hover Color',
          'description' => 'Text hover color for header',
          'section' =>  'theme_colors',
          'settings'  =>  'header_text_hover'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'header_separator', array(
          'label'   =>  'Header Separator Color',
          'section' =>  'theme_colors',
          'settings'  =>  'header_separator'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'bg_footer', array(
          'label'   =>  'Footer Background Color',
          'description' => 'Footer Background color for footer',
          'section' =>  'theme_colors',
          'settings'  =>  'bg_footer',
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'footer_text', array(
          'label'   =>  'Footer Text Color',
          'description' => 'Footer Text color for footer',
          'section' =>  'theme_colors',
          'settings'  =>  'footer_text'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'footer_text_hover', array(
          'label'   =>  'Footer Text Hover Color',
          'description' => 'Footer Text hover color for footer',
          'section' =>  'theme_colors',
          'settings'  =>  'footer_text_hover'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'separator', array(
          'label'   =>  'Separator Color',
          'section' =>  'theme_colors',
          'settings'  =>  'separator'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'content_bg', array(
          'label'   =>  'Container Background Color',
          'description' => 'Background color for main container',
          'section' =>  'theme_colors',
          'settings'  =>  'content_bg'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'main_color', array(
          'label'   =>  'Main Color',
          'description' => 'Main Color',
          'section' =>  'theme_colors',
          'settings'  =>  'main_color'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'main_text', array(
          'label'   =>  'Main Color Text',
          'description' => 'Main Color Text',
          'section' =>  'theme_colors',
          'settings'  =>  'main_text'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'main_text_hover', array(
          'label'   =>  'Main Hover Color Text',
          'description' => 'Main Hover Color Text',
          'section' =>  'theme_colors',
          'settings'  =>  'main_text_hover'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'aux_1', array(
          'label' => 'Auxiliar Color 1',
          'description' => 'Main Links',
          'section' => 'theme_colors',
          'settings' => 'aux_1'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'aux_2', array(
          'label' => 'Auxiliar Color 2',
          'description' => 'Main Links Hover',
          'section' => 'theme_colors',
          'settings' => 'aux_2'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'aux_3', array(
          'label' => 'Auxiliar Color 3',
          'description' => 'Auxiliar Links',
          'section' => 'theme_colors',
          'settings' => 'aux_3'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'aux_4', array(
          'label' => 'Auxiliar Color 4',
          'description' => 'Auxiliar Links Hover',
          'section' => 'theme_colors',
          'settings' => 'aux_4'
        )
      )
    );
  }

  add_action( 'customize_register', 'dohko_customize_register' );
  
  function dohko_customize_colors() {
    $bg_header = get_option( 'bg_header' );
    $header_text = get_option( 'text_header' );
    $header_text_hover = get_option( 'header_text_hover' );
    $header_separator = get_option( 'header_separator' );
    $bg_footer = get_option( 'bg_footer' );
    $footer_text = get_option( 'footer_text' );
    $footer_text_hover = get_option( 'footer_text_hover' );
    $separator = get_option( 'separator' );
    $content_bg = get_option( 'content_bg' );
    $main_color = get_option( 'main_color' );
    $main_text = get_option( 'main_text' );
    $main_text_hover = get_option( 'main_text_hover' );
    $aux_1 = get_option( 'aux_1' );
    $aux_2 = get_option( 'aux_2' );
    $aux_3 = get_option( 'aux_3' );
    $aux_4 = get_option( 'aux_4' );
  ?>
    <style>
    /* color scheme */
      /* BASICS */
      a{
        color: <?php echo $main_color; ?>;
      }
      a:visited, a:hover{ 
        color: <?php echo $aux_1; ?>; 
      }
      /* LAYOUT */
      #container{
        background-color: <?php echo $content_bg; ?>; 
      }
      /* HEADER */
      header{
        background-color: <?php echo $bg_header; ?>; 
      }
      #search_text,
      #search_submit{
        background-color: <?php echo $bg_header; ?>;
        color: <?php echo $header_text; ?>; 
      }
      .sf-menu .menu-item a{
        color: <?php echo $header_text; ?>; 
      }
      .sf-menu .menu-item a:hover{
        color: <?php echo $header_text_hover; ?>; 
      }
      .sf-menu .sub-menu .menu-item a{
        color: <?php echo $header_text; ?>; 
        background-color: <?php echo $bg_header; ?>;
      }
      .sf-menu .sub-menu .menu-item a:hover{
        color: <?php echo $header_text_hover; ?>;
      }
      .header_separator{
        background-color: <?php echo $header_separator; ?>;
      }
      /*-----------------------TOOGLE MENU-----------------------------*/
      .fa-bars,
      .fa-bars:hover,
      .fa-bars:focus,
      .fa-search,
      .fa-search:hover,
      .fa-search:focus{
        color: <?php echo $header_text; ?>; 
      }
      .toggle-menu li{
        background-color: <?php echo $bg_header; ?>;
        color: <?php echo $header_text; ?>; 
      }
      .toggle-menu li:hover{
        background-color: <?php echo $aux_1; ?>;
      }
      .toggle-menu li a{
        color: <?php echo $header_text; ?>; 
      }
      .toggle-menu li a:hover{
        color: <?php echo $header_text; ?>; 
      }
      .toggle-menu li ul li{
        background-color: <?php echo $bg_header; ?>;
        color: <?php echo $header_text; ?>; 
      }
      .toggle-menu li ul li a{
        color: <?php echo $header_text; ?>;  
      }
      .toggle-menu li ul li:hover{
        background-color: <?php echo $aux_1; ?>;
      }
      /* FOOTER */
      footer{
        background-color: <?php echo $bg_footer; ?>;
        color: <?php echo $footer_text; ?>; 
      }
      footer a{
        color: <?php echo $footer_text; ?>; 
      }
      footer a:hover{
        color: <?php echo $footer_text_hover; ?>; 
      }
      .sn_icons,
      .sn_icons:visited{
        color: <?php echo $footer_text; ?>; 
      }
      .sn_icons:hover,
      .sn_icons:focus{
        color: <?php echo $footer_text_hover; ?>; 
      }
      /* FRONT-PAGE */
      .section-separator{
        background-color: <?php echo $separator; ?>; 
      }
      body,
      #services,
      #about_us,
      #contact_us,
      #news,
      #clients{
        background-color:  <?php echo $content_bg; ?>; 
      }
      .service-title,
      .service-description,
      .section-title,
      .section-description,
      .page-title{
        color: <?php echo $main_color; ?>;
      }
      /* INDEX */
      .post-type {
        background-color: <?php echo $aux_1; ?>;
      }
      .read_more {
        background-color: <?php echo $main_color; ?>;
        color: <?php echo $main_text; ?>;
      }
      .read_more:visited, .read_more:hover{
        background-color: <?php echo $aux_1; ?>;
        color: <?php echo $main_text; ?>;
      }
      .post-categories li{
        border-color: <?php echo $main_color; ?>;
        color: <?php echo $main_color; ?>;
      }
      .post-categories li:hover{
        border-color: <?php echo $aux_1; ?>;
        color: <?php echo $aux_1; ?>;
      }
      .meta-separator{
        background-color: <?php echo $content_bg; ?>; 
      }
      .post-tags li{
        border-color: <?php echo $aux_2; ?>;
        color: <?php echo $aux_2; ?>;
      }
      .post-tags li:visited,
      .post-tags li:hover{
        border-color: <?php echo $aux_3; ?>;
        color: <?php echo $aux_3; ?>;
      }
      .post-tags li a{
        border-color: <?php echo $aux_2; ?>;
        color: <?php echo $aux_2; ?>;
      }
      .post-tags li a:visited,
      .post-tags li a:hover{
        border-color: <?php echo $aux_3; ?>;
        color: <?php echo $aux_3; ?>;
      }
      .meta-post-index{
        color: <?php echo $main_color; ?>;
      }
      .pagination span, 
      .pagination a {
        border-color: <?php echo $main_color; ?>;
      }
      .pagination .current {
        background-color: <?php echo $main_color; ?>;
        color: <?php echo $main_text; ?>;
      }
      .pagination a:visited,
      .pagination a:hover {
        color: <?php echo $aux_1; ?>;
        border-color: <?php echo $aux_1; ?>;
      }
      /* SINGLE */
      .post .post-title h2{
        color: <?php echo $main_color; ?>;
      }
      .post .post-date{
        color: <?php echo $main_color; ?>;
      }
      .post .post-author{
        color: <?php echo $main_color; ?>;
      }
      .separator{
        background-color: <?php echo $content_bg; ?>;
      }
      .share_social{
        color: <?php echo $main_color; ?>;
      }
      .related_post{
        background-color: <?php echo $main_color; ?>;
      }
      .related_post .rp_title a{
        color: <?php echo $main_text; ?>; 
      }
      .related_post .rp_title a:hover{
        color: <?php echo $main_text_hover; ?>; 
      }
      /*--------------------WIDGETS-----------------------*/
      .widget-title {
        color: <?php echo $main_text; ?>; 
        background-color: <?php echo $main_color; ?>;
      }
      .recent_post{
        background-color: <?php echo $main_color; ?>;
      }
      .recent_post .rp_title a{
        color: <?php echo $main_text; ?>; 
      }
      .recent_post .rp_title a:hover{
        color: <?php echo $main_text_hover; ?>; 
      }
      /*--------PLUGINS--------*/
      .fbc-title{
        color: <?php echo $main_color; ?>;
      }
      /*--------PLUGINS--------*/
      .contact-content p,
      .contact-working_days p,
      .contact-form p{
        color: <?php echo $main_color; ?>;
      }
      .wpcf7-submit{
        background-color: <?php echo $main_color; ?>;
      }
      .wpcf7-text,
      .wpcf7-textarea{
        color: <?php echo $main_color; ?>;
      }
    </style>  
    <?php
  }
  add_action( 'wp_head', 'dohko_customize_colors' );
?>