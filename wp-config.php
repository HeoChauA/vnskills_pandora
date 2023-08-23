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
define( 'DB_NAME', 'vnskills_pandora' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'Ac<|uw0>]9Jh(/75;J5A/3^=TT &Td 3@i&Hv],(1J|Nu;&S5cGu}mCD7O]M_AV ' );
define( 'SECURE_AUTH_KEY',  'sIKrf2PdVJFI!uS?{o iMIe:;U<Vcw)[1Gagn2;Yvn+|mV0R-5A LwYlxg>F5<`#' );
define( 'LOGGED_IN_KEY',    'c>p_2%H&;s3+?-H/LBr6=8f<U]b5WkMcqLI0wpp*`zbpTn/USN;H4O7d@NiFd0a1' );
define( 'NONCE_KEY',        '8>F4:ad`P.+7zEy0|vb`(q]FJ|gj/;`_5lnP}9E<= -OC;S{|e@A{3ye}?Ry~VA7' );
define( 'AUTH_SALT',        'CM&=UGEHCC{#)UY&jHj}K_Hm5B-U7.kT>:5XL}(K)>RA]8Rx S(Qm@[<kT3nuGY(' );
define( 'SECURE_AUTH_SALT', 'uSa},t%dt%W,_PSe%T&a(t{i7Ub <C%.:Or7a&9!9bw|Le qFIuC!SnR!!40cZ_d' );
define( 'LOGGED_IN_SALT',   'LL.1~8nDn0n1X%4!`J[1(?BPu@tGK{:8Y}(@n-AV:RJER7/S{@Ye,)DDuM@[l^]_' );
define( 'NONCE_SALT',       'qyu@.S1^~^fwf$h:7gW(!u?6B(DuO>pstZTjr~&Lm[,%bp(ZW-!`U4)9::EN8x3u' );

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
