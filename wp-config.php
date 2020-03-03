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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_rawsynergy' );

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
define( 'AUTH_KEY',         '&_LLl1r-w>CcBcc:m[Co=Fga6>=*Df~nxR}G:y{@:l$q/f96, F7+!iatGzr#6H#' );
define( 'SECURE_AUTH_KEY',  '`!N37FjGcR]if?0M}89Co61-cnXj.zanL}wy}<Uc25N.C]hiDL`rC{^F&@xQFd`R' );
define( 'LOGGED_IN_KEY',    'iRCk!`]$,D<56lJx26:owo$)5@aZHG>~xe.8gK9hJ_i[,,GjVP`te9;k^*>R|*9s' );
define( 'NONCE_KEY',        '{4TX.sf^VH#9CAZm(_xR{(6l<Se[m=5H!$T[dT7d-IugNyL7B48SbV/Q%6`nzy~s' );
define( 'AUTH_SALT',        'wB9|1t};*=Hh!LgtrFmYLqIdWSC],LX*Qty63{wgP9Y]GR,2OH]v!hWpBt?7P|~S' );
define( 'SECURE_AUTH_SALT', 'zaTE|0a=N7Gs9Z-]lF|Elo%.AJ+gqd(U0X@3G-+$-dPEi2&ir~K_2{K/*,&>}6/G' );
define( 'LOGGED_IN_SALT',   'GK|l3mQhgYm1-xjy4.mHKnJ2ni%wx!g%w4of,4$#Z:0X!wH)3{{WhXOXDJDBE5A6' );
define( 'NONCE_SALT',       'Vn1|dMoT$JTB@ hLW5}JA]pXIsyEhQWD&D&N{.!-i+t9{G?TV3M]$O%nWzTY[,#X' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
