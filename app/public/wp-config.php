<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'O}mt?();a_</1d[;!pq,vZ06[)!gWo7q7$fciOdf3EWjK:KJdR}%P[i_?k{#w,Gp' );
define( 'SECURE_AUTH_KEY',   '7B$rAY`SBhmVbF(qd4KE>,L?>bJqEvWO6=RS.enas;^CV#l*!V|[KH)6^/&[Qx^u' );
define( 'LOGGED_IN_KEY',     '!06_-M`9COfSWlyY8b;{qUb3VD~O{y[U p*!-5xlBDtgQ>D+M#SG+$Hj7I838P~V' );
define( 'NONCE_KEY',         'L!khpQB(2i>E!a`)MM#T`8]1N@jbLi8[{b?zY`y96c~VmE69m9]H.QdTn?S<^MJg' );
define( 'AUTH_SALT',         'lMW=e=vSd&;Uk()q;wOrFOl/uU=3d{hdvjR{[)n6o.8J `NON]$mf0$43=Jf&Ci$' );
define( 'SECURE_AUTH_SALT',  'sA}_tub[LCrfAyoC<!OV~XhVDM$lfgT_~h()<.$G+{0AI,rnZ}3.Y*W8knU&+qHq' );
define( 'LOGGED_IN_SALT',    'E5[Vu)naAFH:DQZK!`(xNGVJ^UEO6b7V=75+m`teF-}ifgn.DAbwrdr aomko[:K' );
define( 'NONCE_SALT',        '@`@%?aMJ?N[y*tQNJJ[;(Zu^2BLqrhpKc4[sk<@WX8zcyw4(zU8KfnzRs-}}$]1|' );
define( 'WP_CACHE_KEY_SALT', '4lEP+Q?Xo#u-(!Fy}8_)-W%17vZx*[to:`Ql&+oJ1Cotq,BiYo_%QE6=N22Osh 9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
