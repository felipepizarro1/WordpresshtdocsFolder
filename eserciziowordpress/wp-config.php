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
define( 'DB_NAME', 'corsowordpress' );

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
define( 'AUTH_KEY',         '(v@yn4Fdi6}>)i[6(%8ooUD4tT-X2MXAW/bs-d?p:+gnK_+M@p|A@&$VXq=l&u-1' );
define( 'SECURE_AUTH_KEY',  'ZmYy<c{m4plG80{2tTJ=lC+h7k2I:>C4ng62MSI :{-4((4pa9U,xV]e+.:Xqn>C' );
define( 'LOGGED_IN_KEY',    '1sZ]B!3~g,-5 mXW41@-T}}8[tfc+)t{U*);ClWG>R}8r=1Id [-`]sE3rZ#23[`' );
define( 'NONCE_KEY',        'yQ{WTcxrI0m656&dVN:D 9w%s&SB5^YLPlS^OX z;[BUwj007.BV6FX)~dTB&GpT' );
define( 'AUTH_SALT',        '-!^CkyK[sbPR0Z x+;jQLfz/2^/W[+u~AoXe@nZ55N.fS(F}x0O{s&XGa{#hNW`<' );
define( 'SECURE_AUTH_SALT', 'Vy*3IjQCNxO.MH7c^&=Yfum1FEu~eTRv[|&FzC%~UBedOk2+k31:6} LTtlqhh/z' );
define( 'LOGGED_IN_SALT',   '4Ix`/9LNP%)&ktzPkz(yAGfQ!pA;OY*^}_fJ<e`^[#h)hNlF@V%j<=>*nn,vlh.A' );
define( 'NONCE_SALT',       'V3C0|[v$<J[_rE31J<x8X3eu+]|#%WQtcAz^yutgkI>.6Xlpl4X^z7ll*f_rz>VB' );

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
