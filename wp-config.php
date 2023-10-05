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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'freshdev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '#&Z`j8#_iUCnWJiXq.S?o8@r.6{2/c0J2Nh5CL>LBMuIR.~u/G#}vuYl]#h2N5uO' );
define( 'SECURE_AUTH_KEY',  'WwqQawq%g@:sx/?[5pA2&fqd_Q3=UCp:I24^}s6I+Km[6n/ZZ$,wp8#+@K{K,&3.' );
define( 'LOGGED_IN_KEY',    'HmDbn!GuJ$%)senLQ0tMWCY/O=+ y;9`)Ceu_;&R:zbY8+OL.^/&hi$ZKYi<Bn.$' );
define( 'NONCE_KEY',        'y!Hw;,N_,8_r`x36$I$,FiOIIPBln(C7+TB6hA7.?%UdC(>VV!=1ZV;rS1a ~+3g' );
define( 'AUTH_SALT',        'wAfN~y%4XF.$V4 /9@fyw|3J7qUy[3g=O*Qy4a*e/*6=M0Hs[B;gwIVU_>e[JUd;' );
define( 'SECURE_AUTH_SALT', '{MJxUb.u@O$s8n4|=bA<7y;#Ta)Z{_=&wig[^u*#=I%kYDngS!w+tEroGs>A6,OO' );
define( 'LOGGED_IN_SALT',   '`q[jV_j@ZeAR:c ICy*y36]I86|x/U U@yHS.0}vx:-p-gS)(![?lYb!C]=SWD+s' );
define( 'NONCE_SALT',       'x5n29.moQ0_zuo|EwC 98Bx`iGubQCE9&1S]`gg|4vQ?bqMHw#s#_l+O.oq d/u{' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
