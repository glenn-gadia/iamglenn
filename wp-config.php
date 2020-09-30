<?php
#define( 'WP_CACHE', true ) ;
#define( 'WP_HOME', 'https://iamglenn.com/wp-admin' );
#define( 'WP_SITEURL', 'https://iamglenn.com/wp-admin' );
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
define( 'DB_NAME', 'iamglenn_wp185' );

/** MySQL database username */
define( 'DB_USER', 'iamglenn_wp185' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S.n880p[o6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'vewdvara3z88nai6iflux5rifqmd0wecur1znvbzoyuvdoriu9qosflnaemkt3qz' );
define( 'SECURE_AUTH_KEY',  'qrahcgrlql2f6emmfldl4v8paa9ubzcu19v4hyyuyttzcae7oxi3dxslwl8h9e56' );
define( 'LOGGED_IN_KEY',    'iaolr8vtbn45ngldx4hiekei5lim6m0ymtillhnognhjrfwd0hwrelcuqccsdxzv' );
define( 'NONCE_KEY',        'w4kejidkcdjqwiybljex7mtz0zbbdzdnggvpiv4emj177ydo5rgki97kfrakfci7' );
define( 'AUTH_SALT',        'h2ects0q7ibpskq0oxwpmfzzbfvoey8b1zfir6l9zdrc5n4yvcnaibx8el4ivxba' );
define( 'SECURE_AUTH_SALT', 'wmmnx0womt4jz2hnnq0c6rgyadfunneffazwgd58sqivrcxnydwzsnw6g7kcuxwu' );
define( 'LOGGED_IN_SALT',   'd15jmmwrjcwashtrfjuxbxr9uhe1epgnfzorsskipzthne6qk9i0whukl95wm5ii' );
define( 'NONCE_SALT',       'qv1w2zbj3tnwckdymoa9f1wszw2chhxh4wxe0gksbkw1sum6mz0hgj726296tvkn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvb_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
