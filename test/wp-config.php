<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'iamglenn_wp336' );

/** MySQL database username */
define( 'DB_USER', 'iamglenn_wp336' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p094s!o-PS' );

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
define( 'AUTH_KEY',         'hup7xcwiauykx5b4z5vvatbethb3lofxhcpyoit04fwnsfckyn7nqcv2esfftiwv' );
define( 'SECURE_AUTH_KEY',  'n8sucb0xrjj1uhhzlvileodgmymms51vfhvixq9vnlglnbmxpooifcz7mszd7wpd' );
define( 'LOGGED_IN_KEY',    'j2yhhj9qstgyqk1whjbo0kca73dyhojvfqszabuvhh6yibaqtgyb2o17q09tenna' );
define( 'NONCE_KEY',        'mbhubbg0birkku3sgzsn2zxg7v4tm1ucvy0llzr5oouirstkbr3y87dfl2id2es9' );
define( 'AUTH_SALT',        'hfppou1k9hh9tgy8yewptkyharwf6mfblxv1muqe2dvbjdifizjjjrcbn2z51rd7' );
define( 'SECURE_AUTH_SALT', 'i3xbkix9vudkhzxv5lgbq6pbbny89jqx8itdkx1botxxfb79hmjmpmovhiahpcmx' );
define( 'LOGGED_IN_SALT',   'ydmptje5qdzjwzjkfwuuuogwedcilacaswpzi6sxomxthle9ahgs6xpsdtzdatpb' );
define( 'NONCE_SALT',       'fgtmbyj3bwmlbrdr168zeghr3g88qjz9hug5pfgqbtayqpqwekhsnwzaziutbvbp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppf_';

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
