<?php
define('WP_CACHE', false ); // Added by AirLift

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'littledragon' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'i:?K]*xh{h6W*mP-`7eZ$/J53Ul1;uW;>fC}!8fRip5)%kjpF&G#i]]U1gf{2 #h' );
define( 'SECURE_AUTH_KEY',  ';&M@t?tj3K|7@5c0yjH_Em0fhx@]gDr0tdx#0+!v}hn A{Y$uaNG(TX>kj`33JSn' );
define( 'LOGGED_IN_KEY',    'V?I2fhUewraGf#u(3@-dS(vps$K1&k|W~&oOp51^L-}rzoX>HC`i?nmnQQf#+EtW' );
define( 'NONCE_KEY',        '2G>YuuLgduaC>gRj87n);!;^m+t[co/6:mbWonIw dV.4M:j6:s8vj{3dp?PMUN[' );
define( 'AUTH_SALT',        '}8txgT&EiK/YK`0 /ELWQhLc P/:m[<xN=A@>b&)$>}s?9(T/9hbS%NBYAXr>UQP' );
define( 'SECURE_AUTH_SALT', '!I^: zhes1h-F},7yE0+vtiaNEtv[9h5EZ<:P~Xz=$b/K,ZS*OYeohNg2/pn(kAl' );
define( 'LOGGED_IN_SALT',   'm+(g_`ooE?&9+F^]j|}PSg?%IS~H]nCrKHm$/(*R4]Lobnm/I=kiG6>MfMcqOqJ]' );
define( 'NONCE_SALT',       'F&0b@EQwn?m#Bu_%t.73V10y)G3uwi6NW]QKLzeLe<f#Q-8!xuFpI-ti`<S#E;/#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
