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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         ',.cG_a=nv8T=3krecgd]t>ENG#)|v^W42i|>5jCR<Vit}X!gQ9+!scP2I36POeRH' );
define( 'SECURE_AUTH_KEY',  'r+pi.72yvhA_!K+xQn?)c4hC/R(3c)u*5e#PACJB=GbS;M$;h(nEQJ(|~0,Ts6)s' );
define( 'LOGGED_IN_KEY',    'pc)?C5@N5v}#G]h+!S0Xh6<Fb4uCQ_fTfX-V,hU>sOzz8}^DEw_>v>pFRk+tO}ns' );
define( 'NONCE_KEY',        '5Iq`x-ps.&>;uh&qMc_:CGgVo3Kii4gC^h&{uvmVXjQ,;eCm;~/S[JY,*I=t+**E' );
define( 'AUTH_SALT',        '.0@c6~|%!}jlv>&=;qLq,?$?s9&tHMJ@vO|E!t@`#[J&mnVnt,8@?Y(y{kgKzq2<' );
define( 'SECURE_AUTH_SALT', 'L.Rs3og-X?mm?D]nM{/<s6,#,v >@-p>i[tL?;_mBNh1i-kSSD5yqP<2efk-hm>}' );
define( 'LOGGED_IN_SALT',   'J((2:+S1|>Bk/_3C>L$ QN9`/koPh;QcGgnChT2/P4i4Mx+`<`W#b>RsNQMZ#^pL' );
define( 'NONCE_SALT',       '%`?Ko](9~jsVk!Nrxq _mP@R@:M%w{p4Dav,x4n?Zb6@&@duK jTl;$HH4m]&9^T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pl_';

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
