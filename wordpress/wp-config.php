<?php

ini_set('log_errors',true);
ini_set('error_reporting', E_ALL);
ini_set('error_log', dirname(__FILE__) . '/php-errors.log');
ini_set('display_errors','On');

/*
 * MHE Freelance
 * mhe-freelance
 * fDJ*6hRyu*kvFIL5w5
 * manuelhoyoestevez@gmail.com
 *
 */

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'mhedev' );

/** MySQL database username */
define( 'DB_USER', 'mhedev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mhedev' );

/** MySQL hostname */
define( 'DB_HOST', 'mhedev-mysql' );

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
define( 'AUTH_KEY',         'EuLIe;2$x!N]cXvthFgL&%_}gwZ+&W4TsT9[D%>kVB/@Q31u)MH2:zW]SkL<B> 2' );
define( 'SECURE_AUTH_KEY',  'GpIxhh,n@?d&g2X=e#4QJOgCrEqZKinyr skzNiwfn/r-?[1(5I!_i+LpY7}!+qd' );
define( 'LOGGED_IN_KEY',    'W9:0.Re@BZ,H>(?*@:f@B<aQFo^MMT9~X m.aWK(D%`WS$rye->K0JFO&^A Z7c|' );
define( 'NONCE_KEY',        'UU#bCX4LZtH!*lP/>sJKxQMM}&&(~N<t<!`vXE#k8Im6KYjS)H2Mi)b`h+Vf$*$ ' );
define( 'AUTH_SALT',        'i5Y}z$Ckj T+by6to=T4Qd P%hP;qSYv[NQO1OYn~*{G@J9pwWF{j XhM@Fs1[ag' );
define( 'SECURE_AUTH_SALT', '*Bse[/Vy1McPJE~^k4qud?dQSO_.`KH_pL~3N_dthflFE--G2WQmsJ]lbtF.khKj' );
define( 'LOGGED_IN_SALT',   'O~X6z3]7S@1riAjb0RkqOa-@-`_T@GuIG5hv@`(li1yCvt><POVq?<*o[1!VSH{j' );
define( 'NONCE_SALT',       'IR~-{La)!:FyOlu&Ky>(93QV/!#GD-|C<}O%QrB.Y4MjPWPkRiTNH,KiFtvOI%^U' );

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
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
