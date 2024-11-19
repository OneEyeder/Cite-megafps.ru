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
define( 'DB_NAME', 'megafps_bd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'mysql-8.2' );

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
define( 'AUTH_KEY',         '=UX@q2#b_p^ +sS|C<a{h7[c32[_uv/R8trHRt*aAw;aqVA$bMw!rlU]}&B0b *,' );
define( 'SECURE_AUTH_KEY',  '}U~QY6cBq 6WHSs^=nQF!&7{Tys;3WL%YWa8%.d!D@^<|3Y5u#E QMz>+L^kG>yo' );
define( 'LOGGED_IN_KEY',    '{K:;qO,m!BdmWN5}-as7l|?Z5 jVKnrUMQYe;%oa+(e4fH]wWo,/*^@b]k0fwP%[' );
define( 'NONCE_KEY',        '`n6@?~`]J-GvOxr*+J&xEhFsCw_-oihb|+rDhqMGM%wghYL<rj]dZ(KC,UeN)FZ!' );
define( 'AUTH_SALT',        'Z{&Qkphs5]<RfBsz|FeOQv|{o,=~na[Ug[#RB^~gn$5w!B)KN}fjv]pPW-^,]n;d' );
define( 'SECURE_AUTH_SALT', 'nXxQ)?[Rp<o8Y^UJNs)(l2Uk_AYhtga9U# [r~MS]Y0/0mUG^?/6 N4nY^ >Wngr' );
define( 'LOGGED_IN_SALT',   '%>I-YQBa63BVxrCOK|nL6nmgUdc#?YU0[_V%eA^{RG;m%}j]PId|5#$r950G:GPq' );
define( 'NONCE_SALT',       'MgY5MPeF~B@WH^o[g6koN}cDViOB|edoU{lKcc>%1WhXJ}R#mVMf;#*g~qt-.C?j' );

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
