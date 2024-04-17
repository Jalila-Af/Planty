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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'xxL/Q|NnrZZdVA=M&VSsiTKUQ)|aTQ>7L?Rl4ezfoPdvSZQhpxakTE!`^$H+r`9@' );
define( 'SECURE_AUTH_KEY',   'WSv!GWO:-TE+[kbY04+P-0_]rO`AAU>A;:9e)^Vn~Rh)3We}dibdvgCBM}C>^^K=' );
define( 'LOGGED_IN_KEY',     '2apsSJ_^v0o9VJ2WQ[`/D/BzN}Uv6|}!Bpj4V-8r;Sa,f7:q0H>* vc]ecFZwLc ' );
define( 'NONCE_KEY',         '6]TmTCP^B XH`Fs<^ (bG+x*;n>D,s_2jjD)Ig9n +HK5EV(@3K,A3~!9)v#U4~D' );
define( 'AUTH_SALT',         'air}{D{$|;FG>TM*605Q{{GT9o/*PwY $]{uv&jUOBxUQ{S]>ev4d@JJ~q$d.*0/' );
define( 'SECURE_AUTH_SALT',  '{tJ8YLg~uY(87{5#i@H~2&SWG]x84m}A.^@m!=*NRs^k*R0x|{p,|ksHY01!79`I' );
define( 'LOGGED_IN_SALT',    'Z>t>YJ*(vyU2nT:diYVZx!,Mx?F|hq kWzJ{A[UD/`jR78b}gJJ1M]ny{8evq^op' );
define( 'NONCE_SALT',        '$awO{3s.}z[-x/HM}rT==I+6QAqDO@5VQ,WMQ&T*EgzGU%(tvD}dwJKi5=Gz7js ' );
define( 'WP_CACHE_KEY_SALT', 'W(6j<Ey(Y^efaIduobCZv2TqLFp]3x_&B`sGR2|?D!THQkI4jK#q==ji+(||Vr?J' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
