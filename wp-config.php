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
define('DB_NAME', 'wordpress-git');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'EaXXI,usyLj}5j}~X98{>|zFO/YiSmSx{SBpwWDq$n4`E?81+*;0p+:cP><wLsr[');
define('SECURE_AUTH_KEY',  'Tww];&/3./},R>xS+2WOFLAXbkLzx32+VxDA?)6>^^O4DG^!(:t?#$zVS=5wi(-x');
define('LOGGED_IN_KEY',    '!fkI=y!dL/T6X^aZ>@^Ij;^>* ***cELqXXu+K<.gVkC7/$-YIPYvK+G~)pD}P!?');
define('NONCE_KEY',        'p6E#R.oBQ$5|nj3!`E)~}i%ulE4X_@=,QGx|%{F?jV$??~ph{q3@TqBf4XMhEJ:p');
define('AUTH_SALT',        '[@?X6,Pewpb.78|G@o_j[i+,6`8Nj0E08O0u(cQkNHH1Wxw{NluoKUz/}WtR2A%_');
define('SECURE_AUTH_SALT', 'aNmPgkO,cI^<yAbRb9$4WpW8<r< gJ}(s)-H.`eoJ&{HjW*0<H,p11I8&(<8]9.N');
define('LOGGED_IN_SALT',   'Fh[oDl`9%0rF bO*]Tp]?o^b:UAZsl7e~{ 6#sp8k>#q1Dv.^v|j%K.jws^&qgcF');
define('NONCE_SALT',       'Rgv{<*AW,EpR8VFl+NgZ4BFRN9LNCRKq;}j{:OGLX+w`Ui1Z&~Grakt3P]|c/pP[');

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

/* TO MODULARIZE WORDPRESS CORE */
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
