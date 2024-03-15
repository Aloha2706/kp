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
define( 'DB_NAME', 'wp_dbase' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', '2w@W3e#E' );

/** Database hostname */
define( 'DB_HOST', '192.168.50.22' );

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
define( 'AUTH_KEY',         'M%a~0mq{8v;O#iQAl,[OcyY/oi6acH%#S{F3mjDtN*5C;2gr|X5%j^B<~@++Y^f&' );
define( 'SECURE_AUTH_KEY',  'w1q?&UgOP69<=X?^j?#uA_4G4Wnn6Dc]FqR^*:I{0{rRc~k{;8JMQ$a8R6| [2U`' );
define( 'LOGGED_IN_KEY',    ':EZNJxq66z6g$6KNX~EfTzF2jj`Amk]PD|d@,pFdJ+$JWcFNQFJ2@Fy!6|C{wjJ0' );
define( 'NONCE_KEY',        ' Ho+)}+4=v/30:}7?=#MvIJQ[.L9nUKDGVQ^Oe17K2ckrW49hqvZimKj*oHypu<5' );
define( 'AUTH_SALT',        'Tq3kSf8iA=}!g_/js.Cry[H+]Dgv>d}zGbKq.aYQ7[ 0$`GQB.?=,p*6MD~rv0%n' );
define( 'SECURE_AUTH_SALT', 'VL#aV)ATKR!^i@~1G1XV$s4x8U%=e!HrZ*^3J3[9q/5^59JPUo~W|=b/htv:{f[R' );
define( 'LOGGED_IN_SALT',   '4xuV}?OQTG0~{=FV,Rei;^<;nCExOG2aCU{}?nmCZP{*_ %Hs0[t6hkM-C-Y`P0|' );
define( 'NONCE_SALT',       'p8*<4*p]4RJ/x0*PWDm C1Q9W916l]E?@kHA}SZ9GI#6] ^:3,Y9L jeFz(aeby*' );

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
