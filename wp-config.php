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
define( 'DB_NAME', 'wpsimplesite' );

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
define( 'AUTH_KEY',         '>J=.iy5M#lvF9tWF?<!n3HBIa>9wd!Hujq[,L0W0QXOJh?jIaT FUg(!A0fAQ>.>' );
define( 'SECURE_AUTH_KEY',  ' _Ovop@)2waah4<QprmK%KByG-lgCRH4Ai?.S:t*rM8q+7d,]/NniJD<QG=oJy`T' );
define( 'LOGGED_IN_KEY',    'C#XfV&j08Ai+b%4a,v>7YC!b[3v-s<oWwi&y1p(V?X+>f2DgwL)q1_ihW(d.)uLa' );
define( 'NONCE_KEY',        'xLf:%*R%Un/bG;#)1bqU;r2T],G,1ikf^*-nSJVAMfbC)lFzrR`l%J3WU!BIoR_}' );
define( 'AUTH_SALT',        '5{>C^pBK>x@3_Or/2r%cF4!<|g`tzUf8Q4Lh,Uqv&HY+G`G).OvnyC:xDes0v):o' );
define( 'SECURE_AUTH_SALT', '/B@E`iJeq(+:^fR:NVqK2{dFY9fS3P>{08SG0R(3%$N0hg5KGYwcc><PB4+H3+lo' );
define( 'LOGGED_IN_SALT',   'Vw:ENfL.l[ZZu)nBpNsdj)@m+,KWtd*J52]*GAIwnimBB4E7a%H{ECi<<&y#g3v?' );
define( 'NONCE_SALT',       '28GZhDm]C^pq=8#|oC |-W!7lC692~CQ3|:,z9K:(*h:01Ko3v-%atry$i}34bU7' );

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
