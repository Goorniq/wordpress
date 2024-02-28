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
define( 'DB_NAME', 'trybikdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '_I<zo064h(!8w+=cJ2+{{5Kc^Q*EIW`d~!D`-,EDKi/8E%q]!4lg9#?+duAqV6iF' );
define( 'SECURE_AUTH_KEY',  'E&Xbn(60z={=OPW/my} {_K[f`(32}d}i(N71M[>W!R@.W)kgV3 /3.lYWV`P&^l' );
define( 'LOGGED_IN_KEY',    't>I2ALHKKy_mpNe&P>;u=[3/uSC12G09>T>4Cz,9x3<t^W2yrqbHWWJ=b.= I]gQ' );
define( 'NONCE_KEY',        'i204tPdtDzGz(W3hZJ}tAfT p*G5W :Sz(nYGP|L<L|6ohd8tuq}b?Tf,[Lysd3x' );
define( 'AUTH_SALT',        '~V]}=|M|%_{;>I[MwEsRJ}m<b8tq(#qipzQD%`2:1Os:@#ulDU+_<.DXtluI.0& ' );
define( 'SECURE_AUTH_SALT', '{[th&z=$A&Jk<fQ7aHpoxZFt#oy^Vi`e,4l$doL~PLLdmA5yX|a}D<SoSiZ.|s>,' );
define( 'LOGGED_IN_SALT',   '_,EN9}7$GW>H]*Fb4Mp2=jqu>5aF9@5BQ23~w%cg!Y9v=A&o$TSk!0-#XbZsh&MJ' );
define( 'NONCE_SALT',       'fg^6w5bUxE-Z]32<>c(T02H2A#/3#_CZkGL*F{=yiNLE(>@4!HFb(@pG.H7+ojH=' );

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
