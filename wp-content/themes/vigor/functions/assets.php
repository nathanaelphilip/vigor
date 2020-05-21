<?php

  add_action('wp_enqueue_scripts', 'cf_enqueue_styles');
  add_action('wp_enqueue_scripts', 'cf_enqueue_scripts');

  function cf_enqueue_styles ()
  {
    wp_register_style('fonts-google', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');
    wp_register_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
    wp_register_style('vigor', get_template_directory_uri() . '/style.css', ['fonts-google', 'slick'], filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('vigor');
  }

  function cf_enqueue_scripts ()
  {
    wp_register_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', ['jquery'], '1.9.0', true);
    wp_register_script('vigor', get_template_directory_uri() . '/dist/site.js', ['jquery', 'slick'], filemtime(get_template_directory() . '/dist/site.js'), true);
    wp_enqueue_script('vigor');
  }
