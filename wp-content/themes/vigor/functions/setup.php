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
