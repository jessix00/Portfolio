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
define( 'DB_NAME', 'dbjess' );

/** MySQL database username */
define( 'DB_USER', 'Jessica' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Berdina0' );

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
define( 'AUTH_KEY',         'T!/Ah7nevl%9P8CWNxN6bHhXBO2n.m`YSO`Qu<1+A_jDwj7G&Z+[A 9~,}X] >e^' );
define( 'SECURE_AUTH_KEY',  '!F jpq5~F)5 A%Du-EY{a5_8}H?cd%SQZ-3cuw*Xg!Kc?E69|PDtCpi:nSsaha&V' );
define( 'LOGGED_IN_KEY',    'YD:)D-9t){9>oU#{MM[P+rXe#BJKgC[7/%K%80BbKrW.1q;jt}xkhvKISUd$1cQM' );
define( 'NONCE_KEY',        'zsN5|qoKMZ@K0bRRb`-~2jumVm}RPJn=P^RePCpPx/REqz8z$h}q[UUPm^9]RcxX' );
define( 'AUTH_SALT',        'e;Kg;?]_#@?LwVfTU.`vc=j}z8!Y7YveaVXWS21T9|^@A|QZeTA-ka]*$*&Sh?=6' );
define( 'SECURE_AUTH_SALT', 'rt]F_p0,762VpU&+D*O`Mt<r-hJ O;-N_D0%/uI2y}.QXx>Zi&|x%]trkG[&;)Tb' );
define( 'LOGGED_IN_SALT',   '}&KaehcXye^G4rF_-YDHdS: Emf0ny22r#P3Hsd~J+Gi/jE!GBo.0b+[r4*[_:sl' );
define( 'NONCE_SALT',       'z =G=`7RfM[,f6M6M.exP`<P?H&:?d~ ^-owF]aH2@nvg;|mfl%?g[p!T+2k`#eF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_jess';

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
