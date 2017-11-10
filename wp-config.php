<?php
if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") $_SERVER["HTTPS"] = "on";
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
define('DB_NAME', 'heroku_6da0d949b7f5f6b');

/** MySQL database username */
define('DB_USER', 'b94d6786f1414a');

/** MySQL database password */
define('DB_PASSWORD', '732a17a1');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{d@}tQv`bkB~o#w}7LXw^{G92VjPlD^n];c-?7SbJd8).x6T0M$ndk/n|Qb1(z|m');
define('SECURE_AUTH_KEY',  '-:h:S}|i: 8^#A#joQEBmAAQi l|b4SJ6hrA-[|[+6x%Sl5sgq+R&XS-x/+NX{OE');
define('LOGGED_IN_KEY',    'Oh[!eeo6;/Z>ii$Io FP-MJ[NY6kInUvTHzu>QuztM<>w5lZAV_<x*i1Pa+NA:]-');
define('NONCE_KEY',        '0I2L]h#, #SoU&$-yn|!aFUs:p?c[W*]6osbiy1qSajB4+z2nq( 2Dfp|,k#o@0@');
define('AUTH_SALT',        'r.!:0%|bg|],S3!-`)eo1L)PYh!ufIr=Zu6g.-)Xngn.7*!;S-MH:Nl[h>09-;H|');
define('SECURE_AUTH_SALT', '/I|:3AmY>Z3|zHhKfu$:%E`HM2M+IU:&VJ;-z<N@X@W]{muRk@HBTijO!OsnR79~');
define('LOGGED_IN_SALT',   '+].C+ aFY[b]sssevA&zX,L[A]*4.7N[)d+HgBb7H>AHJ~:|2-KPXcFay!Un%o+H');
define('NONCE_SALT',       '+@O1L8.o-|ujB=v5v[lZG-PN-Jd:>;?8W6lag]Q$`N/fcFuwUg2Rx*WF`A*!pvMc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
