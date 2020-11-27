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
define( 'DB_NAME', 'ql_odien' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '<&bkBjq,tr?tQ)|y3LV;S4sh[lxwEx4=WM*>vi,2#AR0@e!IZnaE$ff,opQ&*USC' );
define( 'SECURE_AUTH_KEY',  'hG62VDj$ayyG>V}$n{T~]tOTQB&dl>i]A7!`RO?-N$OdZJU1bkrx@ZM.l[R5gZMq' );
define( 'LOGGED_IN_KEY',    'FLIYKSmu)Naln2y5a(Zzv5{x!EMUthX)Xj5E9.jod(Rb2k;8`BoB]j;v7fGl:=aL' );
define( 'NONCE_KEY',        'R0o:(aOwVL`O>-(tyLQ9Yi<:*;^q.%_u=p;!Z=C2Ka9X]xgIy~BXO<Ju>C([2KBY' );
define( 'AUTH_SALT',        't}&8]Wi+k-lJ1>bN-L9||MwR|1_GcwF]<=9o3(pR@Fli?PxH4Un%>dL3=cLA*-hA' );
define( 'SECURE_AUTH_SALT', 'pk#8}(^|3lgqfu%R8 Y0p{Yr1Y}qI;mK?0y:843F!OGo7KZ<MaL(W%g+k4x:ps^q' );
define( 'LOGGED_IN_SALT',   'j#1k7K>5*pBOkUv|s>51zN wP^?>W_v$+8u%~uE}E]T=TZ%pdIv~J>u>YOeN^V.R' );
define( 'NONCE_SALT',       'oeCcS)8>bgV@I5kIY[{,dc 0I6nMMT3/LEVUdZ:RPw(`]dY+-h0Y99uL>p0MxTlA' );

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
