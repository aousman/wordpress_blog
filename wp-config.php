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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'Stackinc' );

/** Database hostname */
define( 'DB_HOST', 'wordpressinstancef.ca61b97bps9d.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys 
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_jS!; D|nkhRv_8i`-3M7EIv[qn2N.SmC<c?4m?by]tIs);h=[Pv7[L5 /> |9fZ' );
define( 'SECURE_AUTH_KEY',  'dN7z)@l961V5/t&[<bJ<N9-i$*vLK1az!,u/v|/9/x+}>c8FU-sBr|G(3cdFy+>h' );
define( 'LOGGED_IN_KEY',    '+l:O*{Z-[A Z@FPDUEPm?n_>:i|8Gg(>>B|J2=SkD+x L?O:QYDD<^/9FFRs <_%' );
define( 'NONCE_KEY',        '5E=2xK=&(2.r$4-8-W`3Q.:7g$wgE7l?-D2WM[(`eG`}N6<,WpjDMp+=YGE%eG<b' );
define( 'AUTH_SALT',        'D,pe bU`VR84/5^RX^j2)VvVqbf(YF@ d0tiwjn- w*5z-@~+[fC[>~g=iU64/|q' );
define( 'SECURE_AUTH_SALT', 'eq8H*wx|?F<G0!,@/o;Oz!,nxB3ej|]x_#8X*4aVFpmH*a TV3r00IXX`z!gn-~/' );
define( 'LOGGED_IN_SALT',   'F2V?+CppyOj23@Cj-8dVO(+h4_aM/`):l7XAa8N5-V}r_F3m+=kY7R?jwfwpO37D' );
define( 'NONCE_SALT',       't1(xF^ kXA#VSdou28}I|h)8|i{oO_bit~v|g*AI?fQkG91=I| YS.if!hQ<[(Bp' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
