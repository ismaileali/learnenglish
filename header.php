<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- =======================================================
  * Template Name: Serenity - v4.0.0
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open();?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center mt-3">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="<?php echo home_url( '/' ); ?>">Serenity</a></h1>
      </div>

      <?php
              wp_nav_menu( array(
                'theme_location'  => 'min_menu',
                'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'nav',
                'container_class' => 'navbar',
                // 'menu_class'      => 'navbar-nav ',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
    </div>
  </header><!-- End Header -->