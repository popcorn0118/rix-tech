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
define( 'DB_NAME', 'rix_tech_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'Mo=[7_Dwb%`Eu(N%*o]^]PKk`;Kken{][L|[4nhBma.`wud%1Jjy0;2zyI%=2)7p' );
define( 'SECURE_AUTH_KEY',  '%diez5Q+O.C6jw0HNYtEeIU8Zs Vi-m?)/RRkFbNx<zWz+;EsDK1J??NT]&Q4Uqi' );
define( 'LOGGED_IN_KEY',    'W=KF/!n7X[6%iWPFCAU3*;u6;n/g*V<nX8`<2Ty)S/{r-!Qr!_SUT&[fkZ/t]81t' );
define( 'NONCE_KEY',        'J,Qs%c$4[cl:.?^NtuISvjp~Nv];#Ut/!kz:x)8:vL=vH8gl94BhB]iin_!hIHCb' );
define( 'AUTH_SALT',        '%MT/WYLc%Ii@ACw67H:g%mjJYW^9]lsgn)V39rJLuKX4y.OS-(J)r=i[6:7((4:_' );
define( 'SECURE_AUTH_SALT', 'NT8i)y<mXMAAk%1d9FylL6O0iyyxkoFCky=U{f~mWxA>(%1vTjrUI}$Xve`QF.7!' );
define( 'LOGGED_IN_SALT',   ';k5|cjDA`f,th*C:)SyKP;(kPX~u<~7nTYhLG3tuZ*w2~!vZ-sf+.ID_G5duOO>t' );
define( 'NONCE_SALT',       '6E?k`17Lc3}DY*ymI>(Ech]?MSF=v*p_u!g;;E.EydODqe$^&3xhVuxg`?d2aTHS' );

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
