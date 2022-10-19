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
define( 'DB_NAME', 'cosentino' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '^otSd5=OI1i@#(h& S/5JY?qr)jGT)Y1NTj_yUg0NH^n2=q ]/kOd/ 7{5w+ .MY' );
define( 'SECURE_AUTH_KEY',  'xDcZwvV>W`mtU|&<QKRbg--/X:4|1>y+(K`UZltS8Gmb-VoCX.Sm.orj}.p9C)5n' );
define( 'LOGGED_IN_KEY',    '(z)QwUM=9icn=9e!XK*QK25eJ.J$]WCLO$vuT~hez!`$Ie|+:.IT{E9g/UsV:=i;' );
define( 'NONCE_KEY',        'KEq^xp@3K(V0;Oim2(7CB-=/.f[X=|v|h7CqN,+k<=cj!b*ZUG,uI-}qm6|4b8Na' );
define( 'AUTH_SALT',        'QBA)2.Oxd~#g7CmX.p*to1TDpusmWF_A#M-E({T/IO*06$fJvA?A/QC?V=Pb+h:y' );
define( 'SECURE_AUTH_SALT', '/S/.9&Xy>oKtJt=_HwDXrN2W&X8f;Z@7&q*!lmyXp_39PuG5D5,iyV,nt+mBzJF<' );
define( 'LOGGED_IN_SALT',   '5YaTqQ>58SyFBrrL&`OerE7UI6yvh^YVvpsiV9b#9[36*G~FFDM,VLJw{>{18;vf' );
define( 'NONCE_SALT',       ' 8:Ar.Q5@p?mhA W5Z62&+rcJt`)oNFi+>TTs,PJYBp*cTZ~6>LZRf%gH]!rPh8S' );

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
