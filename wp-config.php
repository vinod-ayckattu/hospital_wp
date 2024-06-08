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
define( 'DB_NAME', 'hospital' );

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
define( 'AUTH_KEY',         'NVpY351_U[!~}WWxC!?L^?Uf!rt}3ET7@D[1W)q~kQrEfY>wbVOXbld)oC@x_SZP' );
define( 'SECURE_AUTH_KEY',  '@Ya6oi?2-2{u3~}ys:JvX% 3_p;qIb8~)R@LPJg&t yLNmye_6n1BD|o]bY1sz9K' );
define( 'LOGGED_IN_KEY',    '<1N8Br;<.!JXcOPUApk0x:Bc]mXo#bm}dRrT9Tj}YNA@4nkx([=aT ?xOkd}6c6Q' );
define( 'NONCE_KEY',        'p?%L[),~ y-M0Ah8 YgF<I:>Lobn|ghgSp*[G%K[+*,Sh9}/6g*>ha[906zG+^OP' );
define( 'AUTH_SALT',        'qA4L^:(E}QS-O!0!1}}8`;zk_KIZ3hcpt$42!wn;)OZD>i.](OKnt|h<C&OaWU{q' );
define( 'SECURE_AUTH_SALT', ';P<W#[jA61=Al8`&ZiM62b|s%Z{=l|gS~Llup1?K~q+1&C x)x==]viE2qYVS(+L' );
define( 'LOGGED_IN_SALT',   '$9mG<3dl/6=<Q8+jFHHK(qrCpb]J?p-Lu~B>$-Om(lUf>1QfSmn8/(<Cln[&~e(R' );
define( 'NONCE_SALT',       'uSN_Sp(Dd|>Kll`r]b{h [BPd;I+d%[dv7X?rT5Qt$xG1lN+@t9`LdUxMdccmTsK' );

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
