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
define('AUTH_KEY',         'N|)<90E2QI0}GI;B1-29>4%$z/j..RtA)Rv>f2Q7>hR+F*|34j7~}L|-uN,^?|0h');
define('SECURE_AUTH_KEY',  'R~,b.{O&DZ^~Ljub!iB.9:zA</9]hv6)K@XJ>iw|GLb U$}m|F|m,u|[Xv|8TvBh');
define('LOGGED_IN_KEY',    '4HEM!cG_~>/+?}IL(C.$4/0)+_%,mLyJ+|_W~!X@H/@ID;+ZB8C[$Bq3Sa+SfnHv');
define('NONCE_KEY',        '`5[&dh$U*S)[0l48>QGR8Ds&@FTv@HPcZ<1!&dX+^$Vwvz;[0Pee:m-28NPiC;Yz');
define('AUTH_SALT',        'yUdrG[O |c*Sr;t(bS@1FSKE=O*]wb)O2r/aPmmJ:7!OjM]vJE>Qp`WO+MnwZ;7P');
define('SECURE_AUTH_SALT', 'Uz+2R#.PaX0g~!e&gi/[DeCyoR#8)8&LJ-eCry x8*bI MKrLy!;C70vJhY!=K<O');
define('LOGGED_IN_SALT',   'bJX/VJ}?/DKRhSr0: v+5N!9&zVqc8i5MbXBRMrNWd76&Q@-?- [MQ,++L6F=.N,');
define('NONCE_SALT',       '{X}c2rr)A=xv+b#wC.YO,P{&/DMWSF&9X2e5*JT]_2C@spks~H<>2aH+--Q_V|qC');
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


define('FS_METHOD','direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
