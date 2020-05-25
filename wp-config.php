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
define( 'DB_NAME', 'masa_db' );

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
define( 'AUTH_KEY',         'B*9fx[Xe]*?jHD~-9.M;T@.qBTjb)Cwz=rp?%6)oDhBXA5 xk(`HTb99lm&8/0i.' );
define( 'SECURE_AUTH_KEY',  '#CkWJoHrE1!vv3{a$U3&-O~i |s7p=[<<Jdiao||]xtO+ove=|xi3n}4Me<[EA~<' );
define( 'LOGGED_IN_KEY',    '[STgCeOzRi2 Rn&WBt1l`7D@fM(p*fQ!n,6F:FgF?/S=Gpy{^$1;P$R)Ts<q.%{M' );
define( 'NONCE_KEY',        'X;VIh<&E4etH(,JHi19OmZ%,#QCmhlf*AO,?Q*W95qyZE#RE;,4ayg?<}gRl@[*y' );
define( 'AUTH_SALT',        'KnipCn~RI(41Si+WabZC##FAU:m(*;;]L]*K}qE7s8S_tJC`@8??[;~yKg+!WjpN' );
define( 'SECURE_AUTH_SALT', 'KqlF3l(P(AeoMqQY:7}p^%Bz4,YD{l}HNesp(4J%I[w| FEl1;~9&)j|0$GSky}_' );
define( 'LOGGED_IN_SALT',   'T-D@fESu.{-D.|_Xgnlcc[GC{gI0J,QJ3N*U0Q6yH%!pr G+}pURcvsY2vODnSzY' );
define( 'NONCE_SALT',       'K#9!clrIc*G7uf|,]rt).Rp{Tl!,04u#$u)9UWwN&RGIuovY/x x/%W7A}@az.(b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_masa';

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
