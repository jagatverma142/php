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
define( 'AUTH_KEY',          'DS;{p*V-9Jo|g^+eFXc$)X%XYnl 04(+sZ9s_m-qv;%lUK&1(,t(hxS^*Kl`w-p:' );
define( 'SECURE_AUTH_KEY',   '6aE56^qH4()FU8jb;%*<wsR7b$ef>@0kvge%hZs uN_H,BOdOXA~7q&.*s&G[.<?' );
define( 'LOGGED_IN_KEY',     '3RvmEUA^C|V->NVOt{OrpRJpP*2POL?{>s6_Ld;gWhohiQn^=v`RJbl1GebBr[UA' );
define( 'NONCE_KEY',         'n;Ukgbsnw u#av<BSAWOXFX*SSLRE{p4:5;qU=wV`q_/tA&ukcyK?M*FHn>| {t ' );
define( 'AUTH_SALT',         'Lq|[QW0L{*Jg;I3*Fmw]8Fi]KrbH$bP.<)@/s&TH&2@j/(K)Py#iEN41hLeY+&D+' );
define( 'SECURE_AUTH_SALT',  'Jq@@kO7g@VRbYO/R,UYZ4-t+o,#xdko.qjMTPEhk;6VqB&~[27P/x sjcL0qFsd6' );
define( 'LOGGED_IN_SALT',    '68y {%,?/F-TIeZ=5X.QS`UAs$G;zC6u}&<w`P0DezGaDXICyS:VuLt&8S}PGDb.' );
define( 'NONCE_SALT',        '6H6wxre;ncGHnx9H:zm,18qFI<LA?U 7Cc*J7Mwz5%(~PpMvV+%AvuClgPIv^:bv' );
define( 'WP_CACHE_KEY_SALT', 'AKM-<s};kW8V!)`P*cavua6tCgVMC1BCcK.VV,W/<w$4i>8~zs^kKao,^3y|m[2q' );


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
