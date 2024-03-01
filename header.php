<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Kahoのポートフォリオサイト" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class( "js-home" ); ?>>
  <?php wp_body_open(); ?>
    <div class="wrap">
    <header id="header" class="l-header">
      <div class="l-header__text wrapper">
      <h1><a class="c-site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <button id="hamburger" class="c-hamburger">
        <span class="c-hamburger__bar"></span>
        <span class="c-hamburger__bar"></span>
        <span class="c-hamburger__bar"></span>
      </button>
      <nav id="global-nav" class="p-global-nav">
      <?php wp_nav_menu( array(
            'theme_location' => 'global',
            'depth'          => 1,
          ) ); ?>
      </div>
    </header>
