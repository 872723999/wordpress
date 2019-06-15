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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Z7*~cI LLx8(c%18_c}_7=&0OJmAvgrX8Rcu9V]GB,HyIBI$>#[&y53.>tv~*uDM' );
define( 'SECURE_AUTH_KEY',  'JQs{4x}kYauX[ymhxJ:L3!jZckHG!;[u/gonn,#6>BS}J]4[,h@_AScYl}_8m0Sb' );
define( 'LOGGED_IN_KEY',    'U!?Q=rYHHJ)xUJH^4OpKwglSG#MqV%S`gI3rDGktBiO538g 9P34^dS)>#Samjry' );
define( 'NONCE_KEY',        '3C|&FS5[H{$i8{R`M&9UV@ PUjHf4^#!;ChG[_Hfjo`DC(?uf}8CHgZ3+eRkQ,zv' );
define( 'AUTH_SALT',        'vu|pdy|$sS&Y&qalH?R5{YDRy&VH{!u8t<N6s}hn{j_T}=Pm[3o7+ KINKEwn-@W' );
define( 'SECURE_AUTH_SALT', '[<g!#J4?YX~psZ/Mg&;a27w?NX<RXEaX<D;}.+:cCZo2HUxv jTB<xRf8q?:9xq3' );
define( 'LOGGED_IN_SALT',   'Pf<!`w`uGT}pML??J7U.@4(D?ev:sGQfYHYlO}l)4EJ>3}~2:GrSckp0+v$uuY5z' );
define( 'NONCE_SALT',       '4g_8=C8{`as]_q;hQ|3mWF-f_ed61((iZP4NAHWfgdU&S4j^p]dS7{Y~?je*99A[' );

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
