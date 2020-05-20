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
define( 'DB_NAME', 'soccergear' );

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
define( 'AUTH_KEY',         '!AwMWSU7z&g}C(f47i<>6/nnq,e6xy>hk3|ElG{irWg7<*4 :W<ct>>gX_B$d?F7' );
define( 'SECURE_AUTH_KEY',  'd$RnItzI$S*P:@n$XyyetzZL?lW2AGS&Sm:)ySx%yX#MW%7I-0zc^5YFMJHxwciH' );
define( 'LOGGED_IN_KEY',    '&tMJ%N=S)vn6RE(4Qg>)p %G#7:7`JKgg-PLc-hrI-~d^m|~xk4owTN{zB!r/dj-' );
define( 'NONCE_KEY',        'Y3;(np4Etu;M [6r8e=$$qJ+&.ZPp&9*,02J-P+T(6:O?v=a-)])c>dTK!YOm%$O' );
define( 'AUTH_SALT',        'JXwK`g>tvP9`1C%CF~)?E:mremDJJ>enMmQU@3smm0Mivp0abPZVpvS9,4C}8MXF' );
define( 'SECURE_AUTH_SALT', 'MmS%e8o@]V[E7Uwg{S~NN^Z%G(W-[EebpWW55~ 3,V=SPG7*8z2#X2L?_zp0AA1L' );
define( 'LOGGED_IN_SALT',   '9~oYo2lJo:+0Z$Fy[4oX0Ub-jJO Dm~l>O<F@fKFX9&LbU:SFES5W<cWi%du:x1f' );
define( 'NONCE_SALT',       'L]dn,WO/lMDD-Rx%>hWPAZY`rCW#3.(DE0H_jLfflV-M|LBM*NJ!,8_}O.[CQLZ7' );

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
