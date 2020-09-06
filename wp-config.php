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
define( 'DB_NAME', 'alisonnet_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'w%}=1M89!XK~l=B-%&%E^<u,#h<TvF6txToj2YwH^#&E0=jes|RNL`!>7@jAr1LZ' );
define( 'SECURE_AUTH_KEY',  'PYoCzX].BI8L&B63]O30tsS @9i+N}jVlu)0+S:`Jm{Zep:Le;r,`s-xEwG7)4dZ' );
define( 'LOGGED_IN_KEY',    'i2- a/4oRKT]P[.0mMi )GZVe(q/E2n0AqxYK0Q@12!_+Ryax(mNVgo453s1beuT' );
define( 'NONCE_KEY',        ')i@ 0G+M4hEg#1/QZ*u%AZ~L*L1$VU`yj)E0po}}&7YfJ=uv^vvJlLmY#r#zxg#N' );
define( 'AUTH_SALT',        'g!#E=+41J.w=0 I3kwmHXih`-o~uL:0VU<|{quVtbvVO;+TBw [/Y:pkEsERNN&r' );
define( 'SECURE_AUTH_SALT', 'T r_ghQOvAdVK#_(`-hz0wy4KZ.urZgjGD_bP-<{.8nL?aQYKc?~6ABLo!Gm O}d' );
define( 'LOGGED_IN_SALT',   ')Te IKNDw?E#D+/ag^}<OiOe.d1]fkv/4=1zEZ)*aZOV2/&WM}(KSxlS6`,5d1qs' );
define( 'NONCE_SALT',       '+zG*ye`u_b3f>rkOn-rcc(Fa?;16q}))Ad0yOzB^Agm$w)iP3=fhxWSAPZY >97F' );

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
