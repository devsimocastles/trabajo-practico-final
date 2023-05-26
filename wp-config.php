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
define( 'DB_NAME', 'wp_trabajo_practico_final' );

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
define( 'AUTH_KEY',         'qkzAyvwaF;LZOC?+u@P>!G4?}o7)fJj(yU@HmPr&Agmc,i$-&?%IXRG!u |`aYvr' );
define( 'SECURE_AUTH_KEY',  '$b?j~Pe{asc|>a`H4LJCQ0$@{VB vNxjZ<n:Bj6fTl<TA21L7Z3GL$m{,jRdw?!,' );
define( 'LOGGED_IN_KEY',    'z:39Nh.b92)7!qOYW}t!YS8BJ8M6:mFYM|9*{j4)X7EkQaqV~&&?z}6{A!CmQTB2' );
define( 'NONCE_KEY',        'lv~jn.p,K%/ft5WGxv}<>>8;A{cLX57z0/JB~jr{pCmvwSR:Wv3q`ts6U(GB9QE!' );
define( 'AUTH_SALT',        'JKx#vFLIT/KL};xf(6]I`J#YIbx)8 ,vMx>s#aE10/+NS&V&.I|=c9PT7P19N|&3' );
define( 'SECURE_AUTH_SALT', 'u+%jDNrBX9%;YC7.}7U=f}!E_*(1S~:O|3M}L,6jW.;!hT]/C-&8u+n5y^S_~adb' );
define( 'LOGGED_IN_SALT',   'LZ?%hwD-gxZ.1Aq]k&Ekg.dpWw82h%t#X_2jHO|+lrpl-M_<5-x<cb+2t!Z]{u?n' );
define( 'NONCE_SALT',       '8XB{iL$z@>=$~[],BBm>LssA0(Z(1FdCwuP?v;*(xyPAAsED]_IZkkd/qwiqG%1(' );

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
