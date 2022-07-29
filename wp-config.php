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
define( 'DB_NAME', 'unicord' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '3D6{^v9//`[3>B,i,_a8&[a#zlpeb$M5tE>!4i`$K(]RnxY<{1|?:ebgkWD^9-Bo' );
define( 'SECURE_AUTH_KEY',  '8glO?#]P_wmH-=e~zyy{fM =&x,Q&sdsLZ4 QyIVV+w12.1qhceHy.k5<{}(6l6t' );
define( 'LOGGED_IN_KEY',    '!ZIn:b:#ZJa{~/qXRncFk98n~rfvh$,5*&Qt{6gO ,cO@&43HDWQ[&6@ #fCiIce' );
define( 'NONCE_KEY',        '/lY}L&D%A{vgO-O`T7PQc2Z7lM:#2#oisF(k$KMXMO=+xZ>;^7P1x3e. 3>g<b=N' );
define( 'AUTH_SALT',        'Qp[8J@}QgV[G+F%EXiw;$>Bcr9*Kn,UF9V|{3RXV*hk5}v|JjJ=eNNvt&6o+~~wP' );
define( 'SECURE_AUTH_SALT', 'Y{P[)4Ha<&<W[p1D<gSo(A9Mj8eozIJY]~%F5s3dque?P8.ct-kfEG|r$Iy`<rW*' );
define( 'LOGGED_IN_SALT',   ']51|$S.ZTH#q|I_BUYYvJjf3e.zUz+j9Ww.{g/voD=PYV(t1 UqZ5 )+]Hh~Nsu)' );
define( 'NONCE_SALT',       'HHA uu0.P:FiP2+aA[PpW`yipmKQPv U0/`fJmajR+ukx-%-04uQ,@b[GP)y7Te@' );

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
