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
define( 'DB_NAME', 'awe-site-wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '{ICW_<~M0Y`|x]{m`rq*H5x<aO5x!`MEK1sP=9CXl;{faA)~9cQnh<nBn0As>2P}' );
define( 'SECURE_AUTH_KEY',  '*QwhsC4-bhNZ=N-u*L&fjD2d#%~~f<6uN2U,oJ6HNgaL4IRYN]TX+4C9WCJ,0#pw' );
define( 'LOGGED_IN_KEY',    'G<_2b,D|{bz;hzE>5<xFQ|9%TS 1PF;?iV-^3M+FPC!`_XOtc*(R3i,ZBb&u.Z`q' );
define( 'NONCE_KEY',        'yBUPh/nd<RY)0S&a~KM&RD*g^)WeJN<C5B;w]%@p2gAn,dRGxL(16T`gVKhc(K,!' );
define( 'AUTH_SALT',        '>1A[0!`~,gn`i<Diw1DBlZZ55&VsW;e^JC#)8Be8= HWK<c8.P{~EBV_B;(ayt #' );
define( 'SECURE_AUTH_SALT', 'CcDD4Y[6V(lAsXM|kpS)Jlb=LcxGxrc5QN4#D)^W~LEjN.OJ+Wn>aho1#wC~VJ*F' );
define( 'LOGGED_IN_SALT',   'Vt69DmNg^nrC{|&g0A)bC.I}^zh}vB<$Zu.S<2=jsZ$zH%#+h:giU]p96]2i=)l*' );
define( 'NONCE_SALT',       'v+kV]pj<>ZY8k&7|[$K6uK?t4)qj2k#2ea4zvU)k6n;$+R,p^bf)lOX,q+BNL-`+' );

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
