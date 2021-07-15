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
define( 'DB_NAME', 'jm' );

/** MySQL database username */
define( 'DB_USER', 'vesko' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jm123' );

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
define( 'AUTH_KEY',         'M$GNeYQO`c/NxxsAZ|,,shhUXeemKur2Ro:lcg$/93UWQ_0V>CcZE_!h.Q18&DeS' );
define( 'SECURE_AUTH_KEY',  'YcW7ewQC>fxz-_Fu}]@ERl_|9y@f*``vKxz7<=X1G;eJ+pXd4$o{Y3| &],nMRAQ' );
define( 'LOGGED_IN_KEY',    'EZUm){H6Gd8 B}bg(tL CZL7w^,Ztw>$Z1@SjrHTzKmRLYAR}u69 ()>4ee{Jwl2' );
define( 'NONCE_KEY',        'pa}CZy0l,``mG^YsvMk`jD}yUv5n1>M6+Bt}s7(zcn)66?@GwE3r~Tmup&npF6H ' );
define( 'AUTH_SALT',        '{SO&}~?x?R]dPAv31!gQ65pDNXpYz8yhaq<=uFoB9 z-jlMvv(MrfB/2eEqi[+lW' );
define( 'SECURE_AUTH_SALT', 'Ni&qTo}S4HX,3j7f3#GS@xfH.y!NT7[mHIm85V&w0oTiHX)6y}WXk3RyXddmJ^A<' );
define( 'LOGGED_IN_SALT',   'cs-9k+w?ZFbQJU)wWF9*AI_W;cOxq4gmwq&BXr`O=<X/b>;XW]NG&}zgpawc!Xe_' );
define( 'NONCE_SALT',       'IX Hx1pLWd0b8t&Xyy%W1aYioB,J:#lw2gYQk/jPajt0hFh[~C]xYo}RbsYzN k,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
