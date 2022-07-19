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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'corsotemiavanzato' );

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
define( 'AUTH_KEY',         '!{@>i@q4z;d^;sGR:eGBxEr_|/.JRt_CrBKb[KJ2HwucP}BV0or}q;p;HI@v7s<p' );
define( 'SECURE_AUTH_KEY',  '26cx.lj3a-)w!?N u1N|XO#H0_qu|6BZ=*Biu}Mp!bNS-2,?$08,MNedav|twllo' );
define( 'LOGGED_IN_KEY',    'OM7T%o<+~.nBM+1R1a=V=ll2Q7Iv_/s=78WM0EX:X .`~P=$cGMCd2hV|e#.r4os' );
define( 'NONCE_KEY',        '7o B- yOis[F5Z}5t38c/&x>%cg~>v9/pp= z@(Nk9t];g}o7S?BO=u3BuiIBh[.' );
define( 'AUTH_SALT',        'yks;7X_@I;@yiscEb!-2,}5X$=poM#iq%}!m1#U/sMVSUY+(BMHh2#y?UE`L/=yy' );
define( 'SECURE_AUTH_SALT', '?$n;TdH+FbNa{:_pk,u/JDjsER%{wwCNvDL]StIyK|g{U](&]bktP;8S@q1N@*sv' );
define( 'LOGGED_IN_SALT',   '+$Fa~3}7.:&F[^;|X2b[QL$rAmC%A#TwiD+B)3?KaYp{qh;[HV@SHb*)Zp*Tr8wx' );
define( 'NONCE_SALT',       'p:U|{tYWS&Ne&lzEC=/8PA kPcqW6{}<H?iq#PMsI>iEi&m)DC-`~ilB a>;}J?t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fpc_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
