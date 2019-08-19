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
define( 'DB_NAME', 'inventionware1' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'DmI>,3CFft~/Qsd)F#OaDok+mgHn~* =;%A@D}`uIy{fL:P:iu8j cWVmr3nX>9/' );
define( 'SECURE_AUTH_KEY',  '$f#qQfbIoMr+R4;T}LPF!KC_|2a(-G3^xf3))>502d3pK:1f/>wr%~dG4F$+:s K' );
define( 'LOGGED_IN_KEY',    'F0d!S4}nl4%ZILtZ~q eS/3]Ey}ws@wbm(K=nb[/ZK~K]n;SI}s|.[Wfed95f*S2' );
define( 'NONCE_KEY',        'xrUQk!C~zT3>61q:s@hd;/1D^~qW]K[_T9W])~WVpa|gHvSuDI*lj/x3]fZV^}d,' );
define( 'AUTH_SALT',        '2Azz+1O)JRpSW$<aUe; +<b7Nx.?^23K)r-FL+-z!$Rz51pN[*N1COzo0P~T*&^`' );
define( 'SECURE_AUTH_SALT', ',1qL]Qe!N`,o&KKUnnRjrGqseWUx|6+uP3ML3$I]P_7}X:TvVE<kc>wX8tI2vuPJ' );
define( 'LOGGED_IN_SALT',   'J>dVq]2ZVKF0Rmn|D2lg=T68%-#l,-{n`fny]fNbX%)IL8E:OP6~ekDqn9anw9aA' );
define( 'NONCE_SALT',       '{#U5jmKQ ^M$ @Ukup4xHz)cmOswpHf<rM1A7,A.XoQ/=-JAAJF)0ybV)/oPDc7y' );

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
