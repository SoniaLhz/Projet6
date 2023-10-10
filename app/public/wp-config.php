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
define('AUTH_KEY',         'hnW4gi4c1L03s5TGInM3+n7K+QaUxrAm4svxJuA7k3+RPaBTNR1S6ThY+dyt1kPRNwz1RGMm6uzdapSiTObbPg==');
define('SECURE_AUTH_KEY',  '76hSLP1N8lGfZLqnLAG2Rl53e2aj4ggP8Lr49AS0d9UfhRMoPA+g/uq0FhkUBcFBAlfvxhUSDGEufMDq1NISOQ==');
define('LOGGED_IN_KEY',    'rwrNIvTlvbQwWPLE1wcwh4HxoWojMel4HuT5RZJjxP3jA1nTOiw2I0eeDmdkW8n9xMcGKquH8KA11S+e+LnM7g==');
define('NONCE_KEY',        't9gsR1Hd/zdRgEctOsazkH2v6GL3ivbd+vHNrMhzDLFK/Babj9fjM5f09nbyN7+y3OouKCEKatSuOB0RpS1V4w==');
define('AUTH_SALT',        'z6mzsOti1/+HMg/1kujvmIFt4IxecP9LFluYDa4E2uyoqPjfXgOPVmI5efoBQUk8+cU6bdL516jMe3kwUaOcDQ==');
define('SECURE_AUTH_SALT', 'Q+UcG42gmFwM13TXl2vY9vII2EwMf7Ox0SJqygVkZBOOppufYsh9kjT8bAxvVidTdSkgKdpV6CvIUZQzME5QLQ==');
define('LOGGED_IN_SALT',   'DIDV6Xg6jgOSTOVuGJlfTrKFWQAchhGEq7LVlUOYeT1HdOMvdbDzMVF4B2Ue/35wwmEWlJvpZpkYJwHpj/eAbg==');
define('NONCE_SALT',       '/7QskrEkfJlYSbkYeFxRWyAC6ndnQKypLDLIDGnSai6DRkW6Z3ZHOpCzg8XJVfXE5BRak565t3P87HqUwBPC+A==');


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
