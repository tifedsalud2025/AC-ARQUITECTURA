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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Hl,]d&nVWnD,k!#frk4.6E N#p|8pwHZxqwxD9=a]*^={-+w<N2eNpAio{w*&QPi' );
define( 'SECURE_AUTH_KEY',   '-7Xh6dWm]K+bD@yw{Onxq=go<ls%8!_@#?O{0$L+)Rk;(@^vBl,I}7L!U$x&dS&0' );
define( 'LOGGED_IN_KEY',     't-G:V^k<9!g/_%M:@]+A=x?S[]c8arbU:%[r*DOzl.J4.57{ ioDZ:$FI)*6}#Rh' );
define( 'NONCE_KEY',         'oy4Py@Z.2K$?{?4CMLJXyw8x-t{2x!,Y7u^?c0J=_[<+$S^r G86ai]L0I`|<h,u' );
define( 'AUTH_SALT',         'i1nqY}qFHfd3jjfppVdc=q~-rS$K{)e]TI9]V|IcX5Hj2subp/^FhWs[c:OYeU!N' );
define( 'SECURE_AUTH_SALT',  'oRMtj;5{=-AwTE/0b~71g|)D1hg>QQ?yIq?!0b<#xfB@qkZa/{5`s$}rA [DZ[&V' );
define( 'LOGGED_IN_SALT',    'kMkZ{|$I4lz_Qfb$~fa)F~cV(Vs9@Q+j`p+e^<g In.tB7*A@C1KuaRZY{;VRT/!' );
define( 'NONCE_SALT',        'fBingmV:<2n4Jby=+>m},vw_~F2~7P >;(g1~FjF^o8%(2|*vWQq70Unk&?^QV,N' );
define( 'WP_CACHE_KEY_SALT', 'q1Yjn;f!8NrnrA-w:g]36U<;(2+Mn|HeTi{SXkF<4@lv]$>s,^PytDmYz(&hiY>j' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
