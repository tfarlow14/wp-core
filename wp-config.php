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
define('DB_NAME', 'farlowde_wp273');

/** MySQL database username */
define('DB_USER', 'farlowde_wp273');

/** MySQL database password */
define('DB_PASSWORD', ')Gp5@W430S');

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
define('AUTH_KEY',         'rqsgzn5o1wjexot7si4vo2xwlusxtqfcstuoiau6wvipnaqtattpksr8t9tymlsa');
define('SECURE_AUTH_KEY',  'dba62zypwaftxwiutqznwaxrbjqavlxsoc5klcy9zyxg8vdqhedua7ineuykhoy7');
define('LOGGED_IN_KEY',    'gcaitp2pafboprmbtiofzlynrxirfzkps0oqm9v42ix5fwamxzmmuomphoikjfd7');
define('NONCE_KEY',        'm3xnumvnfmeoingt83i3riorj1fry4nhroqrwdslkoomz8icj4owtg5z5bs98is1');
define('AUTH_SALT',        '5sh23exylltghc1hultuyhaqutatw7ulf13exw2txxknoihhktsquiwiddgvlmgz');
define('SECURE_AUTH_SALT', 'zky8rzcx7wjlabzqhcsqjgawem3v9whb3k5mlvtt3ezs8lurfboygrnjjljacskd');
define('LOGGED_IN_SALT',   '34yewoqodimmnt09pwbu8k6etwmyvlotdoafth310lbmpdajkyyhmcpl06bcvs6z');
define('NONCE_SALT',       '0qssb447se9c1cjltonmysvo74qxydiprmycetxglsuql4d3rhjas7bdhbqlwkvv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpse_';

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
