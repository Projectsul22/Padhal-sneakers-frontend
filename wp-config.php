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
define( 'DB_NAME', 'padhal-bdd' );

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
define( 'AUTH_KEY',         'ns7%w*+:sxcr,g=UR,y;E2_YYYJI=dX,xOAKX!*!XOj zz_~h`.~T4tuGo)E*yvH' );
define( 'SECURE_AUTH_KEY',  'zYY>_JQdk-FG93Cm4^p<wDqqvEEdW7njzWW%8t~>q93K SR=l?IoE<YD7Yr@R`e=' );
define( 'LOGGED_IN_KEY',    '+X9Tv,ECnMocTUy`nv`L7&-?E..NrlP_oTJho;h!)$e+.XI3NR_0[hh9.GD`z x$' );
define( 'NONCE_KEY',        '6%DHf~(n@-uxweL_?CNS.h;`6`88<I.Wd|spI&N686Nx$cd5#3#3uG9//N-ze$b*' );
define( 'AUTH_SALT',        'K8nwFq-H.M2=19F!1|-yt)&7GZ4,j9HeSv+0LFVfD?}MpL]{`ptL$=CT[@OcSoO}' );
define( 'SECURE_AUTH_SALT', 'RmeuKhJeqf2S2HPc3LBQ+!H6t~+R)W|o~AvCITgdEK}7d]81{8&3O9}D_BD2~!1)' );
define( 'LOGGED_IN_SALT',   'NIc;%>QY7=fu!U|DB/v~`NeVgy2n7(p;*U&%IC.g}{{JMj0Ubw=gYE1&L#!kEDul' );
define( 'NONCE_SALT',       'Hv9H<W3m{rbRMuO),vF+X-20K)i/t_KyA}EEcip3<c3FKF_bVn_XE-6e0s9Ua%]5' );

// === JWT Auth ===

define('JWT_AUTH_SECRET_KEY', 'HjJFNYva-T)Y0y}Ab)Rf+4X0])j+W<268o{(N0%+Ax19u2SZkT$4?=&^lE?qww>2'); // clé secrète pour signer les tokens (à changer !) 
define('JWT_AUTH_CORS_ENABLE', true); // si tu veux autoriser les requêtes cross-origin (front séparé)

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
/* voir bug = true*/
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
