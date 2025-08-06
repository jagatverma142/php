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
define( 'AUTH_KEY',          'kHBE*++mP!c,^9G$U84E-0^>b[TbcSVQ+D4Dfj?<}Xuz)v[~E/u;.d1@=DW/nK~#' );
define( 'SECURE_AUTH_KEY',   'nP3B9vj(*N1@!mf=TKmNV_aY1Udu%UsTzGG`OK:~TVYJ%WQ7Qbz$vpb=O2|JYnPP' );
define( 'LOGGED_IN_KEY',     'Z;ehM5`]`-7a2VCi2~$;[5{dax.9w2+ow~thL@>:}O.hc5;uu@wA>=oPg)7W]ebR' );
define( 'NONCE_KEY',         'yfn<](9a&0m4s=6vQ~g5+[%quGAOhan^v+kab<_L4T;{GcVI$G/_~zGY9Q[sv%AV' );
define( 'AUTH_SALT',         'ui_5pzW8EJ/W|AP#w[ok!Tanq&Gvd~.!HfE.N&4k>^F|KFDlwVb*D:lpwi.^>NEi' );
define( 'SECURE_AUTH_SALT',  ' ]ltR~`Yy?<Q=/ah|O$6/L|$[Q4@+5fq6wh]6<GhyUz(:>1Rb:3F2YRccjtT@7%>' );
define( 'LOGGED_IN_SALT',    'Dz>$VlXr>m?)N7HrLT~xTgHl&2gQ}s6(g}(k/pw}>*fgtUwl}J0(?)|l/OR/MMM$' );
define( 'NONCE_SALT',        'Dm~LNJB}Z#`M0}ywN{-v;a?1Rdf.Dsp&]oG#LDV_,By#9+QZ!){8C}ETvs]`xs|X' );
define( 'WP_CACHE_KEY_SALT', 'Q274LBr0*N8|>e&#(UE/wod}J5lPlXx%*Ui_{&s:N:8|VFtw::m)wnXY,.X#ifOs' );


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
