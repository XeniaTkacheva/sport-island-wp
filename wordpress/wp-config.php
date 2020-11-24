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
//define( 'DB_NAME', 'sport_island_db' );
define( 'DB_NAME', 'u0939766_sport_island_db' );

/** MySQL database username */
//define( 'DB_USER', 'root' );
define( 'DB_USER', 'u0939766_oksana' );

/** MySQL database password */
//define( 'DB_PASSWORD', 'root' );
define( 'DB_PASSWORD', 'Ox18981898' );

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
define( 'AUTH_KEY',         '^ud.z_@*vj8eh7k]:M#qmt.5^@RD?%6&;3K/AtwCW:.ns,*_A5y,IHBTcx#3{Bsx' );
define( 'SECURE_AUTH_KEY',  'N]#D|Ne:mgGR~.)_LFi}c^w*2`Tlr1vizrt4I1( 3`v%Pl;{S<A?Phso/N693x 1' );
define( 'LOGGED_IN_KEY',    ';Fo#mOZ{:q~{%C( oZ:gY`=.oWU%/*+fhfYix#+P?qD|.5CNYlU>#F3g-G`w $aC' );
define( 'NONCE_KEY',        '50${[Zr}O-vEDja@{cXYM<r/dw3W(=ss(w,u225L/Q0oS?q^Z0zvCi8 I!mImK;8' );
define( 'AUTH_SALT',        '~ QEvAv<skGeNYfP$SqwX3Su9VtTax(1YeOi/Y(G;l7iT@rAJ %cHr-s;`Wrp5Ym' );
define( 'SECURE_AUTH_SALT', '2`PGvQT}Z_l4W-Agw`J@{;}KH:xea.cwdt>sM) 9:+X+9*1mLW1jc)h8UnH_cg#0' );
define( 'LOGGED_IN_SALT',   '1WFhmek@BW9cDE`k_umX4i/g7N`- ni$y*&Z3g!M(s*C&7@0P@:Ht M.cSRfK-rx' );
define( 'NONCE_SALT',       ':_*f3;^:xzZW^RyXs_#^O_|EN}d@$et;EBKgHBv)wlg=:1s4T;f`G;.t8T|lkl0[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'si_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
