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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'Klc3bi33/Q],kh6UJZn]%/lj[}Pc_xHE;V<A552g;(L/{)O$!R_$f4r>qEY{v;(_' );
define( 'SECURE_AUTH_KEY',  '=u%rSUU!*y!eO%G_Wl=g28`RZ~P]%~ttK^8l;3hHrB/s>.JZQ^!m1r{V*Al]j6}Q' );
define( 'LOGGED_IN_KEY',    'PR(DCN1 ;SOQ`[}/2s(zl?x^B|M4p~|M}aueECZkb-[aun)= wk*-dBy^Sa9udna' );
define( 'NONCE_KEY',        '*d_0`wLge_jiqT6&+H_~ibe/I{DL oIgP.FdL8RD? =*]%K2BDqN$8[U5@~?s+Ws' );
define( 'AUTH_SALT',        '+:F?4G`Mq-t0+~F1 *B?^/F*XRqfH#8ay}xXn)r.b7e-[k1#&#C@euC:?-E-8rW}' );
define( 'SECURE_AUTH_SALT', '8QsHNZkXy*Ax]C:Iuuo^<Y@JM&#y1LGRi#r&SuHgC#crN<+AXUh|%tF7ukX?LWw|' );
define( 'LOGGED_IN_SALT',   '} *7?io^:L9{#foVOI~Ge[z4}-p];1PUUQ7v8NaB4xp*NXB|x)foDu[FIcg?+UJz' );
define( 'NONCE_SALT',       'fz6M$ZU)1L,NR t^~9jj]KJDlObU]{~l#;YYk(9V1T!31D1p|k<PT{^P?V-f=$/t' );

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
