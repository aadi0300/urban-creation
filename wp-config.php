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
define( 'DB_NAME', 'TheUrbanCreation' );

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
define( 'AUTH_KEY',         'C5C;jrI6+YphlYHC~DqSp<ARakJ#>V#(q92tsG!&)%~_X{~Uwu-bFCW}vt_QAd@l' );
define( 'SECURE_AUTH_KEY',  '!6A@Rxdu>n`I>:h#Nt#S#:jd0d/rGa#.(4K<mL5G8Pn@88F%iXN=TX)m*TevA_Bo' );
define( 'LOGGED_IN_KEY',    'dP.ysE;#7FD`et75BvH~KW&chaSq(@Ze!t,O}TM-T/h</<*>{DcoqCgK.E7vyFC2' );
define( 'NONCE_KEY',        'yTemM14eUF71cbr@IJNnY9z}>!},,%cpfF,m.4E#t)QtXK p4w-oUG5k0ZLSp$}j' );
define( 'AUTH_SALT',        'd]51c0XHRYf90DT@O/*TE_L8oPECrL0@LdrV(y{jl,ne8N01S`BqFx&bm<aV[Dn+' );
define( 'SECURE_AUTH_SALT', 'HX7CSxu_Jw=^~P0&0Z0=nj)Q,XK@h1JqfWkhP!I-@U)@8G4,`t[,!/uAB]5^l4  ' );
define( 'LOGGED_IN_SALT',   'IVw5&2&-@^)OB,&bQx(D!//}N$3L~As2-r+-|-V:3@q& fICmIuEC4Y@P!99rn}*' );
define( 'NONCE_SALT',       '?}i,D!zAUWnJ7?`XJc<DUjkvK3PeN~2KU|/-[`Jo9<YpqmJ]V Z%xWi&0wp~Uhb7' );

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
