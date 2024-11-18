<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fpt_data' );

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
define( 'AUTH_KEY',         'ar^Ih)c5vzO)tOu%!|qq/tZxLgoqJ8!$kQ W4y]xgEig<7CgSTou|7xAW{zT=7M:' );
define( 'SECURE_AUTH_KEY',  '5R(kEEZsP4zUAb#PX/m<2UOFNOCnP3nSOKTb$5}N&sZ)pxnzFa7sR+/N#Yz>ETnY' );
define( 'LOGGED_IN_KEY',    'Yc=sAPg*,G`8*cDfmkD@9#O!~@V)wW/5iNE#,Y?Ww;5kYI*SpQm/0hxS68f:Yx!D' );
define( 'NONCE_KEY',        '^AZwmCh),:[k+>}WIAB-Ef8h*KsBohRXZ4YcFn^p%_KDv`kr< e3yL_=i$]ytN h' );
define( 'AUTH_SALT',        '&w1+(q x &hfbDeN$,BvWR4Hnmiv#_3bB3B%0yz@UguKA[FPeI%.{<hFbmP<f;FL' );
define( 'SECURE_AUTH_SALT', '%&ivD>xyNLhPMZ8~fUeU:}N7Sp/9G5$~:7gV)>G7PUO8Sr:a6Vewj*T<^Jvlm%y/' );
define( 'LOGGED_IN_SALT',   '>lkj4wD>A^Ic{+25kzSq;R&[f9U%lPA+RP2.=& J#_07dl;i}x!@I.X76jDfa2&(' );
define( 'NONCE_SALT',       '@mFCdw+bdC?^y]`~vw^6]#~9a8O,aPt(/R*vh1qU.-_e%2F%Gs&79e-p`.uJ.H+L' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
