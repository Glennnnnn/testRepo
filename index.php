<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'personalblog' );

/** Database username */
define( 'DB_USER', 'developer01' );

/** Database password */
define( 'DB_PASSWORD', 'dev123456!' );

/** Database hostname */
define( 'DB_HOST', '120.46.202.215' );

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
define( 'AUTH_KEY',         'E$W<nc/K;p$[ Sw>By%_RT]6f()9aqh jRUdhUfWG0<`bv%G xh;cp7L<3=n0Z/e' );
define( 'SECURE_AUTH_KEY',  'X;I>#dBY<Fy/8mv%CaVfOz@mY9*-l{gb^po`C#ykvwP|Ip5R;qrfo_`1kjfbQvPD' );
define( 'LOGGED_IN_KEY',    'i,F[1D9M]3VsekD3[_#R~2!-dUe=C@_4Rgjht<6:$J6]LEbg4-CJ *z3DS35|8mZ' );
define( 'NONCE_KEY',        ':d+h!`cx@e?@REBEX}KCNjKfCIO>KSM4!T_::C`ZxI (R{RXkQeLo_Z!bQhxZ7<C' );
define( 'AUTH_SALT',        '4=TTSc6%X%EX-fU{O-,6on:H(6R4|t6D~!NF]KIPqAS%)H<hk2`r3eT5c<y<ENlk' );
define( 'SECURE_AUTH_SALT', '}nZ`P08&.)^D`S&b5e3-- Vc}t8p5I UX?bsYlQW+<9gtBZ^^l{(qu1M)Wm/?Wz&' );
define( 'LOGGED_IN_SALT',   'Dw#Tv%Fv[sc9GmHJ@Ev`4S1-$5]cENvQ-->LBKu`T$/+KGb#D=W}SVl~CKHeD:f+' );
define( 'NONCE_SALT',       'ttUm8[Fs$$`RU,,2.G;V$~9JSfO<f`C43({~1K Njj7y+]gaPAFm:yKjJj:#./$U' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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