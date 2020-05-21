<?php

   add_action('wp_head', function () {
?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
   });

   add_action('after_setup_theme', function () {
     register_nav_menus([
       'main' => 'Main Menu'
     ]);
   });

   add_action( 'after_setup_theme', function () {
    add_theme_support( 'woocommerce' );
   });

   add_action('init', function () {
     register_post_type('location', [
       'labels' => ['name' => 'Locations', 'singular_name' => 'Location'],
       'public' => true
     ]);
   });
