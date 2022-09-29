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
define( 'DB_NAME', 'wp_balancewp' );

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
define( 'AUTH_KEY',         '[*Oj@dAX,:]ffikM4:sSoyAS},x<hs${=1 g njc/m4#- /CZh13EOvz4uu*~pSC' );
define( 'SECURE_AUTH_KEY',  'AuB*eDoAZr?Q?<=3XH+J||vcJhw/2u*0k(tzPr8i;,xvt[c8Y?PMu(6|.VDXAQ%B' );
define( 'LOGGED_IN_KEY',    '^,s%/3k(aC]xB(h1!ero V<TtDh1}K.swWY;Z@h%~6 <`F4a @e<kX:mbpx]FwFX' );
define( 'NONCE_KEY',        '?>jGtoIz!/vouhuBp) G3w)LD$(Sc&V<eEULM6[,:V-?e=3YLPU; Y<4$K+Pnch1' );
define( 'AUTH_SALT',        '/s)2Jm#RosIh!@mQFhQOc^7hE{b%.N^9bO?K w6,(dYnC8.FUx vxI46}V(v|M]^' );
define( 'SECURE_AUTH_SALT', 'X%Abt CgRxTH+G^odbOWn}6*G77oF~d9X&L{qRIj{osc$D=] edv2&@-?l~fsyFR' );
define( 'LOGGED_IN_SALT',   '|ZPeU.}=HeGZbW {rH=%{wNkxOJYH8<NsI2TRB!%+z@tsPN{rcL5[l^|sM/NsQ/+' );
define( 'NONCE_SALT',       '7gtK9R)%,@n?bj]zeTjTm OE&P*dqTvw@6p TuZ:O0T)}gc.]WcQmd31HtUT`XYF' );

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
