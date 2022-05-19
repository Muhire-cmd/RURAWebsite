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
define( 'DB_NAME', 'wordpressRURA' );

/** MySQL database username */
define( 'DB_USER', 'victormuhire' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ubuntu@5320' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'HL6s;^p2ztF`H1B0gxE2wFQCB(-K<P{bEXJzt!~>.RzlJ8uU`?{):/,.I},?`zb_' );
define( 'SECURE_AUTH_KEY',  'cN&7AK ZN2@1MMET1!XXdbs7)z*C)#l4n0<cv(MF[D6ftfR-HR$3ZtM?UiB/qVcZ' );
define( 'LOGGED_IN_KEY',    'zuzaO.m:0~8oC8JnE~^8KeN/^5%HpUw4.y4O+1<ii;S7PLF]=)Qa*XR1,iDnNouu' );
define( 'NONCE_KEY',        'X_w]RKO*sWpPYz$K )yRYo015=H#qs2xv//J%|CD:Wq>Xr(LE+1$Dw9c?6d~FiMs' );
define( 'AUTH_SALT',        'puPX<ZfpT:IDsF!nnY4>;YlFfJsc Ou9>4q&0x@9S5A4Av>z_U-@zJ[I/Aw%yN}Z' );
define( 'SECURE_AUTH_SALT', 'bzQ2`{aC{/x3~(83~I[/b:0Nvqa#Ntk8o%q)I(l.~0D.Ru r=mADFeVJ.R&a-jkW' );
define( 'LOGGED_IN_SALT',   '3Z=I$W-neS$P2>#_sSZvS@r:Dc+ A9hPGN29nI8#.kv<{h8lZ;~$Qs5k-j3rqw8_' );
define( 'NONCE_SALT',       ']hBp5vmNMd!HKwhTPE:2TB/Yi+5eTs[R8o@hZX>sr4U%l2Qi]+]^t{lL/5tbpe[P' );

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
