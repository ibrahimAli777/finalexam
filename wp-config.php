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
define( 'DB_NAME', 'ibrahim' );

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
define( 'AUTH_KEY',         'q|y2P3e#BPGMr`gwIMP%#n*!XDrlgds[F]j_kJ3Qf.;6[JuX!tI({&2Ct7P9W1@x' );
define( 'SECURE_AUTH_KEY',  '^Vn^jd?-S!=(*U[i<NSkHB>~[Ydm14,=Zi;oy%K58BPexYBm0b]~I)pX6_kcEnA#' );
define( 'LOGGED_IN_KEY',    '6tv}dMG04u#=;*bDg#O!#f8j;@.^n)>pA7@#}!IQRKreMcH#/C/sli.oK:#CRHM(' );
define( 'NONCE_KEY',        'GV5a5NUk3+xN7eRs%SEfYAHQN0q.Gn|tb].m<&lO}Cw?5pSl8],mPpQ6(B4_PX0*' );
define( 'AUTH_SALT',        'iE)2,j:A<](My/exGR?{gvw1am%RBcR~oMg(K#N_55#?E|Bi;u3`Frn.n#iQj9MB' );
define( 'SECURE_AUTH_SALT', '%xIM<*U#lX&}Fhnx_1>CLR58(%.+8~wFx  m9@Wo6%mE7WkQ_AFA-hx^n|$A:k=W' );
define( 'LOGGED_IN_SALT',   '$m8;pTSRiKRHxuOO@Hmv/J|^A^! kxV#uP(#9X= OGM9+}F$7T9`=-`-,N8UH1;#' );
define( 'NONCE_SALT',       '/;<mn0#r}7(wW<vKa3U>Br1d{b+_tY-3v5lBVj.u@qHx8EfIM94rL S[Mb%>h;T(' );

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
