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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '{hbKEK-<C%7<yv{b}tV4kFv Xa^4=d,T4tG(Mk R90YZb;n*{SXc@U[fYdYKyc^x' );
define( 'SECURE_AUTH_KEY',  '5z+HU-$4.17M<M0|I/QWAU~|0sI{v=m[K5y6V/^DGM7eUCLXWF~Mi3<ttUBpu9Bg' );
define( 'LOGGED_IN_KEY',    'K47SmM^*;D,^8Y:M/Jh.c]cAnwQ;?&|Vk7[OowQKDGr]0{m;X4HA&iipPiV7$Uo|' );
define( 'NONCE_KEY',        'eLOMG^jJdMc>>z6s3r{p>0t5.,)r-A0w[IrI}JQgAZ+GAv%-wz<)ZS-Wa7sf!o&+' );
define( 'AUTH_SALT',        'UX_%QSwgx;4U{ZV Ndye3L?.-v7t8*}IXMLnQX<rgByq9w3G7i*y;=:-6RkR8^v]' );
define( 'SECURE_AUTH_SALT', 'fB7++{b$RNBFS>.,>G+f_ONw>0pnL7LcIOSp)isgEYBB~-dnj#7[Q1_tTW/vOB,?' );
define( 'LOGGED_IN_SALT',   'ha(l4,RYw,EsI5A?zGIxM<A=V`syrjeoTcpF9!O(NnAOV7oBp~k5B)pn}$ H]snO' );
define( 'NONCE_SALT',       'QtLCK=+L>o[XKv^[*x#RjdZt|BYF<c@/,MXv)#E=_t~l)@]Yq/d%~)p455t]XAY+' );

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
