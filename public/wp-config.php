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
define( 'AUTH_KEY',          'AZYA#D]z*UI%`MUT0dA(I%_[)MR]XN>|xKI87F=o^J2!CGc1P0vl(btMn$Ua[5GW' );
define( 'SECURE_AUTH_KEY',   '{1O]v7%l}BjGX--<[K[0]Ff&L<cBh} 3amSUvG-s`4:Yvc<gB/`_!+Z$KBjsXNGz' );
define( 'LOGGED_IN_KEY',     'Exo9gw{GMey3!Rd>=dJw]]Ds0K+|5B}S+@79qXlBZu5ojX b8n&aF{n~lP5^;pQZ' );
define( 'NONCE_KEY',         'ze2pPiz_H[ZowwtIwTLGgRN>m#3R<:8FW-xMU-d2GEZPFa5X}K2m=%00]13Y(nE&' );
define( 'AUTH_SALT',         'Dk55.2g<lQLIA(!p&b?bgxodjI4CLF9?(gbfHdFPG:!srjOX7KdXNJjK6ZFhap>]' );
define( 'SECURE_AUTH_SALT',  '|Yn6|}5~p,Tb3LhBlmJohS=`AYruD#$u{oCp0wERFLy)~;&nP_rcuYX$n`-3o/MD' );
define( 'LOGGED_IN_SALT',    'rP2;Ia(MOSD,c$$hi*T&X<mU8fvXm%b4X`wj_d:G#z`XNCHX}3Rp&%/t(}wn63H6' );
define( 'NONCE_SALT',        'G;zUsFyr_%,Z)t{I-DKQG*qNo~%*8Mh~N6g5UZ2^zM*2smWpnKoDoei{N7d<xtal' );
define( 'WP_CACHE_KEY_SALT', 'B:0LZr}Cyhm/3G[i]pU}Q:/=ku17 f0uq$p<ivNuQ..-f^o [zL{Dj@zk-ix,yZf' );


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
