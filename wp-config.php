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
define( 'DB_NAME', 'galeri' );

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
define( 'AUTH_KEY',         '+Jk;SW.TZVJ!SYhC8wN%$O&83>9C}<O:fC~z+>B.V;BL{D{sb=t0k2Hy|]eyP86I' );
define( 'SECURE_AUTH_KEY',  'wgBt~y=vT(RXL2x@0n[8;7;G!9&k0zGU+?j%XEUP*!6C+7E%YmMwKx5Z6<pyuYWJ' );
define( 'LOGGED_IN_KEY',    '>cUbm?>nk<j`VPu^2.*+_n+:R1d@o4r0!1Lz^zJe)MX5a[j|g(~>G!/1l!Ih^;fF' );
define( 'NONCE_KEY',        'ou<Cau~_`Xuju_]|WW^6<<t~#%<!cUIU_qH$w?n/h!c/Y|DNZ]&t_<i1eV5|^}K)' );
define( 'AUTH_SALT',        'y3T|G`u`a4MYou(@]tY}Rz1<s%]n.(Zj}^2^*k; O`wfx. WLBjt(acB!O5FSNCd' );
define( 'SECURE_AUTH_SALT', ' )WQ/gKo^$E2`-4E95[{R,<9Xs}}auJt=P)-)5.g# ?^X<~wjL&AN`>EfbaNX_J8' );
define( 'LOGGED_IN_SALT',   'b:).& WqC8m>x=3Du2h9cpN79 /1DyGnNg8S`ST>qAOX:ooN9L<=yH!M/Pa[[=qO' );
define( 'NONCE_SALT',       'C~oRw&Lx!=W&aC~~I*^Q$x41QpR;]:.fU4e5{,KVTp@#/U(KL1oY$nGxKNlP1&Z-' );

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
