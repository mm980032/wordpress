<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'AnT,ME#JT1NzLH12uV>^y_Wv]w%(ycR&mk]B/<&;Tmsj nK5sL>N044ul!ikqER?' );
define( 'SECURE_AUTH_KEY',  '=7)oF5M54`_GoQ?_Z:UB~U`=6R,Kd8K)NbBP>>BN u_Fs)5FSQ_ya/]@/<k9N%J:' );
define( 'LOGGED_IN_KEY',    'EH!l}6DK2BMpg0O2UDB2x{vE0MWt8mbb5oGUvuk_Rh)hZn9c9cy:X>{>{<wxEsiA' );
define( 'NONCE_KEY',        'o@!!CQ,CC1)w*Ak?i)Zdx=;(uaV*5}ctv.^g#*e~IQK)[Q|tA2ty_5jBI)/@q>xk' );
define( 'AUTH_SALT',        'TTDYGeo56fQCEQ}yF3,&NqxBRSlGNxPdFE7!OSVe8}gY-@@:u$^89;<a12|0Nnm5' );
define( 'SECURE_AUTH_SALT', '{_M6%Njvlq}c5 .}]JW`o) IY,JM3vT{9o>E~X/n2)E=^_=p_ES:J(V,j#lmM5oC' );
define( 'LOGGED_IN_SALT',   'Q6b:tqJ>6n)?<NN90v3sYW;~Q`JsM.t5C}b.~(J?T/TQm1d}+c#z6I&UCazXn&,5' );
define( 'NONCE_SALT',       ']X^{h66r`gZY1x1`2[(w+2s:mZTh!J6bw 7vk[5%UL)Rj[cL*MQ}U*fq5^.=dP[k' );

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
