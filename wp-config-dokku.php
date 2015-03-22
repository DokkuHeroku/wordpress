<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));
 
/** MySQL database username */
define('DB_USER', getenv('DB_USER'));
 
/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));
 
/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST') . ':' . getenv('DB_PORT'));

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
define('AUTH_KEY',         '[sG`9Ho<tlrA?@|P)LzI?6E|h[XSgMH 491dja@o^4KT82Hc7[}A#pRU_<?--@eV');
define('SECURE_AUTH_KEY',  'qs C2Y>++g8)?}!?p5X9hY`W -@RZr|sxq=HTVhqh_2Zuy:0^[b}*ZWY{`RLl|a-');
define('LOGGED_IN_KEY',    ',YTUyV@|ktYofXY| E?Bz#3h5EohNQY9#p:&--j5Z}7f^$Glq$W={Kgu3YZHU*k]');
define('NONCE_KEY',        '|k<xrxGS +fEcvSvu,y?-g+UixA.&J^T,.:>c5w-#++|,^y62m*fD>a{Q;CW$0_`');
define('AUTH_SALT',        '+7x@gS5~M;(bY-tZ,q|o$9%lYv}tH@371;HqbGM$QFG8/[|R8 6>0s(_cW9b$WAJ');
define('SECURE_AUTH_SALT', 'Za%%,MEp7}-!Lv~1F2c+o-}$ux8cHV^Hblpn~}|w 4|&ljQ^#fPEv^rO5e-llP-R');
define('LOGGED_IN_SALT',   'G2}fuU8m;%.OAYE+vh>}el`-KACP|sY=e_9(40~{InJxfC]f;CIRnqn$2GbI{U-i');
define('NONCE_SALT',       'gd/{MFD[}VB~h-73)IpE%r4J@uHUzF9Yz5.tyH+4%{yZsE}#U|9&KY6d5TZ$9%G=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
