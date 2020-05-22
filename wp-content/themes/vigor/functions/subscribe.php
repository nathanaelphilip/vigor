<?php
  use \DrewM\MailChimp\MailChimp;

  add_action( 'wp_ajax_subscribe', 'subscribe' );
  add_action( 'wp_ajax_nopriv_subscribe', 'subscribe' );

  function subscribe ()
  {
    $api_key = '72e833628969ac0c463ae2355fff3e35-us4';
    $list_id = '46281f202e';

    $mc = new MailChimp($api_key);
    $email = $_POST['email'];

    $mc->post('lists/' . $list_id . '/members', [
      'email_address' => $email,
      'status' => 'subscribed'
    ]);

    if ($mc->success()) {
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

    if (!$mc->success()) {
      wp_send_json_error(['error' => $mc->getLastError()]);
    }
  }
?>
