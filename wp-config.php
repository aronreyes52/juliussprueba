<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '~Fy4r>[KUq3B6Jh6WV?Bla0Z!|D:A !G-vMXUY7b{I^&[?)@{rSkuGYWZ[Rssj]+' );
define( 'SECURE_AUTH_KEY',  '1!GlQZ5wpWAlU5q:]Cn8X&_Bq.{x%.HSoj%&QoX25KvzgCQJcD%f7xY|;lu@=^3s' );
define( 'LOGGED_IN_KEY',    'k5^8 ndb- )L1;tux5+(JloU3]+r4k]#}- .(V**8s u1skGF=x;SThxm%;L#QS*' );
define( 'NONCE_KEY',        'O[[`jPl.5k.u-$~1 yBx^,IXSNe34w-*jExMcVoC1es@[Z[(*l~9gUqEoIft`.4}' );
define( 'AUTH_SALT',        ';qPc|?}BlU2c?]riJ[Ob}(b9-YBG8H0tB:H]!@4e9Ysc$LVTMl?IhpLV[SLsq|;x' );
define( 'SECURE_AUTH_SALT', 'TaGD]}$+qusTaVU+t/,PY!r&p1Q7r9y+S{Vy8Vy66dm+w tWrtCRMEQU<4QVRB9h' );
define( 'LOGGED_IN_SALT',   '3bl+gRZ;6d&$E<6X,t_e[9,@,Yus#2I_W:}Oj[*9z8 sa%fEW*#lD-Yk%|-aH8[b' );
define( 'NONCE_SALT',       '2H|eKXrwN0wk4D2L}AG%:>/J:):QGX4G=5yRSV9UpUhyv#I?|`%Yunb3;P-7)+;#' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
