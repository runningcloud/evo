<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'evo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Evoness@2015');

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
define('AUTH_KEY',         '[sfyeDt-R3+*+j~5/w4zhhg<uyMo5%V!U#d`2hh>.f1 olK5|)[Wo>)PNNX?k|vb');
define('SECURE_AUTH_KEY',  'Zc74)|6R,lj2?A[o9.G|+1V-6>${P2<hP_v} PTb<#sg(_t(<?AY(`a07~uU+f1y');
define('LOGGED_IN_KEY',    'e+!Yu-q_6&<#F<|v_T],PZd>3(=Y,|KrR;eH;6xwD( N@Ho|9qLRV A;O`@V~3|-');
define('NONCE_KEY',        ':ap~10tO%BM-t-Pg/XHCQ+ xJC<Od+jVFvRYK(VyHSg- /8C+E+t,LT!P1Ok}r w');
define('AUTH_SALT',        '%#<-2<J$8dxDCQt@lNcMet,zjo<E.N?%t)_bY4m|7%5>uQ/;.Y{/SgLqA3dkwhF9');
define('SECURE_AUTH_SALT', '|ZRY#-haB{5S2}3c64*gXgZI?7-<q;kt5DDb)MYle84nx+I@9Mo|s3<j`TKjaweF');
define('LOGGED_IN_SALT',   'sXg=Z{lk@yel-C{-z}wQ8<*#JZ3qa**~K/tD}-PW8h]6fqd38ykYc1IE%T)9($-m');
define('NONCE_SALT',       '>z-,rrhb^<4k~zxGH^.L>,NmG8q6&8C9DG|A+lPF%ec@*wZ$J#zKu2hrG?l$ka9l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
