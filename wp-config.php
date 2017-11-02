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
define('DB_NAME', 'markgil_tur');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'OAY!(6|?3AXUZI_9zz:~(|jzU(kzfdhFTa&K!LllfOEH`]&l*uR,j|^:> ez3<Qs');
define('SECURE_AUTH_KEY',  'kZETHZYfsG%BV.I~+I|(tgmj9FK{Bnf~7#*y2Kp95ml,>(/W(z$xbGlGa}JycGeg');
define('LOGGED_IN_KEY',    'MeOR,@sO=D&P^0/p|LG,Qnlo[S&<%d>ym[Be#Tz}zj>wTKTfT%&{%wxl%V4I.]t:');
define('NONCE_KEY',        '*j)6Bz6cIy$qs=}A6^y6+~?(66%9r!LY,]%a(s5MveHOY$=zyL_jP*./(~z5T#e+');
define('AUTH_SALT',        'a+)*aWB:}vv`Xk_U]r<YP?hy~(Dvc~9li/rO5(T13pa8;P5c,H{z4x-!3.|0)+>x');
define('SECURE_AUTH_SALT', 'G#P{may|Vv]d[M5#q|ac0q _! -H}K+(@$(dZ$7nvADMwaY?{pe<N/)k/eM1|ghV');
define('LOGGED_IN_SALT',   'Up>(Ykr&k~Bm-9QMjP!gF;k`Iz;}yz$~{9}*Fj+4PijXd1Z<s}$*V 6qZ%6O@rQb');
define('NONCE_SALT',       '?0@5bP{C!*Yi/rEbL5mv{0g7,7i)dp7Fa~0Vo Kxj:5Gaj1u5A<xlXW~Y7=g9%GE');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
