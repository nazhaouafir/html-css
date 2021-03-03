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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'appAdmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nazha@1998' );

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
define( 'AUTH_KEY',         '0}[)0eq`^z5N6UU!VHS]5.&^eo2N*j)fNc]Hd `0`Z]lp(ct]j-4AQ6@-W3^gY|G' );
define( 'SECURE_AUTH_KEY',  '`wg$uFMj8RW.M~3Z*bzM]Soe|w4,:zB,hwv=X#)m[holR`{8`pIDdQ+M@oXqc&$L' );
define( 'LOGGED_IN_KEY',    '},Y=5H#S491 2^@%[WY^^k$;gmY[$0#iq&i1}<:Hc[GI2rW{^uL^6m?6gBG{Xmz4' );
define( 'NONCE_KEY',        'W&J28aZrTT6c,,e:{0GQ:{5R}EiWd-3_2cJ-4h2=o+~e|3BM(`c.x:!4Fg.VGx=&' );
define( 'AUTH_SALT',        '>ghyn^T4(>9F,gcCJKknu+U7iocFPN4ab}:=7|S2`,}X}hag_^ns`OI/,VBg2j@{' );
define( 'SECURE_AUTH_SALT', '}r^j$MOtYIBM;:-K8q$(gHf/wRRwDoXNs-,zHMARVSdos+~g~CF_YZW9(>j in1n' );
define( 'LOGGED_IN_SALT',   ')p#`J4TE=$2Ax,mh0&pRY#$Z<?(YO<jDno2u+I<vi22$EE7s4uLvL9f%CNXcy,b9' );
define( 'NONCE_SALT',       'E`:I%MZfa*R}.1!rL.<V?T<QkT{z`g1YO(5*},hn|>I]xx}# {2W;;u#Ca[eFKV5' );

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
