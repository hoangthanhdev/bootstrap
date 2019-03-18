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
define( 'DB_NAME', 'ltp-ver2' );

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
define( 'AUTH_KEY',         ')]u {tY8;w|!`k_#{^Wg%7$qc+tm7J`P&Rt}KB&ojG^TT|)-vyCvP<a}77&ZG^nr' );
define( 'SECURE_AUTH_KEY',  '+%8BRWW>]V(K/au!Z@/N}#r,L/V{WodW0Aj3#H~ez+?M>/mFS:z>[u%]C52;];(W' );
define( 'LOGGED_IN_KEY',    'pVXj`OstfK*_jo7Ido<5toDId[*DFvFu}mFv$ %R3:adRodbpOGFAPJ%9w[vpp-+' );
define( 'NONCE_KEY',        '#d:jXYkJ%,8@3}@MHMQ~tgY00^ WHvg)rf b/6(@yY3Xg>F)$AN0U]8zO_Ui}/YX' );
define( 'AUTH_SALT',        '4]%KBP sZeEiN@NBP,Y2qJ=lgJOpT/.0mZDxjZys-,@mn!$b?$G1w~N5oo4XzO>K' );
define( 'SECURE_AUTH_SALT', '3YO>p I)Ez!Ec6v?F&}3=Z]$*%)Ie)3wmKc]U8`w:#4x6XMdH9yHXYLk[dx$~*Fi' );
define( 'LOGGED_IN_SALT',   '|?5_tN,Pa`yWMNkMwDNv]~/t_^zW:wG`DC8AP+q;:B]B1[,?^Ku=4Jdf x]O/B^A' );
define( 'NONCE_SALT',       'k-_jvY5#0@G){ZxH I*k%6A)Va%,TePet ,VMC}sPa08e8f8mM`V-2r^!EjZ*I/<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpltp_';

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
