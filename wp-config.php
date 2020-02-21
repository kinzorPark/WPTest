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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'R x7_wM{D;L99px8>y`tMF1V#1{CAxz?D[T6hV}S7fG93J28JJ976]dMsTib2:i]' );
define( 'SECURE_AUTH_KEY',  ')6{aery#5C~VPyPKLSXoU*AE{SoIu|OmkX:{t]K|4*dK.Q J+8i``&G$Si*e3oS~' );
define( 'LOGGED_IN_KEY',    'p9cr, +.dAROLHUhq5YS&fG1/Fgo39G!x{ew(9ty@?^|_e^6IoI]i9(E,/es76:A' );
define( 'NONCE_KEY',        '#869%soy>_Y];ittc(FU]G}2e z<Hjvp ]:7digTf.RQ,f=%X%.<p=iFYDVb.?p$' );
define( 'AUTH_SALT',        '0uh5(;,1]cS1ypy)0s~6hd-O!WRw$wb!7GyH;4/BsV^sI2_-iq8Ic&+5,BJ/E6/n' );
define( 'SECURE_AUTH_SALT', 'AHVl>w/d@]`+rL0mgU(vyb76E-O`51a(J|[~HipqW]8;o:QF~5jrJInW*OpjMI,`' );
define( 'LOGGED_IN_SALT',   '1DFk`0&Yx&WIa;q;pj~PV:eIba;HGA#0khB%|sq%|d(R&!q;}v/n,*>-Y#aVPvDw' );
define( 'NONCE_SALT',       'rD|@3kDF5($5w%A74Dq~Z$D~:X-@D==Uq]}XNm~Xa1h&AN%X(++D(/[Z:zFQOFEQ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
