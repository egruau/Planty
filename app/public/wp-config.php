<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'hNL56Q8xjg9LpiSXnd8ERbENtdeDtybGUxxrbX7joIRTuee8uY9lBQI4TCJ43EP5d0tcjApYgx2EDXWkHHHgWg==');
define('SECURE_AUTH_KEY',  'K5hycYP/dK3fuzqR832o2I3EptMbaYXZtblP8GiFK+itxmSjen236ym08+Tr4iTD3QUTv5QDUVh9q0n8WAz1cQ==');
define('LOGGED_IN_KEY',    '9D1KBrK5kaZ7Yv/fZzTyqHO6GtvBUrqRBNB/fJ3DB2GLG+6COdBkbfE324t5zg+KlCrf27COc/SO0lShD7hbBA==');
define('NONCE_KEY',        '9xuJR1svZlDIUoT2opOcxxO8bgg0KFaWt1tzwuNz3U6omyo7tZXpZJeYugY9Q936AVmMo2BiBSSpDdPyIhJzjQ==');
define('AUTH_SALT',        'X5TKfKArt2FvPWTg/Uh/cALMhUCe2yLXaT5dlGGRZDPKp3jDcCpjTm4fZB3EPBwXoE+BZNVNFPfRwBePhilFDw==');
define('SECURE_AUTH_SALT', 'EH7wwr5rF1pVzz9VGKYW4I4pb2T0lDZNHX0DYO2x49CL7hzZb4h7jNVR9hKstmOT8RxVZaJuydk/v0RxZxAjug==');
define('LOGGED_IN_SALT',   'lGzWLPTGZiAeMRnXp8mvL128CM6nUXIaRbT8BR5o84o3xjpdxlxhQugOPADzFSh8i79qKlJnbsQgk8Q3KcMJrQ==');
define('NONCE_SALT',       'bPRfNl9NCvrZSPhbgAYtOHscYNRZbpIk2sAlfwQ8dkkUbvlt2jSYgKxRPJOdEIr5LkZZy0GeKTl4WpF6CjdZIQ==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
