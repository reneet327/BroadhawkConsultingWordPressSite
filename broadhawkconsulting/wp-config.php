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
define('DB_NAME', 'broadhawkconsulting');

/** MySQL database username */
define('DB_USER', 'broadhawk88');

/** MySQL database password */
define('DB_PASSWORD', 'Mynewsite!88');

/** MySQL hostname */
define('DB_HOST', 'reneet327.fatcowmysql.com');

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
define('AUTH_KEY',         'ZbT1bX%rW7o6~jKzLn(`z!]OUDBOg{7VceVBfIC$;oHl?rv8/G| m<K3YUa-4T@G');
define('SECURE_AUTH_KEY',  '!<zVTP:b7oBp#[7S1l0+r-NSj]i8B/b>Hxo|Xs!-_gEi-bS^k]SJt|N:-za=6f[/');
define('LOGGED_IN_KEY',    '.gI%lyfw MTIf.rO$Ej<`yzxK#y`=e8cam@=^|z>m>aeR:qK)5+*16p!KvL(}80N');
define('NONCE_KEY',        'hdKMO>N&<OLLXwL3f ?JWF[]y2@oKx/~8A|xg%iX/2&tw1xjN7S ^bQ.:6e+7*xZ');
define('AUTH_SALT',        'M.8ML.iG)cp3@ pjGhXd-Qg!2DDcWG3)A<(&-Avet+4]2*ks?xnC7/5UWvF_=GKT');
define('SECURE_AUTH_SALT', '=Z<Cp:&J+5nd.l@=}6a4oJDV!(RoEop6$N>p}*g.uLUt/A=JJz,%@] 1+<C0UiHY');
define('LOGGED_IN_SALT',   '*YSC1d#-~$6wOZilF|?jEo#cMR/},y*;-7>n7<d&A1j5fhCrH}/};flT.}`D$x%W');
define('NONCE_SALT',       '##&:%&0.Gy a~ [05ya9umUcAJE8nWwEaEL+%M]MQmjGbz(sI4O5feFtZ=i/_L<y');

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
