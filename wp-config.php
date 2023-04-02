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
define( 'DB_NAME', 'gbua_f_h_hotel' );

/** Database username */
define( 'DB_USER', 'gbua_f_h_hotel' );

/** Database password */
define( 'DB_PASSWORD', 'eze5c784ky' );

/** Database hostname */
define( 'DB_HOST', 'mysql315.1gb.ua' );

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
define( 'AUTH_KEY',         '<B;a{B<?us7LyAIhy7WVY(io6McnJHf#->#T*43rx*ntuaG~*@llzO(c1!6A<bVF' );
define( 'SECURE_AUTH_KEY',  '`]wW_L!~DYNx90u B0En$cS5NgX9}jtH]#vJ sagY^P-YxS;i+ci9B v[7Sxy~39' );
define( 'LOGGED_IN_KEY',    '<:95,u-KZfJ]>[N@.fJErdvl`.|mC<)N`~u[jqJ:]:H*noGDOdpZb%f?(Sp<vF!j' );
define( 'NONCE_KEY',        '$I,nHSR+M{*y7p<(Pjj*&)?>sc{6v0.{VSN]HB>qLD > y1XVqID2j<7D<8jJ:Hg' );
define( 'AUTH_SALT',        'yH&_87G:K/#,[ibRkh]|4 lclRh8zz=$7hr^h[-%L;!.`{w:s$}{S(F.:DM: 4z0' );
define( 'SECURE_AUTH_SALT', 'h*mdTII*_X,?wh_NiW2rP.<pq]F,Mj}nn@NeV%M$-2:IEOU-aN/O{0-/I3dG@zlc' );
define( 'LOGGED_IN_SALT',   'JnD,/[Bg/j<5kzCjfMvNig7NDs2Zv#] p3iKY(U7Pcn+E}>9>k8J>lnRD3d}YSBC' );
define( 'NONCE_SALT',       'xzHqveq@Tx?=ho>oQ{ru5hz<R=gkcp0m)XSYG.uH_:X;*G>STcQ=WOhYO;=J29$#' );

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
