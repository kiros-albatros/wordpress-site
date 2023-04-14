<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Tasha</title>

  <?php wp_head(); ?>

</head>

<body>
  <header class="header">
    <a class="header__logo" href="<?= home_url(); ?>">
      <!--   Наталья <br> Остачёнова -->
      <?php bloginfo('name'); ?>
    </a>
    <nav class="header__nav">
      <ul class="header__nav-list">
        <?php wp_nav_menu(array(
          'theme_location' => 'top',
          'container' => '%3$s',
          'fallback_cb' => '__return_empty_strings',
          'items_wrap' => '%3$s',
        )); ?>
      </ul>
    </nav>
    <div class="header__burger">
      <span class="header__burger-line header__burger-line--top"></span>
      <span class="header__burger-line header__burger-line--middle"></span>
      <span class="header__burger-line header__burger-line--bottom"></span>
    </div>

  </header>