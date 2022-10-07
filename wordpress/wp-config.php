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
define( 'DB_NAME', 'j8' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K0ZDz0R7d0oqQeY1iQOvlHL:4#pId=Vqf5fOCbMNnrC`&8%V`]Iv4)~bxx_(Q0f9' );
define( 'SECURE_AUTH_KEY',  '5KQBZ}/4uHwC%&7{rO6/N2C._Ch2trk_om::4]U>P^jZ]QLzjHZMAKL$BfHd)/e2' );
define( 'LOGGED_IN_KEY',    '5,1|.k{e@2~4qw*ijQv/MS=!^@8RyFqVbE{6H1$(2A)*<_oTq<yZ!;&siCrz>5BO' );
define( 'NONCE_KEY',        ';FH*ZetE&/t+[uJ;8&087],XO(otSqi[L2 o<+ucbSph&o;uYN>#`L71P@A?B_0+' );
define( 'AUTH_SALT',        '.NA8*y&*QoB4K~Vx_QN{XR+TBs?Up3!@!Q.7j-jbY [{BUkXaOwY) E.%|jwf+l7' );
define( 'SECURE_AUTH_SALT', '#~`7+>~%!5(5JpctwYp,.sIwr@yoszW9whOU`V`8LM.q!*mjZt=jgH>S+Xozuwwh' );
define( 'LOGGED_IN_SALT',   '2I|>a-t58,S$M5T>=+nz2M^f~pw9qonU=8u^hA0dzmAYa[v{p9NC%p8yvL5`v`Fd' );
define( 'NONCE_SALT',       'qOHk%QDzA}6q/TtoFX%8p5Qa[>*pKkaqJl1YIj5.)hH<:>@x?c#h3k-dCQI3<@Y+' );

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
