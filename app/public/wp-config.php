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
define('AUTH_KEY',         'oIcsDKLBdKPD9U1+8NJ/bVRojytxh+h/w9MjPVBM5Lo04iwzXnudO6rOL5wqFiWUMXJlWheUZx4NAxFlGOdcbA==');
define('SECURE_AUTH_KEY',  '0+3wP8UXvVfZgL0HDG4pE6zgowA+0nDuWoPg0Sz4oKwr06WZMxkgssmkrbrof+l7hrkRYQRowcDfQOfhiUL8Pw==');
define('LOGGED_IN_KEY',    'gl8bLStMDwLWs0cbGCQAs+nv+PfkHS9zJ7u1E8lHsFO374jx/uQ/SrmjuGZikNg8FuiVbejPopdumUduy367Mw==');
define('NONCE_KEY',        'XTBdfktXmIrFdEvbEtHinG9XzLLgTMzMM0cRVooS1/b8UYJqY2qA2/ajMTBHvokbtm08LEZVpPcmQOIi1iQnDg==');
define('AUTH_SALT',        'x77Dd+9L7/SaYpPFxkCZExhMvD5M6QtdEee/EjO3Iyzh2/HSP18hhOYYa/ySf92AUDBMUGyWBzE3UkqELKWWQA==');
define('SECURE_AUTH_SALT', '93/kNf0IY6lRw6WiF1Am3xx08GdVkZ/ztRdaWuPaWp1JWJxV/LFqMkFS5CWrtdlo+QBASxt9KqEAAyK9XfpsAw==');
define('LOGGED_IN_SALT',   '7ry6u26riIMf0JP/TRGudyapeJSWq6bCQUqOPjpKlPrLAcAB23+7crrTNXecPhFlUfw4JWHneMObxUUiq2rEog==');
define('NONCE_SALT',       'wYWoVqYtjHRVdAbkOslZwKj6sN+GYrWnKn0T+mxtdcWzTg4vsCUiDONgYYDNr4K3DNfmFP7ORiL2KV9NnCR2Vw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
