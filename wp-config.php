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
define('DB_NAME', 'u103137660_blanca');
// define('DB_NAME', 'otalora-rohana_stage2'); // LocalHost
// define('DB_NAME', 'i4501817_wp2'); // Original

/** MySQL database username */
define('DB_USER', 'u103137660_blanca'); 
// define('DB_USER', 'root'); // LocalHost
// define('DB_USER', 'i4501817_wp2'); // Original

/** MySQL database password */
define('DB_PASSWORD', 'F.Z6c9GQDb25ibL5IEU80');
// define('DB_PASSWORD', ''); // LocalHost
// define('DB_PASSWORD', 'F.Z6c9GQDb25ibL5IEU80'); // Original

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'bWiLwipEugpZfBxroD9GEHeDifhVN3d3tHUyyVIUSiIREcdPv0YFaNS3yPeUKXEU');
define('SECURE_AUTH_KEY',  'qxLsiOUBbA4fJbcnvOTZn9otGzlsUxX8N97CT4AljP9gepLNdjL8rerEUe7gjpxt');
define('LOGGED_IN_KEY',    'Vk6DVpIbmfKT7yq1LWLjwoxaB6GLomVbopQPkQoSLXNTNS8Aud2Hk3xEHcXJIwGk');
define('NONCE_KEY',        '3fso9stTUE2Y70eL3ZEKshyjz8o1Nzifn4O1rFG5H7EJxgAb9PrTlHWiSnN0SKOo');
define('AUTH_SALT',        'pO5d1XNVXoFBb9sCps3mIWJY7zt7JwJbqMksttTae7XIY6zcFbKN9Z3N4v1xqpwk');
define('SECURE_AUTH_SALT', 'HMnmSeE2WG1JIqaPfTDcNs7ukfQ7CmYK8mpPG8RdBDSJ5a2zVXaKWRxghdhTc3Xv');
define('LOGGED_IN_SALT',   'BOPDq98DnzoYGbEPlNHS1Yxbndd59nfsoCvlNUJRgCb2zxJhyi9lwlsmI88IwpiX');
define('NONCE_SALT',       'm7jUb1VEhMCdLCJJA8jJYLGm5kEIXJrHTvXlfsTe65gi9I0qkgxQGEcG2WKGMxSN');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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

define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
