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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY',         'L?3ZEM,u}I8w>QT!z-BBR*c9jw=^P0VM+0Il-!8q{!* !-c-Ro@pDhe#P<uL)X^y' );
define( 'SECURE_AUTH_KEY',  '=<Vz_1P|h6]xgl#s9Jf701S31i(O.q-_nI!f.~N`+/;vkX4CvXxW+[-j*7yU3-`f' );
define( 'LOGGED_IN_KEY',    'FKK1B3w0^yh3?,_wWSl+k0[#5yT_XX,*6-mlHPpR8T/BoK9ydm?;+$6~1k/rMnR0' );
define( 'NONCE_KEY',        'Xf|aT<L-tz+;I_T=$Q-Z,+auMIg+9FvfJUKW6y5jMqV0l vN$KS2B<,OtMGRL7W+' );
define( 'AUTH_SALT',        '-j#:4|qNsJ0D$sf3GaM|I0izi;/=q9-,)cef$GAmUwP0x5drBMd%3Pc),QX#o4eI' );
define( 'SECURE_AUTH_SALT', '[1 ZQ*r<BkVv|Mt)w4&MJY7Y;)t2h||{u|ebY7$*roKXwlln5}iTbwI! C-a!u6W' );
define( 'LOGGED_IN_SALT',   '?J+jw`wr5p2gN((Lpc{K|kY%[mqlety5=p:+*n*wVh+kx&a9<X2D#|A060-1bR-a' );
define( 'NONCE_SALT',       'b@9>7GE%Qj7n3HC/YcI2U+e1q++&]d?XsM)7t9DOH*mJ42_1)06gOhU#quFN]?+(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mysecureprefix_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
