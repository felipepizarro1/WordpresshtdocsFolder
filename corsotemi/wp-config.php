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
define( 'AUTH_KEY',         'gCr !I_4CBWt9[Hd%lUX,C%MD&MzCi#<F{}AzBHCqFP0i-~L7TVj$gA:I?CvU)%M' );
define( 'SECURE_AUTH_KEY',  '/}.t,6 ?D3$JVAbjDI5aH~2+p26_<ag)t~a =<Bo,8r^a&::`,)4{+;ku.gpTN_#' );
define( 'LOGGED_IN_KEY',    't8p!u{tBi!Jn!$cQVr8P;1Et)k8FN/kVA=$,95p8yesU&LWp/V>W|Kb{GVG$B;kl' );
define( 'NONCE_KEY',        ';yo #w@OhPqf?TtW+d/a05/jU&N,%h1|/d1~wJ&S4{U+2ohxhsz{hRQMMLH6$F~G' );
define( 'AUTH_SALT',        'Yq~3($tD1p<-~}v^q4_ip`$xg6y}l78CHF252gUn-;nzF:o-1(sv;ikl,JHsYStX' );
define( 'SECURE_AUTH_SALT', 'L4xo+8?<_|1$Y^VVD_4ZONsnH^W2i8p9Nn(Gh}(bs?t7J%5ao?j?h]bOJ~!j*w%E' );
define( 'LOGGED_IN_SALT',   'i1)`TO(>xMiA@Wk8849G]f5K9v1hYl4ruM@{b@?X_`YQs:_jP0x_8jjd|c?0&mWT' );
define( 'NONCE_SALT',       'nF3zjL%+o+1o&Lb268ayol2~|93oqO~a ?Jg7hpc%=Z0;q86O<7@9A{_n7?()zi_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'crs_';

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
