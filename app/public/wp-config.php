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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nQprOQxCxfCrUQE3ceYOPtjeG/iN9WgtuCA/+/FbzXjdpiEE2oLZQavL9WTtEvlQNMiqILkdFiLmgmNIwjAhyA==');
define('SECURE_AUTH_KEY',  '744wUmJ7nGT9GCMZUQhzZKcqxOjraSwUFcmW3STqQ91y+nBcUDvE41Ul8G+2fPjgmoRkwN9vKBb4leD5hF6Tow==');
define('LOGGED_IN_KEY',    'hUKPU4ymje8WToZCpwaZGb5ca0QMQ654QJCB2I767IzOlPwMFCqyqocWMfez3YvV6MjWR/S4rjShMFiqXt+NNQ==');
define('NONCE_KEY',        'i0YOV7QJBYiqbX/pzAOySjiP3gXJvPRukp8fTupFf2t9ErzeQgjm3I76DYpQmrOiVJGzAqXHLCaoSwWRaK1sGQ==');
define('AUTH_SALT',        'qEHLxqvZE75oZedZBygDyx0LBePy/KJBLKKpO3QzoKNH2LRtQxxYu8hmgYKIqz+KBBhTw5jZB0tzmDNWCFf48Q==');
define('SECURE_AUTH_SALT', 'aPLcFkeyjs+oi7hnl0N5rrBe/IDPtKmsnWVW0Jp++5IpvC/pPG4+hY06PPf0Qm+teUfcYOX9hkqQG89F68Ly/w==');
define('LOGGED_IN_SALT',   'OgYfFcSVGPxs6Z3tcYNycv5q0oM+JjEvQjfI5CN6yAhKE8p5Gt0Pu3MKr+hvXAWNF/Bl2aDJ6DB4XGRC8kLhnA==');
define('NONCE_SALT',       'YhW8DmkI31XrUwD7ILxEijMZfsMfaEJckPOgIxP+E4VvZx6ayRSdqJilsZ/lf3ZHboWmdKZEU7XJqeO+wLFqig==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
