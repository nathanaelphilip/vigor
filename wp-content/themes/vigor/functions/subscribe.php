<?php
  $api_key = '72e833628969ac0c463ae2355fff3e35-us4';
  $list_id = '46281f202e';

  add_action( 'wp_ajax_subscribe', 'subscribe' );
  add_action( 'wp_ajax_nopriv_subscribe', 'subscribe' );

  function subscribe ()
  {
    $email = $_GET['email'];
    $code = uniqid('CODE');

    $coupon = new WC_Coupon($code);
    $coupon->set_amount(20);
    $coupon->save();

    if ($coupon->is_valid()) {
      wp_send_json_success(['code' => $code]);
    }

    if (!$coupon->is_valid()) {
      wp_send_json_error(['code' => $code]);
    }
  }
?>
