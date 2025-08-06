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
define( 'AUTH_KEY',          '~Kr!G;Z|[eh6]lKgfB~1qr4eQ]2=RcqdWPRcG3Mo&@/E@LW6OA6[!vz?^7<YJZyH' );
define( 'SECURE_AUTH_KEY',   'hf2J=p1+p5V-P~ViAg2Bx*w[}MA{+@>}NBw>O2^#iAh9NkCzG)zqT{`]y`BJxgI*' );
define( 'LOGGED_IN_KEY',     'Z;cz8Mb{l`)Z R5G0?*w2[jP[33?D#IXES&a4o:(>fIg6mB7<oH0ELS(x*h:Nr+a' );
define( 'NONCE_KEY',         'o3}8HIoOBb-iPn05fSG|a|w[kk@Q00FE]h4;4eOu6!4@}Nh<)c|_Si&,y$#E!/&q' );
define( 'AUTH_SALT',         ',OA:5/h *<1J.)6@ExN0mPfjRsUD/kCC: }@7# 1c4&{~`qUkhm7yvCu)c]-U}bG' );
define( 'SECURE_AUTH_SALT',  '4ibhOzTMp{Q{TtB>7i^-_t(<wEE:w_|i|634t%h?C]D?ej@X0<?:e6|7]1E6MDs]' );
define( 'LOGGED_IN_SALT',    'uK}|}Z@sN$l`_asz|UVYEFG-3RWMhqfq85I/TIg4tP^1n-3xV(ewOj*)KQ_2=m{F' );
define( 'NONCE_SALT',        '_j+LO60-kiV$Ye&Ud)y8&VRc.:5z|I1a|r9jURUUk ZGSjmM(|P )PR<a7R[Qk9~' );
define( 'WP_CACHE_KEY_SALT', 'QyA%.Gh-++Bu#WQjVMvpsK9zl8gQ I|*U(dU/!&SiOc}B(89l}N3Q~jOFn4S<:(k' );


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
define( 'SURECART_ENCRYPTION_KEY', 'Z;cz8Mb{l`)Z R5G0?*w2[jP[33?D#IXES&a4o:(>fIg6mB7<oH0ELS(x*h:Nr+a' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
