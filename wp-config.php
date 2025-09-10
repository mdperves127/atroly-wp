<?php
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
define( 'DB_NAME', 'wp_atroly' );

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
define( 'AUTH_KEY',         '*[@7d~J>!6hA.xMUOyfF^%vl?.w^)(I?1}l@)+-$e6oArc rP+/,HDb,dGVmC.0C' );
define( 'SECURE_AUTH_KEY',  'sovkl0fRAa].KP?eS-.X,UJ:R}i~/V?QNZn2Rz%bn`.%B5R! Jyz9JT[Fw5`H&8C' );
define( 'LOGGED_IN_KEY',    ']kdiA](m8]I2|Le)x]}/w]5Xc~N 9<SUbkQ=(x(;h1)`Yifk>dkhLe3YP&iNdN,!' );
define( 'NONCE_KEY',        '3,S%1p!uy(lY!vobvq|H&3Q;*! _Q|k=SjSz*dVlMng`^M^kg|,Hvh-^8KDXj=Cd' );
define( 'AUTH_SALT',        'KhtMiO0!.33TQ,NjZ9dRGo+t2AXrj^Cw?4eKh?zy+|CNU0C+DEc7SYX2_T(Z_tIU' );
define( 'SECURE_AUTH_SALT', 'Rtf)l(NoM~]w`}TVJ}6n+st#6|6:K5[!NSFOuf^=(3&u5)9M+0m/p`mg7Q$z$qKm' );
define( 'LOGGED_IN_SALT',   '&rU95[;vQ-hYm1Yv7=0~~RueA@` iKnw]{tjgy8upvlm^fw<cdU;`PSx-uJ3U<y;' );
define( 'NONCE_SALT',       '*{D UTGGSh.;{YwR! [5?ax7i[+A5o){d0#$c_BGOlS*&_Lb{)nCSAR;^lsf1zE:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
