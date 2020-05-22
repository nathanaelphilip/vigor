<?php
  if ($GLOBALS['pagenow'] !== 'wp-login.php' && !is_user_logged_in()) {
    wp_redirect( wp_login_url() ); exit;
  }

  require_once 'vendor/autoload.php';

  require_once 'functions/assets.php';
  require_once 'functions/setup.php';

  require_once 'functions/acf.php';
  require_once 'functions/shortcodes.php';

  require_once 'functions/subscribe.php';
  require_once 'functions/cart.php';
