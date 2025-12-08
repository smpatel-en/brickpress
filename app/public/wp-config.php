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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'sa`9;%;s7r09+$Oz9_q(wsnBY=x =)^X)irg ^;Imzj*?]fl.9&`?BdvsvNnZH#$' );
define( 'SECURE_AUTH_KEY',   '4S=e}Y=(Jd6J}U}2-N-#R-2.iT>=`-0B.AN6`w~N5d=_pX>0SW[t&}|kc-:qC/QD' );
define( 'LOGGED_IN_KEY',     '9jg.h_y<miqNHg$ X:=e5:i}50X7hEO;ERvRz,S3hCFBAhhN QQRJM~$qHC:CDhK' );
define( 'NONCE_KEY',         ',WuB/hgD7E?wT(mWWSp>UCN3AKO>/BZ_/K4Ch8lq!|e2 WDf3p3#Z}k4^,&Vl}Z&' );
define( 'AUTH_SALT',         'xnl(XE4;T. e!0XPSpb:xzb$,qQ5[|}<1EXNZtl3GwEQ:*17>NyF8B&N@@Ub:1|J' );
define( 'SECURE_AUTH_SALT',  'heILq?a2N jYLE);ecx/`+1gWJQJyDJ]2dF~@ 2u~`dDTH7as=!dJ=n+UCPKgkaN' );
define( 'LOGGED_IN_SALT',    'gz8<{vYMDAI:~G~l[l(H22j<*>/a6_J?-%(%6al|S?[0,7^;CxS:1/UIIGXRh}g+' );
define( 'NONCE_SALT',        'Nge[x4.vHp3?YNecTY;wl}qH!1h6t[GRn6Iy,;t,eZ)Wcr_)lP;E-)MtyXW]}.]m' );
define( 'WP_CACHE_KEY_SALT', 'T{5ycmPAol*t?:t5K)M=$(|!t1Wz}A]/:MfN7vLf8b4CDDTjI`+r!$i,Qcl:tz}^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
