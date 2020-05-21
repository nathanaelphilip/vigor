<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vigor' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z(Z}sj+8hg;)YQ$a()W&b4f(F3eEo?V|`am{#m:^^CTCT2yYxEoq{YLQsHlKz_dm' );
define( 'SECURE_AUTH_KEY',  '2bl9y#y*ryH2H;0Uuw{]SO8%U&In-K^|}iCTEa4_sx!R;!:/@k9}01=_#_i<0&iT' );
define( 'LOGGED_IN_KEY',    ',az_4r$FY9S<7-tX^!mM`CdwP>n,oO;8U3t<?!I(p=KGg?motv&Z%2GUj[p!^HOE' );
define( 'NONCE_KEY',        '.coo[P`/-Q:K{#f3B[MX{xlO8.paPO:tbk1q.)|}Al4:Pt<0sSE|`38*wkP4BBli' );
define( 'AUTH_SALT',        '`*^*bn#pLd6@rp}Ch6xT&AgWiOa&oqsNJgAa<rr`=kuUs/7tT`jcYQw(Luc#4]Yp' );
define( 'SECURE_AUTH_SALT', '-yJymD1WP<&&`|9m0Q6*O|j>:n/heXf/YQ;`LE cI_T#jL?EP~}/A%@ ~0>IW6)#' );
define( 'LOGGED_IN_SALT',   'u )HWp7i;g1] wz:@il31. s{8fKt7+yix^ff`0EvE0OXQ2ru3Dd=tpqLk`+ lEK' );
define( 'NONCE_SALT',       '<%>;!u*XvD4QEA}tONXB?*un{}fUrj]0*.bDy>06SKnz{2dXX7.(&}#+1/br8s02' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', 1 );
define( 'WP_DEBUG_LOG', 1 );
define( 'WP_DEBUG_DISPLAY', 0 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
