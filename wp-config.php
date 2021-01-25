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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp947' );

/** MySQL database username */
define( 'DB_USER', 'wp947' );

/** MySQL database password */
define( 'DB_PASSWORD', ')52SppV]6U' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v3ripoodlw5s3nyycccvyhkcizjqdbrsvixyinlejhy8ce0j57ahaiiolcpbdv3p' );
define( 'SECURE_AUTH_KEY',  'v3xotsyynouoioyudiopyzwx8jcncjfwa4nrsshly2rjvyqpw1mn4fvhyvwi5sbc' );
define( 'LOGGED_IN_KEY',    'lywjgjg1mmucvuhao8tk6qrmollsjsrosahowza9wzfvgsfx0vvexykwtvwcvn4b' );
define( 'NONCE_KEY',        'ynnzvyhtj5i9gcj2vuigbhnspvh89axaqyjxzzhtbaxyyhxvcp9kpakqri3dclz1' );
define( 'AUTH_SALT',        'e3khtzr6jrzgqxjyn0ewkcxy6wkcztdefncotikvadpoutamwunkelk728qkiuvk' );
define( 'SECURE_AUTH_SALT', 'jhgcg7gmdqttlxtgsrdxivs2pyvqhwhizrhsbqqz52u9zw2cmugrfndw7izidxbn' );
define( 'LOGGED_IN_SALT',   'lcgtw9pi02ds6se77u4hxmkvdixb9zj8vgi51i4nyytaifmfabtiztw3mmnjqp6a' );
define( 'NONCE_SALT',       'af6gzui8ptbxicvzkaxqozaj4ntcnhkp60nf81ra0qjt0nvag1f2tzvlbvxngwqh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsvvt_';

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
define( 'WP_DEBUG', false );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'yameteam.test');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
