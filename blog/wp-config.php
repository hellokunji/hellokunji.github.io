<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kunjimeena');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w+Ev,1?:2B<:p:B[;oXYQNh|(*4zp=25+7j4=J}6CogyMw47zzLN`(l3oOQky}<z');
define('SECURE_AUTH_KEY',  '6oSsK-F8f~g7|[%xJ[Yo<iKljr~p-4I,{/jmU?L*W9jX$0zi~xZsZV*~LI.XS+0.');
define('LOGGED_IN_KEY',    'bs.0k|!oqF68#A.I]Ec&54(@W#CsUZQ_^~>Pm<Q#b9jp_D3#E^v!#tU)jAfy?#d(');
define('NONCE_KEY',        '9+fphqVbH;3|EM;_=Xu%9=Oz!nr+rj+Zt![M3mxT}^um:..ckjH=8*V2/w=Sezw9');
define('AUTH_SALT',        '>r_K-CuRqi6# Xy]5Z:1de}RvD^6CbbdO8RvAv4*@Xz%.00{rFUc[/Rduny%a/iQ');
define('SECURE_AUTH_SALT', 'vaHX(|rYHSRDwcmYi(TwN4(|)TMTz8s7Is]Z;!KAk/NYE,Ed$80Cpzl0RI-#3]Az');
define('LOGGED_IN_SALT',   '-a2|UnePQ7*?U/LisRm]^]YXfYs_ylelpu6NmqD*<tT]28Eu>_ATCV$<aE5WDw=c');
define('NONCE_SALT',       ' V3z !d)[wX1#M4R|c<jPtl}QGJ]MfMe>uGBF*Z/gaEc/nb8&5;6Pu6fgLnwUA$h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kunji_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
