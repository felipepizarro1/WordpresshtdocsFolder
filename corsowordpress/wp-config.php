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
define( 'AUTH_KEY',         'z]`u>$r k28xg-a?K}$!X`r}))[qg|l-FufR+QAQd:|Pn%q`TK rjQILN,ZZ#kB4' );
define( 'SECURE_AUTH_KEY',  '~.D&Z5IU+xVhOp&PYt-@1+A33,(K?D*TfBE*3dh-^-ONPJ:%@B[5v*um7!zom)od' );
define( 'LOGGED_IN_KEY',    '6`l}W i%v+!$;Hh(@H]{2XkKe%h+o6qQ<fMTI`{X;K@>f}DWcH$(,uzqs83wD/~<' );
define( 'NONCE_KEY',        'RaiY? %X;|II_@G?O0v<yNS(n/HqH?vfPwe}W_4Zo9QUEzIb4<Kh-Q^KW`@[WRM/' );
define( 'AUTH_SALT',        'J`km,JcJ}09clOt>FxLN@fXb`:t>7O$.+;~^H$Bia}=W]&)~3v0ryAzxQvdLI=h&' );
define( 'SECURE_AUTH_SALT', 'pis9)+2+zuVy%{d)xN3.zX~fq-+y2#KJ#<FrB?N67}+0wb!hoK!X;q;wFd.B4=*1' );
define( 'LOGGED_IN_SALT',   ':R;Evw,Uyz7[{Jo-hz`[FFuS^1Ek`)yVj3/I0h:VIGU%L># ^x%VNy^~Em.>sE?M' );
define( 'NONCE_SALT',       '-(~l3DEb;^5<%dih<{5%6Ih--V}#Rpf1F[]&,|]!|m_%1,veo;~{qc6D1^#WlGBo' );

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
