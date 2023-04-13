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

define('FS_METHOD','direct'); 
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'final' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '!#@xu$Io)b2f1h;I$=&4r l1GB! wg[;!]P#qGig(Q4])~T9hf1}&`+z=&c2@E|C' );
define( 'SECURE_AUTH_KEY',  'BP31bm!vrbNCT!*|lv]B[!npO3el`w~]7Q3s[?5n{j<L`U ?CcElic&w/vgRioRu' );
define( 'LOGGED_IN_KEY',    'p{`a`xs2b%_g*UJf9-;p@zekoDC mqEV_<$ AO&6QCJL>^Y(f]|;t66z5M6cQ>2+' );
define( 'NONCE_KEY',        '``UxoQVA_!ab{CNTV>wH<x_d{D< tMVO&nmv5v5/=lR)4,?cF/!mCYC#7<7@/h[D' );
define( 'AUTH_SALT',        ']B-_/]i+E13nB|zSD8k?/t{jLDFo?K[!zc$  ]5s6oQmG9(a!Jp;hJ7_i4*UpNOt' );
define( 'SECURE_AUTH_SALT', 'QY@O~Co<ZP:Aqf9fU& P?jXH>^DGq/{=$b:_Za)8s6Emn60U].YnMaVWzS5nl1=@' );
define( 'LOGGED_IN_SALT',   'h0IGuc6[/|#cz]~T<i9-K%C(?97&U8V9u!pK)H3hl]JoV2JfaoZ `nCOXm=to9ox' );
define( 'NONCE_SALT',       'AJn-`CWeoUcxh*U?Q(s}]|]29 /SWY:M-p|#-TTy!x)Pw14/ C-5,aP^AeaUO~/D' );

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
