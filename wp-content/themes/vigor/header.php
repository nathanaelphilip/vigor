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
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Programs</a>
          <a href="#">Careers</a>
          <a href="#">Contact</a>
          <a href="#">Blog</a>
          <a href="#">Store</a>
          <a href="#">CART ICON</a>
        </nav>
      </div>
    </header>
