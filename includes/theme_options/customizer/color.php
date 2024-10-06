<?php
  function dohko_customize_colors() {
    //SECTION SCHEME
    $bg_header = get_option( 'bg_header' );
    if ( empty($bg_header)) { $bg_header = "#0B354B";}
    $header_text = get_option( 'text_header' );
    if ( empty($header_text)) { $header_text = "#FFFFFF";}
    $header_text_hover = get_option( 'header_text_hover' );
    if ( empty($header_text_hover)) { $header_text_hover = "#00CBD9";}
    $bg_footer = get_option( 'bg_footer' );
    if ( empty($bg_footer)) { $bg_footer = "#0B354B";}
    $footer_text = get_option( 'footer_text' );
    if ( empty($footer_text)) { $footer_text = "#FFFFFF";}
    $footer_text_hover = get_option( 'footer_text_hover' );
    if ( empty($footer_text_hover)) { $footer_text_hover = "#00CBD9";}
    //COLOR SCHEME
    $main_color = get_option( 'main_color' );
    if ( empty($main_color)) { $main_color = "#0B354B";}
    $second_color = get_option( 'second_color' );
    if ( empty($second_color)) { $second_color = "#00CBD9";}
    $aux_1 = get_option( 'aux_1' );
    if ( empty($aux_1)) { $aux_1 = "#89C5C7";}
    $aux_2 = get_option( 'aux_2' );
    if ( empty($aux_2)) { $aux_2 = "#E64448";}
    $aux_3 = get_option( 'aux_3' );
    if ( empty($aux_3)) { $aux_3 = "#EAB244";}
    $grey600 = get_option( 'grey600' );
    if ( empty($grey600)) { $grey600 = "#121212";}
    $grey500 = get_option( 'grey500' );
    if ( empty($grey500)) { $grey500 = "#666666";}
    $grey400 = get_option( 'grey400' );
    if ( empty($grey400)) { $grey400 = "#BDBDBD";}
    $grey300 = get_option( 'grey300' );
    if ( empty($grey300)) { $grey300 = "#D3D3D3";}
    $grey200 = get_option( 'grey200' );
    if ( empty($grey200)) { $grey200 = "#E9E9E9";}
    $grey100 = get_option( 'grey100' );
    if ( empty($grey100)) { $grey100 = "#F4F4F4";}
    $white = get_option( 'white' );
    if ( empty($white)) { $white = "#FFFFFF";}
  ?>
    <style>
    /* color scheme */
      /* BASICS */
      body{
        background-color: <?php echo $main_color; ?>;
      }
      h1, h1 a, h1 a:visited,
      h2, h2 a, h2 a:visited,
      h3, h3 a, h3 a:visited,
      h4, h4 a, h4 a:visited,
      h5, h5 a, h5 a:visited,
      h6, h6 a, h6 a:visited
      p a, p a:visited,
      a, a:visited{
        color: <?php echo $main_color; ?>;
      }
      h1 a:hover, h1 a:focus,
      h2 a:hover, h2 a:focus,
      h3 a:hover, h3 a:focus,
      h4 a:hover, h4 a:focus,
      h5 a:hover, h5 a:focus,
      h6 a:hover, h6 a:focus,
      p a:hover, p a:focus,
      a:hover, a:focus{ 
        color: <?php echo $second_color; ?>; 
      }
      p{
        color:<?php echo $grey600; ?>; 
      }
      /* LAYOUT */
      section{
        background-color:<?php echo $white; ?>; 
      }
      hr{
        color: <?php echo $grey500; ?>; 
      }

      /* HEADER */
      header{
        background-color: <?php echo $bg_header; ?>; 
      }
      #header-menu{ 
        background-color: <?php echo $white; ?>;
      }
      #search_text{
        color: <?php echo $grey500; ?>; 
        border-color: <?php echo $second_color; ?>;
      }
      #search_submit{
        background-color: <?php echo $second_color; ?>;
        border-color: <?php echo $second_color; ?>;
        color: <?php echo $white; ?>; 
      }
      a .header_icon,
      a .header_icon:visited{
        color: <?php echo $header_text; ?>; 
      }
      a .header_icon:focus,
      a .header_icon:hover{
        color: <?php echo $header_text_hover; ?>;  
      }

      /* FOOTER */
      footer{
        background-color: <?php echo $bg_footer; ?>;
        color: <?php echo $footer_text; ?>; 
      }
      footer a,
      footer a:visited,
      footer p,
      footer h1,
      footer h2,
      footer h3,
      footer h4{
        color: <?php echo $footer_text; ?>; 
      }
      footer a:hover, footer a:focus{
        color: <?php echo $footer_text_hover; ?>; 
      }
      a .footer_icon,
      a .footer_icon:visited{
        color: <?php echo $footer_text; ?>; 
      }
      a .footer_icon:hover,
      a .footer_icon:focus{
        color: <?php echo $footer_text_hover; ?>; 
      }
      .product{
        border-color: <?php echo $grey200 ?>;
      }
      .old{
        color: <?php echo $grey400 ?>; 
      }
      .dscto{
        color: <?php echo $aux2 ?>;
      }
      .back_btn{
        background-color: <?php echo $main_color; ?>;
      }
      a:hover .back_btn, a:focus .back_btn{
        color: <?php echo $second_color; ?>;
      }
      .slide-text{
        color: <?php echo $main_color; ?>;
      }
      .slide-btn{
        background-color: <?php echo $main_color; ?>;
      }
      .slide-btn-text{
        color: <?php echo $white; ?>;
      }
      /* CSS para el megamenu mobile */
      @media only screen and (max-width: 599px){
        .wp-megamenu-sub-menu{
          background-color: <?php echo $main_color; ?> !important;
        }
        .wp-megamenu-sub-menu li{
          color: <?php echo $white; ?> !important;
        }
      }
    </style>  
    <?php
  }
  add_action( 'wp_head', 'dohko_customize_colors' );
?>