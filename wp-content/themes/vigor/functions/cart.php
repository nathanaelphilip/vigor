<?php

  add_action( 'wp_ajax_cart', 'cart' );
  add_action( 'wp_ajax_nopriv_cart', 'cart' );

  function cart ()
  {
    $cart = WC()->cart->add_to_cart( $_POST['id'] );
    wp_send_json_success(['url' => wc_get_page_permalink( 'cart' )]);
  }
