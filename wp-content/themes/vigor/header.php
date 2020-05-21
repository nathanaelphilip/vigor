<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="block:header">
      <div class="block:header::boxes">
        <h1 class="block:header::logo">
          <img src="<?= get_stylesheet_directory_uri() ?>/dist/logo-white.svg" alt="Vigor CrossFit">
        </h1>
        <nav class="menu:primary">
          <a href="/">Home</a>
          <a href="/about">About</a>
          <a href="/programs">Programs</a>
          <a href="/careers">Careers</a>
          <a href="/contact">Contact</a>
          <a href="/blog">Blog</a>
          <a href="/store">Store</a>
          <a href="/cart" class="menu:primary::cart"><?= file_get_contents(get_stylesheet_directory() . '/dist/icn_basket.svg') ?></a>
        </nav>
      </div>
    </header>
