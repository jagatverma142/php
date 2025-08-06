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
define( 'AUTH_KEY',          ',sZ2EY:M[6$).NbYqfzmXEk$mwdnWG-=.Tza3.J.qU6o~[N]!?ujMeUic%Z.-hHb' );
define( 'SECURE_AUTH_KEY',   '%>:wEIcCD<~E!URea-w3[z}<wk;V sCToIf=4@.wlUvc1IDu{]flSN}iPbLriRO6' );
define( 'LOGGED_IN_KEY',     '&Go{kaa%e>HR#V*OZ?xx<;rdKZAhd%5oANBI)KP}|8~Zu ^Bo!A{7IA/!WAb`f5i' );
define( 'NONCE_KEY',         '35U=!Z#6M!%G?Oio5.NF_z}nlk!%fN=%9* V2J@mw`S9@l:w%DTb* G,g@_8byxo' );
define( 'AUTH_SALT',         'KCWxI~6DeX+(hP:|p`wJCHR{-V( o~:(RYBS*jE_N@cx/51y~DGYHEx|j5-h*osl' );
define( 'SECURE_AUTH_SALT',  'vaaMXd:N@>ryUGwvM8NrSSV>L6,EeJ8K?r ,=,u^u8)0%Y/}A4dec013*DQ4z(w~' );
define( 'LOGGED_IN_SALT',    'H09:K`*tuo0W=VvaJ-EcfC= XOiKpj=q~@64~YenX85`Um%~AS#2`%?VrhqcLs]*' );
define( 'NONCE_SALT',        'd+DQAkI4x=uyIbIP0U $3_.tJwx6uv~Vr()2|4`qXz7!WL(4w:~8.},;Hnmjz=3n' );
define( 'WP_CACHE_KEY_SALT', '-hw(jVL}GdmHnCquJf6QW#X8m0t@$wO74,oE96teoQ##b_wozYHVzd1PCk$6VB12' );


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
