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
define( 'DB_NAME', 'wpJNK' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`Q`A/L&:b`A@[nj#OczPZN2pd;$d6ZbO6dnVQ8?d :/YC/Y_6GHE2}[vW2-t?R/Z' );
define( 'SECURE_AUTH_KEY',  'AOOY3wlHq,S1U&4+Dr3;LY^6%CWFakG!Q20Qg{Ms[5=P792w?xyl5;CS^Yz.P([.' );
define( 'LOGGED_IN_KEY',    'xXXx2W^*pYr7YU7mAw|G]O!|(0~kfG/l7`8<.OzgcjUvNR:dKVq`Aa+K%1#d%ZLW' );
define( 'NONCE_KEY',        'M5}OZld8wS# j[D3TXm,3zsd-lWa(jr+xQ~T=dE+pX@@9]q9 g&@NhMm2;7F*Y L' );
define( 'AUTH_SALT',        'V(-z/|VEevNEaN+&ono<VAOkn@v6.X{!FGJ2gh&e)O$^E;q_)7_%;.!u;EaPe&1)' );
define( 'SECURE_AUTH_SALT', '0ix;.%wbsmR.8nHB4OU7OyJ#d8; ps*#RYg6fKzF`2xlamk>0)jEo;@w-|RYuZ$v' );
define( 'LOGGED_IN_SALT',   '6^kwJT[(]asiB9])/1n`.vWsx7#kD];?bmFgk,Idf7KfSw4SALm;8BYXv]SOy;~^' );
define( 'NONCE_SALT',       '$cWz[@z.C~ztwnR7s(^{vZa;9u&>DKjG]%-iR g~~i,V&`1>G-~#4Z<yn)1gKd]:' );

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
