<!doctype <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body>
<style type="text/css">
             body { background: #<?php echo get_theme_mod('background_color', '#fff'); ?>; }
         </style>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
 <a class="navbar-brand" href="<?php echo home_url() ?>" <b style="font-size: 23px">Josh</b> <label style="font-size: 15px">TEST</label></a>

  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <?php
    wp_nav_menu( array(
        'theme_location'  => 'primary',
        'depth'           => 2,
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'menu_class'      => 'nav navbar-nav ml-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker()
    ) );
    ?>
  </div>
</nav>

<div class="container">
<div class="blog-header" style="margin-top: 50px">
    <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
    <p class="lead blog-description"><?php bloginfo('description'); ?></p>
</div>
