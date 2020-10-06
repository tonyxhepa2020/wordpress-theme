<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HFd@Wtls}yg>*TQ*L`)7DZ @B?l}&h$gei)LCj)z0p<qpItq~raz7~(gG<[g1tOE' );
define( 'SECURE_AUTH_KEY',  'fSsj#_81B]68[p5{9cV9m)14g54YXUn8mHG!vB#}avI(__JLA+>/c5D;~yqE7L1o' );
define( 'LOGGED_IN_KEY',    'B*0yB>^8)8QT/n^l..2/$4-M..hLY&^t%__ n(DqDF,=NK;#E=hmNmzg>H~^bkb3' );
define( 'NONCE_KEY',        ' OTM6J3dU*?cN:OSM=}p.q2dTUY)?W4W]KG#9rX9ogGCs@J}EO776>ps^t^SNZ6I' );
define( 'AUTH_SALT',        '4:lXlACDODP-MF6m6yv^hRd2C*Nq2{]jD|%D55Jh6@Y.+y#Oyb54#hZ*7c*ySl 3' );
define( 'SECURE_AUTH_SALT', 'YC~Oym rloYiyC_rfKu^aQS|*%(^ _SsB#!7frjKB/njQ5l_#Ir>:CF(SBRn^Nno' );
define( 'LOGGED_IN_SALT',   '-LL,3d7$i_hNoa V}kb4|Nkcvx|5MHY<V4UhB4]7As-$5Ok/?]^(jVoQ{h{%gVq+' );
define( 'NONCE_SALT',       '<@EX6(vsXI)xdupWO4b:hn/<dv5P<T1/mzQx;6Fq!^|,CoFU_kPgs?%>,Jo)T^iw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
