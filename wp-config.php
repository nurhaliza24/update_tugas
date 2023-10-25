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
define( 'DB_NAME', 'wp_admins' );

/** Database username */
define( 'DB_USER', 'wp_admins' );

/** Database password */
define( 'DB_PASSWORD', 'wp_admin@2023' );

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
define( 'AUTH_KEY',         'h1,@@hnHvmtX8=m-q<6.Q;PP#6h/l?VWEx!y{viqIKKDd:O{3N^oZwZ_|-Wd<W<j' );
define( 'SECURE_AUTH_KEY',  '/!G^VuS#p6bEqzw;[]*#hCNR`O/AwKAudC);NvJu:(0KGvCwgJO>v=-B5rM?5B?Q' );
define( 'LOGGED_IN_KEY',    'gdqHtOHlF?L~G+px]}uQZt0`#^q6JtpQKHTJi*h3Zz.Ur:D;G(z`^`rjKml=vksj' );
define( 'NONCE_KEY',        'Q&qtW80(}j9DI_>2_Z`xs&qnSrphKRnufXtl&B;(:_+@&I!HHz0&CzkMxU]T@;nR' );
define( 'AUTH_SALT',        'rPngdu<qU[959=><8Il^aZxT_A#-8H;WkGb1A(dxau#bE7p~$/V f.bLS8@VWQDS' );
define( 'SECURE_AUTH_SALT', 'NR&aG;_nl/g5 U46Jlvvvlo#H(BY=hCmW)kh`)|tff9?3Inv%?:f6gBdwwy(uzJ;' );
define( 'LOGGED_IN_SALT',   'ayStvuf!xx(Fod x150n+|OhL3ku7zT%n+_VX{Zujy~D&*@M^Pj:4DtcAqADg4kF' );
define( 'NONCE_SALT',       '@B_T{0pnOb&mu!,xo&SXX*9wHf(rAo6XXNQ#@){t NyjI9$LknC&B/$tTe1q}JZZ' );

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
