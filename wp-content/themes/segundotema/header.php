<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="author" content="" />
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <?php wp_head(); ?>
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
      <?php if(has_custom_logo()) {
        the_custom_logo();
      } ?>
      <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>

      <?php
      if (has_nav_menu('primary')) {
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'fallback_cb' => false,
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'navbarResponsive',
          'menu_class' => 'navbar-nav ms-auto py-4 py-lg-0'
        ));
      }
      ?>

    </div>
  </nav>