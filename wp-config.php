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
define( 'DB_NAME', 'davidoyewolo' );

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
define( 'AUTH_KEY',         'vc_cc|QGxHop+oyXD^P)e/j$ijJ0;n#cv3w~VlFe!f+2xMUAXg)X3C9LJBO1GfL}' );
define( 'SECURE_AUTH_KEY',  'JXM;VsACWaMt`e`8oKtH$U`Kg0ldyL|5,m*a`++<4]&-@wi $*hQly8f8Vz-Mgno' );
define( 'LOGGED_IN_KEY',    'D]m&LXhs+eXn^O0q)s84i)d`SKX~8p_I(T`.3c]+qiXP=)[{bEt+lw$[)[D;MGyE' );
define( 'NONCE_KEY',        ';qW-J2=+fHB-lgJ4GI?cNam!D2HsrW-4k-Biptd=B/>&I|^F34tAiK$n({cy3KnR' );
define( 'AUTH_SALT',        '#C!d7j#rq)z-z5V?(YUQ=0,/0AXbU]_[L@i}XGNW>/X;73V:1!7zi,Wod_vD#3hY' );
define( 'SECURE_AUTH_SALT', '?p <s#N#uwn|am*]uT}ULw1W9(+nH+udjD65b:A~k[z2Bb,3M0_40&oHo<Y=|1^>' );
define( 'LOGGED_IN_SALT',   '<rjAM0f6YM[ByQ[jSU|f98U8B8F*;L;b_Ov2QSE%6?_q+9pGPa>+U.(JYFWll]KC' );
define( 'NONCE_SALT',       'Qacm2xWT*Uy51mfBv}Yo6,8>P8y;@x:Gt`uGqc>bIX:l{NgU.N[5[B,1<q*6EhE/' );

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
