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
define( 'DB_NAME', 'motomunich' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K@vTQ-`itC>CA2>xry[p+*$k*rKfxc_u3gyW>{g/K5-<KBhXJ|&6t-tyh]Juusbc' );
define( 'SECURE_AUTH_KEY',  'I`j[CB-e4m:f%7@lqT8F=]{i,|MX7@AFg(3nM/~]g?M*7.w1WR)1<C)f@nvl*i^d' );
define( 'LOGGED_IN_KEY',    'Urz78W:it&q;JkSu7T.Yw[]mM4n)0EkClQi/~qw4,wJV^nhlnsf:@MKS]ha@k LY' );
define( 'NONCE_KEY',        'RGu6yf04f;XRK^A<IXYdeJ5RE>yIiP[cz!|Qo+yh;Cas;84VU~$Y}>3(+jPRqQ4c' );
define( 'AUTH_SALT',        'no3RSX%8UW{kb)l7iY|kv$nB{BbP.%}h([2^r)JC#X-+~DOUm@/YG39&IK-&wf](' );
define( 'SECURE_AUTH_SALT', 'qB$S<3m9fVm:q Vy~g^rcJ7Q0vj;Z_e(mv>D0:yeMUnKEMtqA/YfGIzb<r|H.}gV' );
define( 'LOGGED_IN_SALT',   '{u>xEm.< %1(w<x~CBgv/@ec$O;nxOU< x3{4gNwaTtx)J#-F7*@J~5!<tW46$xZ' );
define( 'NONCE_SALT',       'dwy4PoU<79L}/@X?`gxpG|E7.!H#2QJP92#Udlfa&g.x78zt?W#eEL}#hCz^><yc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mm_';

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
