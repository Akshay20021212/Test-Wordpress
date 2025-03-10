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
define( 'DB_NAME', 'Git-Site-' );

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
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
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
define( 'AUTH_KEY',         'JRxYO2ubyVaRpQO8Q92mFBPlwsl0pHOQpCvU7uQtnZL4kLhhHekW8nScRkFL5TWw' );
define( 'SECURE_AUTH_KEY',  'ltx5IgmjxqCDA2zKlZsdgWSl5D3RzY14KA1kbKKPYOlRACboxDVnFucivodMSzPc' );
define( 'LOGGED_IN_KEY',    'jFmGeTx3p8OTACqgnhhiMVyn8WkodYa3qmeTYhADw9YG7pHZGcTQ6Z5XYnKdg5CG' );
define( 'NONCE_KEY',        'f2QelTRxdbCzPZ4aXby2a3Ey17RmpMFiHEfWmSfj476WcrltTVdPA9fgdWFQXQ1x' );
define( 'AUTH_SALT',        'lw28s8p7ivodUsQbN7BAgwG1IXheSBvb2mhzIaSBCQN3nimyNTMcD6SkGEFq6elw' );
define( 'SECURE_AUTH_SALT', 'EPBvmTQ9KrU2osgzNSvJp8QsBMa9vQ29ftKOQ3QKb7a0svvtgNTS6zjTRp2x3GnU' );
define( 'LOGGED_IN_SALT',   '4Dc8tAONmkBDa7nQ0S5ZYkLsYZoMuGwhH3PBaJofLq6XO1hLxgWZg9PvMre23izb' );
define( 'NONCE_SALT',       'GfccmOHWlP4pli9tEIwQzFOtwa6uEWIu41k1fZiAmfFM5RcSoFwqOf0BpwM3PYsR' );

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
