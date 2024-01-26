<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Kaho Portfolio</title>
    <meta name="description" content="Kahoのポートフォリオサイト" />
    <link rel="stylesheet" href="./css/ress.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="icon" href="images/favicon.ico" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body class="js-home">
  <?php wp_body_open(); ?>
    <div class="wrap">
    <header id="header" class="l-header wrapper">
      <h1><a class="c-site-title" href="index.html">Kaho Portfolio</a></h1>
      <button id="hamburger" class="c-hamburger">
        <span class="c-hamburger__bar"></span>
        <span class="c-hamburger__bar"></span>
        <span class="c-hamburger__bar"></span>
      </button>
      <nav id="global-nav" class="p-global-nav">
        <ul class="p-global-nav__ul">
          <li><a href="#works" class="p-global-nav__menu">WORKS</a></li>
          <li><a href="#skills" class="p-global-nav__menu">SKILLS</a></li>
          <li><a href="#about" class="p-global-nav__menu">ABOUT</a></li>
          <li><a href="home.html" class="p-global-nav__menu">BLOG</a></li>
          <li><a href="#contact" class="p-global-nav__menu">CONTACT</a></li>
        </ul>
    </header>
