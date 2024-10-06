<?php

  function dohko_social_customize_register( $wp_customize ) {
    $wp_customize->add_panel('dohko_theme_panel', array(
      'title' => __('Personalizar el tema Dohko', 'dohko'),
      'description' => __('Los enlaces que apareceran a tus redes sociales', 'dohko'),
      'priority' => 35
    ));
    /*******************************************
    SECTION SOCIAL NETWORKS
    ********************************************/
    $wp_customize->add_section('dohko_social', array(
      'title' => __('Enlaces a redes sociales', 'dohko'),
      'description' => __('Los enlaces que apareceran a tus redes sociales', 'dohko'),
      'priority' => 10,
      'panel' => 'dohko_theme_panel'
    ));
    //FACEBOOK
    $wp_customize->add_setting('dohko_social_settings[facebook]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('facebook', array(
      'label' => __('Enlace a página de Facebook', 'dohko'),
      'section' =>'dohko_social',
      'settings' => 'dohko_social_settings[facebook]'
    ));
    //INSTAGRAM
    $wp_customize->add_setting('dohko_social_settings[instagram]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('instagram', array(
      'label' => __('Enlace a página de Instagram', 'dohko'),
      'section' =>'dohko_social',
      'settings' => 'dohko_social_settings[instagram]'
    ));
    //YOUTUBE
    $wp_customize->add_setting('dohko_social_settings[youtube]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('youtube', array(
      'label' => __('Enlace a página de Youtube', 'dohko'),
      'section' =>'dohko_social',
      'settings' => 'dohko_social_settings[youtube]'
    ));
    //LINKEDIN
    $wp_customize->add_setting('dohko_social_settings[linkedin]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('linkedin', array(
      'label' => __('Enlace a página de Linkedin', 'dohko'),
      'section' =>'dohko_social',
      'settings' => 'dohko_social_settings[linkedin]'
    ));
    //TWITTER
    $wp_customize->add_setting('dohko_social_settings[twitter]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('twitter', array(
      'label' => __('Enlace a página de Twitter', 'dohko'),
      'section' =>'dohko_social',
      'settings' => 'dohko_social_settings[twitter]'
    ));
    //WHATSAPP
    $wp_customize->add_setting('dohko_social_settings[whatsapp]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('whatsapp', array(
      'label' => __('Enlace a página de Whatsapp', 'dohko'),
      'section' =>'dohko_social',
      'settings' => 'dohko_social_settings[whatsapp]'
    ));
    //PINTEREST
    $wp_customize->add_setting('dohko_social_settings[pinterest]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('pinterest', array(
      'label' => __('Enlace a página de Pinterest', 'dohko'),
      'section' =>'dohko_social',
      'settings' => 'dohko_social_settings[pinterest]'
    ));
    //GOOGLE PLUS
    $wp_customize->add_setting('dohko_social_settings[googleplus]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('googleplus', array(
      'label' => __('Enlace a página de Google Plus', 'dohko'),
      'section' =>'dohko_social',
      'settings' => 'dohko_social_settings[googleplus]'
    ));
    //DISCORD
    $wp_customize->add_setting('dohko_social_settings[discord]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('discord', array(
      'label' => __('Enlace a página de Discord', 'dohko'),
      'section' =>'dohko_social',
      'settings' => 'dohko_social_settings[discord]'
    ));
    //TWITCH
    $wp_customize->add_setting('dohko_social_settings[twitch]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('twitch', array(
      'label' => __('Enlace a página de Twitch', 'dohko'),
      'section' =>'dohko_social',
      'settings' => 'dohko_social_settings[twitch]'
    ));
    /*******************************************
    SECTION GROWTH
    ********************************************/
    $wp_customize->add_section('dohko_growth', array(
      'title' => __('Codigo de Growth', 'dohko'),
      'description' => __('Codigo que se va a insertar para las herramientas de growth', 'dohko'),
      'priority' => 20,
      'panel' => 'dohko_theme_panel'
    ));
    //ANALYTICS
    $wp_customize->add_setting('dohko_growth_settings[analytics]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('analytics', array(
      'label'     => __('Codigo para Google Analytics', 'dohko'),
      'section'   => 'dohko_growth',
      'settings'  => 'dohko_growth_settings[analytics]',
      'type'      => 'textarea'
    ));
    //PIXEL
    $wp_customize->add_setting('dohko_growth_settings[pixel]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('pixel', array(
      'label'     => __('Codigo para Pixel', 'dohko'),
      'section'   => 'dohko_growth',
      'settings'  => 'dohko_growth_settings[pixel]',
      'type'      => 'textarea'
    ));
    //MAILCHIMP
    $wp_customize->add_setting('dohko_growth_settings[mailchimp]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('mailchimp', array(
      'label'     => __('Codigo para Mailchimp', 'dohko'),
      'section'   => 'dohko_growth',
      'settings'  => 'dohko_growth_settings[mailchimp]',
      'type'      => 'textarea'
    ));
    /*******************************************
    INFORMACION DEL NEGOCIO
    ********************************************/
    $wp_customize->add_section('dohko_business', array(
      'title' => __('Informacion del negocio', 'dohko'),
      'description' => __('Informacion del negocio que se mostrara en la pagina', 'dohko'),
      'priority' => 20,
      'panel' => 'dohko_theme_panel'
    ));
    //DIRECCION LINEA 1
    $wp_customize->add_setting('dohko_business_settings[address_l1]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('address_l1', array(
      'label'     => __('Direccion del negocio linea 1', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[address_l1]',
      'type'      => 'text'
    ));
    //DIRECCION LINEA 2
    $wp_customize->add_setting('dohko_business_settings[address_l2]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('address_l2', array(
      'label'     => __('Direccion del negocio linea 2', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[address_l2]',
      'type'      => 'text'
    ));
    //TELEPHONE
    $wp_customize->add_setting('dohko_business_settings[telephone]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('telephone', array(
      'label'     => __('Telefono Fijo', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[telephone]',
      'type'      => 'text'
    ));
    //MOBILE
    $wp_customize->add_setting('dohko_business_settings[mobile]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('mobile', array(
      'label'     => __('Telefono Celular', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[mobile]',
      'type'      => 'text'
    ));
    //EMAIL
    $wp_customize->add_setting('dohko_business_settings[email]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('email', array(
      'label'     => __('Correo electronico del negocio', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[email]',
      'type'      => 'text'
    ));
    //WORK DAYS 1
    $wp_customize->add_setting('dohko_business_settings[work_days_1]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('work_days_1', array(
      'label'     => __('Dias de trabajo 1', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[work_days_1]',
      'type'      => 'text'
    ));
    //WORK HOURS 1
    $wp_customize->add_setting('dohko_business_settings[work_hours_1]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('work_hours_1', array(
      'label'     => __('Horario de trabajo de los dias 1', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[work_hours_1]',
      'type'      => 'text'
    ));
    //WORK DAYS 2
    $wp_customize->add_setting('dohko_business_settings[work_days_2]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('work_days_2', array(
      'label'     => __('Dias de trabajo 2', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[work_days_2]',
      'type'      => 'text'
    ));
    //WORK HOURS 2
    $wp_customize->add_setting('dohko_business_settings[work_hours_2]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('work_hours_2', array(
      'label'     => __('Horario de trabajo de los dias 2', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[work_hours_2]',
      'type'      => 'text'
    ));
    //WORK DAYS 3
    $wp_customize->add_setting('dohko_business_settings[work_days_3]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('work_days_3', array(
      'label'     => __('Dias de trabajo 3', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[work_days_3]',
      'type'      => 'text'
    ));
    //WORK HOURS 3
    $wp_customize->add_setting('dohko_business_settings[work_hours_3]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('work_hours_3', array(
      'label'     => __('Horario de trabajo de los dias 3', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[work_hours_3]',
      'type'      => 'text'
    ));
    //GOOGLE MAPS
    $wp_customize->add_setting('dohko_business_settings[gmaps]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('gmaps', array(
      'label'     => __('Link de Google Maps', 'dohko'),
      'section'   => 'dohko_business',
      'settings'  => 'dohko_business_settings[gmaps]',
      'type'      => 'text'
    ));
    /*******************************************
    INFORMACION DE LA MARCA
    ********************************************/
    $wp_customize->add_section('dohko_brand', array(
      'title' => __('Informacion de la marca', 'dohko'),
      'description' => __('Informacion de la marca', 'dohko'),
      'priority' => 20,
      'panel' => 'dohko_theme_panel'
    ));
    //LOGOTIPO HEADER
    $wp_customize->add_setting('dohko_brand_settings[logo_header]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_header', array(
      'label'     => __('Logo del Header', 'dohko'),
      'section'   => 'dohko_brand',
      'settings'  => 'dohko_brand_settings[logo_header]',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' )
      )
    )));
    //LOGOTIPO FOOTER
    $wp_customize->add_setting('dohko_brand_settings[logo_footer]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_footer', array(
      'label'     => __('Logo del Footer', 'dohko'),
      'section'   => 'dohko_brand',
      'settings'  => 'dohko_brand_settings[logo_footer]',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' )
      )
    )));
    //PROPOSITO
    $wp_customize->add_setting('dohko_brand_settings[purpose]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('purpose', array(
      'label'     => __('Proposito', 'dohko'),
      'section'   => 'dohko_brand',
      'settings'  => 'dohko_brand_settings[purpose]',
      'type'      => 'textarea'
    ));
    //MISION
    $wp_customize->add_setting('dohko_brand_settings[mission]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('mission', array(
      'label'     => __('Mision', 'dohko'),
      'section'   => 'dohko_brand',
      'settings'  => 'dohko_brand_settings[mission]',
      'type'      => 'textarea'
    ));
    //VISION
    $wp_customize->add_setting('dohko_brand_settings[vision]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('vision', array(
      'label'     => __('Vision', 'dohko'),
      'section'   => 'dohko_brand',
      'settings'  => 'dohko_brand_settings[vision]',
      'type'      => 'textarea'
    ));
    /*******************************************
    INFORMACION ADICIONAL DE LA PAGINA
    ********************************************/
    $wp_customize->add_section('dohko_about', array(
      'title' => __(' Nosotros', 'dohko'),
      'description' => __('Informacion de la seccion nosotros', 'dohko'),
      'priority' => 20,
      'panel' => 'dohko_theme_panel'
    ));
    //PRIMER PARRAFO
    $wp_customize->add_setting('dohko_about_settings[about_p1]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('about_p1', array(
      'label'     => __('Primer parrafo', 'dohko'),
      'section'   => 'dohko_about',
      'settings'  => 'dohko_about_settings[about_p1]',
      'type'      => 'textarea'
    ));
    //PRIMERA IMAGEN
    $wp_customize->add_setting('dohko_about_settings[about_img_1]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_img_1', array(
      'label'     => __('Primera imagen', 'dohko'),
      'section'   => 'dohko_about',
      'settings'  => 'dohko_about_settings[about_img_1]',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' )
      )
    )));
    //SEGUNDO PARRAFO
    $wp_customize->add_setting('dohko_about_settings[about_p2]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('about_p2', array(
      'label'     => __('Segundo parrafo', 'dohko'),
      'section'   => 'dohko_about',
      'settings'  => 'dohko_about_settings[about_p2]',
      'type'      => 'textarea'
    ));
    //SEGUNDA IMAGEN
    $wp_customize->add_setting('dohko_about_settings[about_img_2]', array(
      'default' => '',
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_img_2', array(
      'label'     => __('Segunda imagen', 'dohko'),
      'section'   => 'dohko_about',
      'settings'  => 'dohko_about_settings[about_img_2]',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' )
      )
    )));
    /*******************************************
    COLOR SCHEME
    ********************************************/
    $wp_customize->add_section('dohko_theme_colors', array(
      'title' => __('Color Scheme', 'dohko'),
      'description' => __('Esquema de colores del tema', 'dohko'),
      'priority' => 20,
      'panel' => 'dohko_theme_panel'
    ));
    //MAIN COLOR
    $wp_customize->add_setting('main_color', array(
      'default'   =>  '#0B354B',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
      'label'   =>  'Main Color',
      'description' => 'Main Color',
      'section' =>  'dohko_theme_colors',
      'settings'  =>  'main_color'
    )));
    //SECOND COLOR
    $wp_customize->add_setting('second_color', array(
      'default'   =>  '#00CBD9',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'second_color', array(
      'label'   =>  'Second Color',
      'description' => 'Secondary Color',
      'section' =>  'dohko_theme_colors',
      'settings'  =>  'second_color'
    )));
    //COLOR AUXILIAR 1
    $wp_customize->add_setting('aux_1', array(
      'default'   =>  '#89C5C7',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aux_1', array(
      'label' => 'Auxiliar Color 1',
      'description' => 'Auxiliar Color 1',
      'section' =>  'dohko_theme_colors',
      'settings' => 'aux_1'
    )));
    //COLOR AUXILIAR 2
    $wp_customize->add_setting('aux_2', array(
      'default'   =>  '#E64448',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aux_2', array(
      'label' => 'Auxiliar Color 2',
      'description' => 'Auxiliar Color 2',
      'section' =>  'dohko_theme_colors',
      'settings' => 'aux_2'
    )));
    //COLOR AUXILIAR 3
    $wp_customize->add_setting('aux_3', array(
      'default'   =>  '#EAB244',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aux_3', array(
      'label' => 'Auxiliar Color 3',
      'description' => 'Auxiliar Color 3',
      'section' =>  'dohko_theme_colors',
      'settings' => 'aux_3'
    )));
    //Grey 600
    $wp_customize->add_setting('grey600', array(
      'default'   =>  '#121212',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'grey600', array(
      'label' => 'Grey 600',
      'description' => 'Grey 600',
      'section' =>  'dohko_theme_colors',
      'settings' => 'grey600'
    )));
    //Grey 500
    $wp_customize->add_setting('grey500', array(
      'default'   =>  '#666666',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'grey500', array(
      'label' => 'Grey 600',
      'description' => 'Grey 500',
      'section' =>  'dohko_theme_colors',
      'settings' => 'grey500'
    )));
    //Grey 400
    $wp_customize->add_setting('grey400', array(
      'default'   =>  '#BDBDBD',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'grey400', array(
      'label' => 'Grey 400',
      'description' => 'Grey 400',
      'section' =>  'dohko_theme_colors',
      'settings' => 'grey400'
    )));
    //Grey 300
    $wp_customize->add_setting('grey300', array(
      'default'   =>  '#D3D3D3',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'grey300', array(
      'label' => 'Grey 300',
      'description' => 'Grey 600',
      'section' =>  'dohko_theme_colors',
      'settings' => 'grey300'
    )));
    //Grey 200
    $wp_customize->add_setting('grey200', array(
      'default'   =>  '#E9E9E9',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'grey200', array(
      'label' => 'Grey 200',
      'description' => 'Grey 200',
      'section' =>  'dohko_theme_colors',
      'settings' => 'grey200'
    )));
    //Grey 100
    $wp_customize->add_setting('grey100', array(
      'default'   =>  '#F4F4F4',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'grey100', array(
      'label' => 'Grey 100',
      'description' => 'Grey 100',
      'section' =>  'dohko_theme_colors',
      'settings' => 'grey100'
    )));
    //White
    $wp_customize->add_setting('white', array(
      'default'   =>  '#FFFFFF',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'white', array(
      'label' => 'White',
      'description' => 'White',
      'section' =>  'dohko_theme_colors',
      'settings' => 'white'
    )));
    /*******************************************
    ELEMENTS COLOR
    ********************************************/
    $wp_customize->add_section('dohko_elements_colors', array(
      'title' => __('Colores de Secciones', 'dohko'),
      'description' => __('Esquema de colores del tema por seccion', 'dohko'),
      'priority' => 20,
      'panel' => 'dohko_theme_panel'
    ));
    //BACKGROUND HEADER
    $wp_customize->add_setting('bg_header' , array(
      'default' => '#1E3440',
      'type' => 'option',
      'transport' => 'postMessage',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bg_header', array(
      'label'   =>  'Header Background Color',
      'description' => 'Background color for Header',
      'section' =>  'dohko_elements_colors',
      'settings'  =>  'bg_header'
    )));
    //TEXT HEADER
    $wp_customize->add_setting('text_header' , array(
      'default' => '#FFFFFF',
      'type' => 'option',
      'transport' => 'postMessage',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'text_header', array(
      'label' => 'Header Text Color',
      'description' => 'Text color for Header',
      'section' =>  'dohko_elements_colors',
      'settings' => 'text_header'
    )));
    //TEXT HEADER HOVER
    $wp_customize->add_setting('header_text_hover', array(
      'default'   =>  '#CFCFCF',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text_hover', array(
      'label'   =>  'Main Text Hover Color',
      'description' => 'Text hover color for header',
      'section' =>  'dohko_elements_colors',
      'settings'  =>  'header_text_hover'
    )));
    //FOOTER BACKGROUND
    $wp_customize->add_setting('bg_footer', array(
      'default'   =>  '#1E3440',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_footer', array(
      'label'   =>  'Footer Background Color',
      'description' => 'Footer Background color for footer',
      'section' =>  'dohko_elements_colors',
      'settings'  =>  'bg_footer'
    )));
    //FOOTER TEXT
    $wp_customize->add_setting('footer_text', array(
      'default'   =>  '#FFFFFF',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
      'label'   =>  'Footer Text Color',
      'description' => 'Footer Text color for footer',
      'section' =>  'dohko_elements_colors',
      'settings'  =>  'footer_text'
    )));
    //FOOTER TEXT HOVER
    $wp_customize->add_setting('footer_text_hover', array(
      'default'   =>  '#CFCFCF',
      'type'      =>  'option',
      'transport'   =>  'postMessage',
      'capability'  =>  'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_hover', array(
      'label'   =>  'Footer Text Hover Color',
      'description' => 'Footer Text hover color for footer',
      'section' =>  'dohko_elements_colors',
      'settings'  =>  'footer_text_hover'
    )));
    /*******************************************
    FRONT PAGE SECTIONS
    ********************************************/
    $wp_customize->add_section('dohko_frontpage_settings', array(
      'title' => __('Opciones de la pagina principal', 'dohko'),
      'description' => __('Opciones de la pagina principal', 'dohko'),
      'priority' => 20,
      'panel' => 'dohko_theme_panel'
    ));
    //SLIDES
    $wp_customize->add_setting('dohko_frontpage_settings[slides]' , array(
      'default' => 1,
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('show_slides', array(
      'label'   =>  'Mostrar seccion del slides',
      'section' =>  'dohko_frontpage_settings',
      'settings'  =>  'dohko_frontpage_settings[slides]',
      'type'      => 'checkbox'
    ));
    //OFERTAS
    $wp_customize->add_setting('dohko_frontpage_settings[offers]' , array(
      'default' => 1,
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('show_offers', array(
      'label'   =>  'Mostrar seccion de ofertas',
      'section' =>  'dohko_frontpage_settings',
      'settings'  =>  'dohko_frontpage_settings[offers]',
      'type'      => 'checkbox'
    ));
    //ABOUT
    $wp_customize->add_setting('dohko_frontpage_settings[about]' , array(
      'default' => 1,
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('show_about', array(
      'label'   =>  'Mostrar seccion de Nosotros',
      'section' =>  'dohko_frontpage_settings',
      'settings'  =>  'dohko_frontpage_settings[about]',
      'type'      => 'checkbox'
    ));
    //SERVICES
    $wp_customize->add_setting('dohko_frontpage_settings[services]' , array(
      'default' => 1,
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('show_services', array(
      'label'     => 'Mostrar seccion de servicios',
      'section'   => 'dohko_frontpage_settings',
      'settings'  => 'dohko_frontpage_settings[services]',
      'type'      => 'checkbox'
    ));
    //CLIENTS
    $wp_customize->add_setting('dohko_frontpage_settings[clients]' , array(
      'default' => 1,
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('show_clients', array(
      'label'   =>  'Mostrar seccion de clientes',
      'section' =>  'dohko_frontpage_settings',
      'settings'  =>  'dohko_frontpage_settings[clients]',
      'type'      => 'checkbox'
    ));
    //SUPPLIERS
    $wp_customize->add_setting('dohko_frontpage_settings[suppliers]' , array(
      'default' => 1,
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('show_suppliers', array(
      'label'   =>  'Mostrar seccion de proveedores',
      'section' =>  'dohko_frontpage_settings',
      'settings'  =>  'dohko_frontpage_settings[suppliers]',
      'type'      => 'checkbox'
    ));
    //BLOG
    $wp_customize->add_setting('dohko_frontpage_settings[blog]' , array(
      'default' => 1,
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control('show_blog', array(
      'label'   =>  'Mostrar seccion del blog',
      'section' =>  'dohko_frontpage_settings',
      'settings'  =>  'dohko_frontpage_settings[blog]',
      'type'      => 'checkbox'
    ));

  }
  add_action( 'customize_register', 'dohko_social_customize_register' );
?>