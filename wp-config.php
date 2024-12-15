<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dulichvp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', 'http://localhost:8080/dulichvp' );
    define( 'WP_HOME', 'http://localhost:8080/dulichvp' );
}



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
define( 'AUTH_KEY',         '3nqtKMrSTy9CXKkVu0RfcoBRZ8Z03TGyWA53poRn5UKBuK0GvI0W0rwT04lEsmoZ' );
define( 'SECURE_AUTH_KEY',  'L3xIwWPiEnV7RpmygW3uBawIAv6eas4RQN8AvZySiUIOgV8Jfg4WX7vo6FJxmzZL' );
define( 'LOGGED_IN_KEY',    'W4UvKpVqO3so3kVAWN7CO9AC1dVX67JCvdcRezNsop92CD0T4cbF51Ky27LIDlDK' );
define( 'NONCE_KEY',        'z893NdPK1TVXljiovke6om58rtIfP6olIUBPQfzSsucWtzpTYPEQMnBkwLDEx7lq' );
define( 'AUTH_SALT',        'jwJQrC7VpmXUIbBHSuy3y7U3wgDRpSIXBxPR3G8LxYl0ZzbnESHU9bdv20ZLcLAC' );
define( 'SECURE_AUTH_SALT', 'beGWGCLW2tzebVQv4h7tjk6nhCGNMuIt88RYNSq9CUzEbCrl6jlT9sz8ugP2Bjnj' );
define( 'LOGGED_IN_SALT',   'iAnA7M0D5PkkOqXiPj4RexZzn4XlNJ4NXzxcJzitIHXIHNJg1xbFqDryVQCCuDg3' );
define( 'NONCE_SALT',       'aQgV7tMooVvJVaF5q8j8FI1jtLZOGPpvHG6OaPMIS4Qudk35r0zQBvQvfNgaRkpQ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
