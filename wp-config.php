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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BureauDesBrasseursBD' );

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
define( 'AUTH_KEY',         'd]UxX]hS7tlU>&TDiGdEDE1T-e 1UjyF{;IT7*3D,1$C0 G`vs%7<c`5.{{9d`Kq' );
define( 'SECURE_AUTH_KEY',  'n;kbf$C#_Q:-`&P%1Y]f&2(x]V kW8`*u_d3~4X}o*XE@`]^6)+lDkVO6_|&sdu{' );
define( 'LOGGED_IN_KEY',    'dM8Q}Xv~YGL|2{fbo5!8mzgAVA6f&;nm~_bOHPa1X7Dbu/V0^*uU~6#~?UA/0i)4' );
define( 'NONCE_KEY',        '8(@;[(aGP4T,w?F9?|fC<mx-exI^B3=+OZqZKNP{_>KNBf); d*V(~QxS; &j@;z' );
define( 'AUTH_SALT',        '<s1dG+^sWCI+d;QeqoE^AV-}I5GQPy5Z?lka$63%v^)V^B:md#SC/Q-D|[pm(&Q-' );
define( 'SECURE_AUTH_SALT', '5NxfBoRP^.a=Q:m#/)h>2.*s71jwlp1gRgc]Dg9eX+)a@i5=D.HInJ+1Kh}S>S<4' );
define( 'LOGGED_IN_SALT',   'iX7ttej<0rnz8W0+9V7INCM)T(V# z SpytfmEd=O+8X1}B@xM8iLk|?(_Pd~-;e' );
define( 'NONCE_SALT',       ')&O-H9}7RN~Bb2#m:P0|Y{f=;3N1:rvg Gy06jJ<ydU6SRT1.@HC d8/WycK~#/x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbdb_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
