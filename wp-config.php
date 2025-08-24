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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hodcode2' );

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
define( 'AUTH_KEY',         'D`Je>A-CJ!nJ.. 2ii2:Gqkr)qTdng8KVr..il|7bTnI30h[@lp[p_p4:dc[R~yH' );
define( 'SECURE_AUTH_KEY',  'Y(aK$oD@:YWtin51AuzWQi>=wANClIyRDhv_(i1~k<UYDug$xjt:;?w@COjF6:4I' );
define( 'LOGGED_IN_KEY',    'rcHqBtsz,jK5L3=?1%r47{/LqG=J kUPA^esq7 E(~vm)NjPJ$Hi|6hi]0X{E+_f' );
define( 'NONCE_KEY',        'ZXmNRks?_Kfc`oHtHuYZ{+PH4LXUzt+-{IB$)xW[#xnGSv%$:!TSsBU`9]q}E/I^' );
define( 'AUTH_SALT',        '~ZOeKb$8 dQonvcpB}G.C=ivi<`t6o~L6[1_w-+0YE0OH3|v3Xd(yCo8Q%4%~YS4' );
define( 'SECURE_AUTH_SALT', 'iT>XDn|xQDLnessU BY8ykA0U.zq++kS;9/MP9J-T (Rv>-( |Eg}#p>U|#3&r>u' );
define( 'LOGGED_IN_SALT',   '~@Y78vQ?GhOC*kX,>]9c96w-)gv<5>O:uXilCcA.5Ztzl`OGdQ*s{8+,[x-=|v4E' );
define( 'NONCE_SALT',       '/lpJ.sV1xTmsY.%{^x@Fu0;}&~~G#Ernf>J@g5X%>!JKb0P!.upbHG:.K1Evf 10' );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

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
