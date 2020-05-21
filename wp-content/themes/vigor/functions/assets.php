<?php

  add_action('wp_enqueue_scripts', 'cf_enqueue_styles');
  add_action('wp_enqueue_scripts', 'cf_enqueue_scripts');

  function cf_enqueue_styles ()
  {
    wp_register_style('fonts-google', '//fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,700;1,400;1,700,500:0,500:1&display=swap');
    wp_register_style('vigor', get_template_directory_uri() . '/style.css', ['fonts-google'], filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('vigor');
  }

  function cf_enqueue_scripts ()
  {
    wp_register_script('vigor', get_template_directory_uri() . '/dist/site.js', ['jquery'], filemtime(get_template_directory() . '/dist/site.js'), true);
    wp_enqueue_script('vigor');
  }
