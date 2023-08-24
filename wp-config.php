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


define('AUTH_KEY',         '9lMLpt2w4ZP0O0k8HFDXsUpdczczExMdxN6LW8yqvWhDgcH2vUGkbS1N68zZnLGuzkYvxsk4KCOEMjMTnV33tA==');
define('SECURE_AUTH_KEY',  'IoI6nf5bw2hCy9qVTckeeX23zG9pKdcR1dHFcVllzvZ+FF8osi818vKHwbHpK9P4bkVFAKNpqTCCYsLlgBe0CA==');
define('LOGGED_IN_KEY',    'LtkYinBth69M5dxpTGy1yScCDj27TWcHdM8D3dDZy9m2/RdjsB3K2SbX2sHTbI2C2pGZ+HVwxop/Ljvm1MxMDA==');
define('NONCE_KEY',        'Ij3Ay7gB3ytT9g/CkaxrPfZqKCK/UyZQ5rG7OaVqPOnPSdfAN+mEdkeoUNWu390MRdkucG2/j7WK7U4+SDRJdA==');
define('AUTH_SALT',        'V/LwlGLWnYdX/KAy9oJkdG9+qNiRyN4TGksAbGhh/rPXpyDVq+HzoPWQ9MUSkLv4JUTD41t/GpHMbt/KOfMrlA==');
define('SECURE_AUTH_SALT', 'c9tGutwAeeiaIZL7Fijn4c0c1Mxkfjsk9edBd4MZ54INJjwDm33fQTpeCCJF6sCAusprHNSLqctQpnKioQIx8A==');
define('LOGGED_IN_SALT',   'Iry4p81KqRQYLIqfQAxraNxNDDZ5heFsSqOy41HrnQD+p7cTmwj7XqMPPrKc8yKtC89Gk7qiwhruPA/zc8hvtg==');
define('NONCE_SALT',       'iwAmZsjUeYgQSp0jHqqW8lW1/PMNDXuBjU5VZk5OJwtHpkiw22jraJrYTKaHQd4cU3mcqBkFxr+YitEdrepZ4g==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
