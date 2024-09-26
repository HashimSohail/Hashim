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
define( 'DB_NAME', 'gamer' );

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
define( 'AUTH_KEY',         '+y/L5M,Jei:YA+sv!OIo~*:|Mp2t43&|_4S8QZyu_OD%]fi.xiy.*e/t7?T3q;0a' );
define( 'SECURE_AUTH_KEY',  'e-@}[a_<=Ld-FO728!pqfLY`!?l5F~Me5Bu~g=b>%61q(k<VAUbb^}FLWnQ(t`J4' );
define( 'LOGGED_IN_KEY',    '*aIx 2W9?W&Ec{n//q]HoF;#*1xIXm5<l:(8^^-m)sbvCC:K!&A<U<5a[CX)!U[-' );
define( 'NONCE_KEY',        'RN8En/XusTCaH@T1]u%L]*]VrQ]I M)eixf(i!XSI74KNi9r!~nwu{%*s`$i:f12' );
define( 'AUTH_SALT',        '*Wv0N(Y|^,2..S}pKiRa}ds{yI.zs3ooqXB0:gztSOVQ-Flxh1.Ga&Th&y3ZSt)<' );
define( 'SECURE_AUTH_SALT', '(N-Tg[S6ci#HFhS{fIq,G$yd--9p& st7=Ya+cv0?:)N9.YPPq+=A=E<Nz[6>vlW' );
define( 'LOGGED_IN_SALT',   'U!}BY$y)I5DIfsPZ]/r5`jsK)*q.2SBa{)sJGumypOM`:cE}q,NoC`(2[jofX0@u' );
define( 'NONCE_SALT',       ')/i+a}Yc=*}_y,)Lkj* aRYtiFJN3ty<3^_,U3%9QtGLbQtVb8S+=Q%cgs;uwV.@' );

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
