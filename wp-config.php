<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wandegz_com_web_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o$H56[$iJol%]<U`&,hg-YjZc|e-Nr5,_Ag{7X%-KsL#-i6]=<zjcWSNqu=pNsqg');
define('SECURE_AUTH_KEY',  '?f)d2tUx#g+/+!]lwCV0!>:q(|3 G#Hy|8ChsJ.ca4a_6w!DlbJEAnj+b),9&@ha');
define('LOGGED_IN_KEY',    'V%~@b!SI`/ao^*o/4LB?.7P2,~~Qagm)klu,q,]oy7V[KTV-e*$&;p99+1~yjxHV');
define('NONCE_KEY',        'y-uhT=d?xs<MQB#iTI^m8_4|@OpQf>C+i?=UZ|DX86]0M>}Syc6 A%d@C`>IFd+z');
define('AUTH_SALT',        'KHkJ-qc}HIIkGMD|+[Jg?gq7lk_a?[;XA)Wu!OE:k.)dgGn^!=9zBY$-Oa7N}34[');
define('SECURE_AUTH_SALT', '}1o+M-Fd`bvV%?B;/zBUF?D2J7Zz-#i(}Xq<lpL*6]H 7):R^e4+/$95E<xHWjxC');
define('LOGGED_IN_SALT',   'lVY!Obq#G)K^L-V|Ka+U_YQ! ?%4E^{ a^LNs7Ua^{ 0Bu1xI.z_<= gnxzQ!9K1');
define('NONCE_SALT',       'hIWK}Rw tBDH(Y||g<6y-hy)}h<gTr`-$;dz{J-~O=D(B<]o;QV}&FU|J)h,CAS@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wandegz_moviestore_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
