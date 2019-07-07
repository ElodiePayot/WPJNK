<!doctype html>
<html lang="en">
  <head>
    <title>JNK</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/app.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,500,700|Roboto+Slab|Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@0.2.1/dist/confetti.browser.min.js"></script>

    <link rel="canonical" href="" />
    <meta name="author" content="JNK" />
    <meta name="description" content="JNK" />

    <meta property="og:title" content="JNK" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="JNK " />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="JNK" />

    <meta name="twitter:card"              content="summary" />
    <meta name="twitter:site"              content="@JNK" />
    <meta name="twitter:creator"           content="@JNK">
    <meta name="twitter:title"             content="JNK" />
    <meta name="twitter:description"       content="JNK" />

    <?php wp_head(); ?>
  </head>

  <body>
    <header class="page-header">
      <div class="container">

        <?php
          $defaults = array(
          	'theme_location'  => '',
          	'menu'            => '',
          	'container'       => 'nav',
          	'container_class' => 'nav-primary',
          	'container_id'    => '',
          	'menu_class'      => 'nav',
          	'menu_id'         => 'nav',
          	'echo'            => true,
          	'fallback_cb'     => 'wp_page_menu',
          	'before'          => '',
          	'after'           => '',
          	'link_before'     => '',
          	'link_after'      => '',
          	'items_wrap'      => '<ul id="nav" class="nav">%3$s</ul>',
          	'depth'           => 0,
          	'walker'          => ''
          );


        ?>


          <?php wp_nav_menu( $defaults ); ?>
        <div class="navbar-btn" id="navbarBtn">
          <button class="navbar-brand ml-auto" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/JNK_menu.svg" alt="menu" /></button>
        </div>
    </header>
