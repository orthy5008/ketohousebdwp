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
define( 'DB_NAME', 'ketohousebd2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!4Zd[6Oj;I sO%QEg?L@;>/2|PRF*GLrRxcx(|Qk}9=j|0_/K}hQ=}v5@8?DeFR}' );
define( 'SECURE_AUTH_KEY',  'o(xWI[nl(3o7F?aq)cj<pE_5?BZM_*o x_RCg>!F1veE6Dv8|T>}lV*DJqx JE@z' );
define( 'LOGGED_IN_KEY',    'Zl.t55vp]uv%5`*n)O+g&)H1XqHF&]NP,#)[l/0RMm$G9gB>_CIb_(dF84oJRM,]' );
define( 'NONCE_KEY',        'eU^6Jhm(ZHUd~thJ0GQo)53:-}HhQcsm5iHbS]XhFrLlpKk=5+I3<BB6IzYpZ77[' );
define( 'AUTH_SALT',        '<6Fcqd@IcW0`<v8TCKJU:B!u<(Th~1xBsX( Y0V(V{g+Lj5;% P{2HjCf}Xi7nrT' );
define( 'SECURE_AUTH_SALT', 'xKur4YF==L>>X!../e/OeU3`,yW2TO4cL4R4:$=a7Es-h!XHX{j,GFf]U:yJ4B}z' );
define( 'LOGGED_IN_SALT',   'I^6j A)#0ER`1/bO~qTij9X!;_4PG&bJ)t/`W!.#^T4/YW:C&[6ZA^a9CXgb;ia0' );
define( 'NONCE_SALT',       '>xuw;g>n>/In1^1(7Zks<44A6}nviXe l5p|Y<Gh>i7~Sz2=F?4M6Ld/C=]237?K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_io9';

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
