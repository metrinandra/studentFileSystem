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
define( 'DB_NAME', 'studentufaili' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'KINS)JaG._|kl]W_>W^:&)*XN=2(h,JT*2WjF_,?[^^&.C4=Su/U}CW5?T?)!si5' );
define( 'SECURE_AUTH_KEY',  'YMF7ax|vW7KJGPyGJn7b6&t|Tvt}_+I5JNw4>t=H7p8X/d_90-Av1OG2Wq@>;A^K' );
define( 'LOGGED_IN_KEY',    'yZ7)yn]3(zp[YE9`p07]y:KAl*|,Eh> Ap1 ZQK:?6/(QFw3V71)Ci7V&@j,7!R>' );
define( 'NONCE_KEY',        ' k@ZPilA h&F4-2AP46/{::rB,EG{5A#+rAg!Q/ii(g@/6_;?}HR!Ct1?|a`^WrU' );
define( 'AUTH_SALT',        '@Q-z$l<E/%hQdG;QxfI]>?MunN+g/lC6TdG@kY>`g=*37]qkLI?R/V_H9s#`wOZq' );
define( 'SECURE_AUTH_SALT', '5%ZWS|[x4{?7q#kKtW5D>j[n|n%tb(k`IHvGTH2s8/;sS%$xEcQHu*fcoh[A3d3M' );
define( 'LOGGED_IN_SALT',   'jodLGVvG}gx2AW&v=.zoOy1C(+uJ{,qjX+hl+OKeZfd(X/0mN+hwT-8*MgirO83o' );
define( 'NONCE_SALT',       'h*WX&nqT<[,ZINS=068u)%}S?HZ+^:o4/!Rh=CBZB(#kLGe8:*^04gP,`O+Tfp%H' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
