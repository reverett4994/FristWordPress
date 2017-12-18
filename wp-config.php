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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'restaurantdemo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '5x#Bg!o9}gc>Yf*q&> ~g KqGHYE>RrzP%($iu?J.PIItz)(BrYTt.m3j9f<Q_< ');
define('SECURE_AUTH_KEY',  'zj)F@;aETo#+R/hjuE_,D*5N/VUABuF[9W0VpP1Og#L{G%o lp+][N`=`k&-NYj;');
define('LOGGED_IN_KEY',    'v7,ts-]bjbR%iSprJo<@al ebq??xeyfKl[@dRUMF;f{z6:#mbTg@NfV!|XoCyA9');
define('NONCE_KEY',        'Og6K@&W>VDwD:Jvw7fmv8)S/aQr2jZ``P_r6$Y[ZU50<{`:IEr`4>*rEDVH3W;+1');
define('AUTH_SALT',        'QKZ*rz?QM z_3K D~$UL>bGzGHZx7Du8tILpNofiFS+Lzv]J:A??|h5!sU6#rLP-');
define('SECURE_AUTH_SALT', '&:nwgL #]u$XF^aOg:^Yyvdfl&cYeQB,&>)U?d_uEm+H>T{>O CY}cGZUMD1.y@|');
define('LOGGED_IN_SALT',   'Q0qvDa74y70 <P2pwFu8*BVU9PO+pnFeRywzQSGod#rUu]X{L) dUcvFey2l7ji:');
define('NONCE_SALT',       'TH=#Iq4[q):%yp(Y6>cI0i8 jE]`}8N$:jxROTBL]XhLpzA8dcJ@9QL ^jEf%#6,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_frist';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
