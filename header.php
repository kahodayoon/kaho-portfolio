<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Kahoのポートフォリオサイト" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class( "js-home" ); ?>>
  <?php wp_body_open(); ?>
    <div class="wrap">
    <header id="header" class="l-header wrapper">
      <h1><a class="c-site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <button id="hamburger" class="c-hamburger">
        <span class="c-hamburger__bar"></span>
        <span class="c-hamburger__bar"></span>
        <span class="c-hamburger__bar"></span>
      </button>
      <nav id="global-nav" class="p-global-nav">
        <!-- <ul class="p-global-nav__ul">
          <li><a href="#works" class="p-global-nav__menu">WORKS</a></li>
          <li><a href="#skills" class="p-global-nav__menu">SKILLS</a></li>
          <li><a href="#about" class="p-global-nav__menu">ABOUT</a></li>
          <li><a href="home.html" class="p-global-nav__menu">BLOG</a></li>
          <li><a href="#contact" class="p-global-nav__menu">CONTACT</a></li>
        </ul>
      </nav> -->
      <?php wp_nav_menu(); ?>
    </header>
