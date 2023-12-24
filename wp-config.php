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


define('AUTH_KEY',         '8a8sQhjcbORP7F4rCWt6i5ih8HGSoiw89GkL6gvhgplf4GfqrFcg7iqvTWlUWDXiPlX9Z2n+6QulrXNj5PO5Mw==');
define('SECURE_AUTH_KEY',  'x7XfDglG30XLJ6liX/DaMno28/pnDtHccQ4KgGdZzrGowEJAvlroKaUlfIIuevNYZLEz/E05LQUaBtACty8Kyw==');
define('LOGGED_IN_KEY',    'HSjJu11DN6a4my9R+pZckWIDC2A5b70i+I58sY4ELKV6ndGuOhfsDX674dDl4jqmUaypb1SXQQXRwZL9XBtzDg==');
define('NONCE_KEY',        'OShRPbrvWLjzJ/FuupGlCxy8D5sFqBtpahwULj26OJj0cchOU8jHpLELiDlNaklhTAUrXNmbbeY9+gnQStrZXg==');
define('AUTH_SALT',        'VYUgW10y0WdTrZfWlAUPRyN8NjGo3bv5NDxG3/zC1z373lMbwLAIkNxdUQMD7MZXb5CUNVtJGk6ev3gSzzA14A==');
define('SECURE_AUTH_SALT', 'UfjyTvYDAQfBkMdUljqntNmPtFBfrnbmei6mhyjye/ceHTg6uBwV0FwYwSLR2ErxiQHbKl0gYa7L9/2J4GIFEQ==');
define('LOGGED_IN_SALT',   'YLGHjs6f+E7yD5txlfCRslG4ejeihr/EqQUoInwQpTJk0ZvwqVPL4rzqNrrJXyhsqL0q/nMavKJemfrbeevw7w==');
define('NONCE_SALT',       'BEXYFxX/Ii4Vtl2n1N5r7xQT9AIicZOM2IrOrr2eFl+8vHRtjZffbXNjhcZug/4vDvj4i1MdwvlRr3wSAgVb+A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
