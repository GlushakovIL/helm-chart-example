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

// define('WP_HOME','http://hostingx.co.il');
// define('WP_SITEURL','http://hostingx.co.il');
if ( (isset($_SERVER['HTTP_X_FORWARDED_PORT'] ) && ( '443' == $_SERVER['HTTP_X_FORWARDED_PORT'] ))
    || (isset($_SERVER['HTTP_CF_VISITOR']) && $_SERVER['HTTP_CF_VISITOR'] == '{"scheme":"https"}')) {
    $_SERVER['HTTPS'] = 'on';
}

 // ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mihalich_wp1');

/** MySQL database username */
define('DB_USER', 'mihalich_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'F.hOA0hpOBIsIBiupYP75');

/** MySQL hostname */
define('DB_HOST', 'hostingx-mysql');

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
define('AUTH_KEY',         'JlZVeVhJ5n0p8UQ36jn2va7C8LuBhkOnNHj4ThQG7T28csxqg0sNfbtQtaoz81k8');
define('SECURE_AUTH_KEY',  'zfK1mUExp8tKlaXzgBNU1PKSPNNOHTJgMNWU2CCew6fzBXdx4UFHxVi0o6gZ9gFG');
define('LOGGED_IN_KEY',    'fluMEBywPzrp8n8XWZ01RK4IJyJWYgkedAONLgUIdhAfz5qPUkT5h9ksRI1fQuYB');
define('NONCE_KEY',        'kyfRV99eH9WAwG8Hii01qcmlLW5pReV7Cn3GGCtS7BWGn6tSv4ZlfN1Mdoiaq8ri');
define('AUTH_SALT',        'g7XpMIOGPgtEDaY4b7Uoo5o6spKtPf4i71HiWCMPuMtjclePEFuTIAWUvlmMmhT4');
define('SECURE_AUTH_SALT', 'wQJ1KZ0pnk2ZtUOddtaCbiAYuu6W9b7tKufs0hXGUICSGseD3FdkHJgeJgcuhZ0E');
define('LOGGED_IN_SALT',   'tcWeh4Go7mMTo9TvXLz2SSNJ1lRJgVER0wPeUryzxU1SG6soETolkWLJ3XD2jTbH');
define('NONCE_SALT',       'dD8ElneWmcGEcY39qheqhPWeW1t3IslK42BPWjNdeGmgqMxekEiTItV8AjLgZKsb');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_ALLOW_MULTISITE', true);

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
