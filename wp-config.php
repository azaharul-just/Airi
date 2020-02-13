<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'azaharul' );

/** MySQL database username */
define( 'DB_USER', 'azaharul' );

/** MySQL database password */
define( 'DB_PASSWORD', 'q9K7UkYZpj1ZJNhm' );

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
define( 'AUTH_KEY',         'T#B+.Op-Xse+H0bGNm+8c?m.4dmD]{]<X?@c]o([kuU|.MOu875 /&wx,eoJ7k5x' );
define( 'SECURE_AUTH_KEY',  '6JQX#7$A8Mi.Tz)~8g_5u7;YdF{d)1zi_1~-T9)E*%=N#/+@sG+K!T;.~@R`VJ9W' );
define( 'LOGGED_IN_KEY',    'WI1e Y845[@o~%Mh(@G@It@ZX!:]Psh4h4K_,`;(6N,p~g=_wMgAE;]S^:$ZlMGr' );
define( 'NONCE_KEY',        'hU9q7i)<]*0p(xB> l{gJ=.(-Ag9!G7MrNzz(6[#aLo!C:;*J/S!{?D8+DP-&8g$' );
define( 'AUTH_SALT',        'mr},(KL^0TEoo2:?53^)<[Kev [Us?%?`<xfRi7hN1/kh0kH$k2iu.icwx1gBG`g' );
define( 'SECURE_AUTH_SALT', 'Ok|[HCktfuQpe+*>[<}_}XWFM2I%dfri~-g786f`.Ibkp2W HQ5V-gft-|lw1!m[' );
define( 'LOGGED_IN_SALT',   'gs,=8/3#@/~]*vV[*)(9Fd>L+nHpS5RAYdb-wJLIVo? j&qu,IyG9j.9&! 6XuyZ' );
define( 'NONCE_SALT',       'My[V6ig%:40<KxS<{{lP30&S>On8[m(D &6|jT2:y6`v;mm3%*/qzCL1l9OM(1z[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mh_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
