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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'T8&$Y&OFAr/xz!Q<{@p(ds5b(wYxm,xIb$@.[P3-!&o0/unq{DpD{patq1c9L9?>' );
define( 'SECURE_AUTH_KEY',  'd3T<F*0_066{=KL.OYuVSA6Kk]eiE`.RLq!W/3&v+sVohHtwyj}R,EG4W,@@o$GG' );
define( 'LOGGED_IN_KEY',    'a-::|&oL}HVh,,c$Yqbhkdvw)Il(26QyG1c^tMe!y5s> Baqa(wL_/mTWc)CO702' );
define( 'NONCE_KEY',        '5Fca7z@}X@QR*MlwIS@HH&v]{R)P)VQ,VB&xw^,jj%gQk>wKiAMW3 NntU#2_sbq' );
define( 'AUTH_SALT',        '17imV$Ht!wx2s+?xzgDiif<Yh;N7_NeN8u=mBiK|O:?1s4czF7nt/Iw=;%P v>IH' );
define( 'SECURE_AUTH_SALT', '.LADd|)3V8k-R|Qm~-uX7J3Lh5&_w0/~R-?A9,ZJqq,Jx#|!h[fUMs)QPN9Z4pMN' );
define( 'LOGGED_IN_SALT',   'R%y6a9^zu;6BjY`)i^UyjOO2-yi}W.i%W 65@7E9^J>]t 85tvtus+RtAS{?p#ng' );
define( 'NONCE_SALT',       'w*PM1qQ Ps*qJq4_VyzMTUPx[j#D ?EEKvQ*4Yq]jW]oe.OzAq> UHSy|Jj1!79M' );

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
