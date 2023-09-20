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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'rkSEz%z(T>`,>&tdd03> %sg;=IUjgWRrNfmhU:^~S1;3]5C2.fqXn,3eE, R^Qq' );
define( 'SECURE_AUTH_KEY',  'hr;*gyBYD81ynI8{,YQ:e%Wd:I,mQlRqY6ko=[,E~!r8Zb,?{eW:4W4:RJ|~5kU|' );
define( 'LOGGED_IN_KEY',    'mC,Ay~H|qy1+@Zq/AM:3#~W6&OzB:i|/~TEq=|g()6IO5C*PTw7Yi~n26$RikS4@' );
define( 'NONCE_KEY',        'ckS?I=/x~{l-BxV*)RY=1m{)Xjjn=x`2Q{JQ@ft$Pfe#;8gQ-,HZOqLKl&YFdinz' );
define( 'AUTH_SALT',        'epYlUCM-J?V7t0@pnpsE20dec6#8l3LT8fR*%2pk,0D`84>lsAG,#bXFcIfcG9w{' );
define( 'SECURE_AUTH_SALT', 'o;HY8=];wKkJ}K}uW[Nnv`Y|d%8_eQ?v8+g2|wBqv8*R6oXZmhq?szpc8qW,@!h[' );
define( 'LOGGED_IN_SALT',   ' HXk61w1aHWa-M44Dw78L;W#wXCH|?ee)m=i ^6=$)a5Fpj 1{gZyP%UY#W~Eqtg' );
define( 'NONCE_SALT',       'dAnZAWPoMKz.+j4ss^4k~#LESD % bQXy1 G<(3MFk>MUp(fx/2tzH7.^q}A,u[6' );

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


define('ALLOW_UNFILTERED_UPLOADS', true);