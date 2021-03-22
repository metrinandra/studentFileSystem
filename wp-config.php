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
define( 'DB_NAME', 'studentuFaili' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'V<Cf/[LZrl]|tYRWyGXr{|/!wDkg_-+tN[O3niJ95i7?][DKkD~QU&+C{_1Wju1K' );
define( 'SECURE_AUTH_KEY',  'DK0>k[RXT%WLC~vL$<Yb@ ]yF7grKVdwYk|y[sJspbm8ozJSzqi}D^$|]X2{e?R)' );
define( 'LOGGED_IN_KEY',    'HG_fy)h?t%Y_`)r0Q@Z/}tPhXbG=VhD}LzU|e!RGdV8KHuar8ipac.qQ]*S?apSK' );
define( 'NONCE_KEY',        'ouA^m/C)~@Xr7-Ks#60orF+|TN:l[KZ lH[!z0xK(<+>V!?UiZnu-TT[;uTgbkv1' );
define( 'AUTH_SALT',        '$X`64u;{P#}Loj]<2xk>N_;?dyG|L}>}&(E|;#~56HS`{2Qk|egrXJcEH[=K-hI_' );
define( 'SECURE_AUTH_SALT', 'D)}qjL!Kt;55gTEeC|HP(s|`~f;m^1Vbtw)I *,P}7e}p=WA_:Rf{C-iMB ^zg C' );
define( 'LOGGED_IN_SALT',   '{tB*A3?Z@HJM:n5@?5?#MLAM7s&is|;c#zx1Gg!,P%2cZ{Vg3/1xa-{2!Wz 9lU`' );
define( 'NONCE_SALT',       'R]ANn+.`*rw97J@?Q]VyA A0z!Hf;=pw#E-g+WJ4``Lw7QyKWy~!vbS!oV-[Un-T' );

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
