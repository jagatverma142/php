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
define( 'AUTH_KEY',          '#zu/xZ$]@AsEWLbn~I%KD3h_8jFpI;3a&&UL07eMjMOYIK]BVg o`FPzlMkuAP,.' );
define( 'SECURE_AUTH_KEY',   'I*R^V(P;v{6#?W/q/;ipTszfl X^@X!BW6zN,`7%`>[M(Kzm/xXe&t-S]&ZX]A0Z' );
define( 'LOGGED_IN_KEY',     '{qNj?]h2#l%Z#QDTM)ynVEUB*<=k^d2VQ~4:Pf=$4(T#eKt2<cbcn6ez&yTqhBSq' );
define( 'NONCE_KEY',         '7YybsifD#tpn:6bh#LQaWp`8P%>^Q/9jy)H+Yz<#D:*OvY_(d<rlVeAC9ij=p?x[' );
define( 'AUTH_SALT',         '<d3b}x7-;4ZgdX#5rz&F}~I0=Q**o$5X3-6DX*k)`.<;%R%nqckhVs+[jG;-n(d8' );
define( 'SECURE_AUTH_SALT',  'XTN/Wy)9y=fD:!408|B/wp:(xK*5oP!+*;d-W+QDILkH<v!UO.iP-T#traNqOa=d' );
define( 'LOGGED_IN_SALT',    'yfr|%MyohkoOWQ-<-p*U[{jf*N}5{PYyF^(SwS1=$%5~05oy)A.I}/2,<5|Z6jY4' );
define( 'NONCE_SALT',        '&9nnr9N k*ikv}D@a^Oz/7O=c?W=yfS7f{FmUB.pT=D6AP>3[n22gYYGa46)S}MZ' );
define( 'WP_CACHE_KEY_SALT', 'wPx?]hQUD*4jqEYra<MCJ}/s -3PjMaFIh>ym3S[L^p*IfvQ5:`[cPd=K#{lkc;<' );


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
