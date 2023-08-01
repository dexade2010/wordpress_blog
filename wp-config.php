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
define( 'DB_PASSWORD', 'stackinc' );

/** Database hostname */
define( 'DB_HOST', 'wordpressinstance.ctwqe0fvbtdy.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '4]^bmZ?Y^|7(ix6] As<cp?yTA<5ab1I3C6o]6fgm+KTvxAo|XIlcB)|e(Va1|Zx');
define('SECURE_AUTH_KEY',  '-b-Ve1!JDNcmNJt|A-FG&lW-R@Gp(=L_cYP~5%b_hy$Y-0P{6AEkf:*q&hhOl.,-');
define('LOGGED_IN_KEY',    '|,$Q-P8YotRny>_fm+R@FoNm$J^A$zXDt2GL`QNZvPet}W+g@zBG{x_1AvVl9HAU');
define('NONCE_KEY',        'Gx4b;<u+DxGWVOI#/`WL{H#cDB,,L-]k&^J!QTm4pwW;Gk|0%1K3&v79U-I~C..<');
define('AUTH_SALT',        'NEa_-)jhlvC(2oVt:nnNkOe<:Tm$[FI2Wm{<%gT,,l7:kMWEv9-^>=CO]?$=:/MQ');
define('SECURE_AUTH_SALT', 'iLF_+l=.ad +[arY)X#|rE97+lb+r6*?-3|O%ms*3RJ@OJBJcz_s!.h]PDCI0+D0');
define('LOGGED_IN_SALT',   'AsTm%!7?:!c}eE^AF*4PI0zK/_NIg|i-r0Y-WMuo,>c7cN7@LC9,q?#dx=_v.j$d');
define('NONCE_SALT',       'wn=.x?*(].$|j-D9RFOOn_9#[OE,G@@:k@mhn@R=o`-F rflwUSw+*0y+I-}$I+6');
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
