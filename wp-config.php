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
define( 'DB_NAME', 'wordpress_myshop' );

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
define( 'AUTH_KEY',         '8UkH6@#MPj_PadZ)(I$OlO cqKdSxW?U:o Ao9!.kO15_ BxGz,RfY% Znwby+M;' );
define( 'SECURE_AUTH_KEY',  '}Z_XbyA+T~;~in,.S_~u%EaB8AAl<*~-{[<`5n[Zq{98!&4YKGW (<fC?2%W)Raj' );
define( 'LOGGED_IN_KEY',    'FA?*}4`7K{u{oB#D|{uL.iQ%/G]4aCkD2FBH=:U0eRc|yT U$2S4c$1b$Bm+ZQYF' );
define( 'NONCE_KEY',        'Pa4@v.38z7h+C {Li|`4wF#l?.J<Zr+ .:FL~/?,G!&!)bc;Kk^Ft;W]VSxZ_0;b' );
define( 'AUTH_SALT',        '61_SF(#?@loFIKqRQp;F[d0&dLq~3sZpA%]FW>n^R,vMUClE.k)U.`40%{b/Jpsn' );
define( 'SECURE_AUTH_SALT', '1bf4G;=3]df3r~YOJGSGPhOXA NUai`7+qQTue` 7&z:#o/E~2GR?_?o6#4O)zyO' );
define( 'LOGGED_IN_SALT',   'O`+!z2rMh%Whd)SI?cDs[~qr_RVDDF63krPsl;R7nu0!%0kUos8&Q%|:pWM:GOn1' );
define( 'NONCE_SALT',       'WG39)l1,;srmPDmVwCt7gPQ2?gM8yU#2zn8$z [lMku<,tHMD:0r[gHEirqz~VfE' );

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
