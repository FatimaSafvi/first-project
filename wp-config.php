<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fatima' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fU53a07!bm)@=R0h;0SD_p]UPbCw#&DD~z<>_GUE g$n4u;eV7,[htaz<CC#:;!g' );
define( 'SECURE_AUTH_KEY',  'Qa*8jC;@oSeV@jF.js2~Un!,q]O1atb3L^cbqf||$]9e-:eM%6f4poo*JcwFF.ag' );
define( 'LOGGED_IN_KEY',    'rk[.P[,/oQ>WWG<x*FR>}oq6n/JNau%!tR (,Fzo=U*11P5Yzhyw;ow7kW,;LUQ5' );
define( 'NONCE_KEY',        '9;B)90(4f$ ;RaC5DR&Mw6rWHZ_P3}^c:f_oQ@E9S||(hdH&`PsR{OBpOxDMK<p>' );
define( 'AUTH_SALT',        'i|]f]y?%I0?j`^L1#bIGRU}osIj]+Wf,ZdD?Htz=ntB,O#B.p@>#ue70)}*S).r>' );
define( 'SECURE_AUTH_SALT', '0AC(Li-.pq C,Rnx2aXZGOD]Fn wqw@8`(tJRyLnFSo0wq&]B%2mhf*ZA&dL@5$V' );
define( 'LOGGED_IN_SALT',   'J`%GUSN9Y#`Qv&Wih}!Qo}Z&0gN?> E Ts.uvZvZZw#h%,PnTyE)*rR3%kKfY|sR' );
define( 'NONCE_SALT',       'eQrv:k@%]H^l/B#)zU[o))>Qs,+!:{l4#0eu6!vM8S`(1<rb7w3t%Df_p^yhZBD#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
