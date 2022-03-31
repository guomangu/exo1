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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Jy^)u%arw6MC]E?qA3(`LMCeS[CQ!s2Zvq;r~dW^,`IlHYL`5.G:08bp)_d0lI5P' );
define( 'SECURE_AUTH_KEY',  'ay1Hdg1[)>E_l]S9exdR1nPo#TunmxYm)do3oIa}N-20OxR&bah5zmJQU*}#,4Ne' );
define( 'LOGGED_IN_KEY',    'gjtZRbucl4O{=V*Fr$RXbw6ykdK>KxshN*@OB$ R8TxdAxd`If8fr,A;,U>Z}v8d' );
define( 'NONCE_KEY',        'ef6.a*8 >d3u&WR`9v%)$glgHsb]4dw6@o; aO#Xo+,uvW~wDT$FMJ QS7j1W|b4' );
define( 'AUTH_SALT',        '!1@D WK%b?oPcV)xJDmqxO~G/Rws}L0!W7h!d!xW TC?87ZgN_cp}UFAk0diHgA0' );
define( 'SECURE_AUTH_SALT', 'V/HC}I f#Qw*0X(zuc:zdux#O0cKhyY}zB#GC2D!gy*HiBXxR#Wdi7G/N=|6vy$E' );
define( 'LOGGED_IN_SALT',   'Hej,~<.P@T_~?}VnvZjM}q/,fcAT.KE4F&<?b@Q=+]`L=H=|ngCc`=;Ff%zj{AP/' );
define( 'NONCE_SALT',       'JW%gNuHiH&-)o<gEE|SWA=,{TeoBE|_C[d*:r-1>mD^V#dupVS(>zF|o2qh(Wa]4' );

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
