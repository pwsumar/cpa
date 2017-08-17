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
define('DB_NAME', 'cpa_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{%K+tcvnDnng=2]C,*QD`zk7wy!A44D8HEU{6_@C#)_UF>qt[0]%_]wgQLfsN=|n');
define('SECURE_AUTH_KEY',  '$Qq|&[=N`F:>1t7Jzip&*dQ*k$`0>2r,}p_=nyGJh|xq2k#. n)B0IQ2&Xy(HwZD');
define('LOGGED_IN_KEY',    '|52<i:rud<x1`C{Fw7$!KMUa3*c.{TGhIniJNItS97mMq63`pzV$cVJ(TgRFR[~H');
define('NONCE_KEY',        'zO&)/hW4H6S9r]-.rYTb;0w7CDq~K:bvA&nkD,JME_2@1:.)M?7QP1WBV`8A]Ivt');
define('AUTH_SALT',        ',BQZJO,R>D^vcGPE,Qhb7aT6V:Yv2Dg:T3Q<Y Yb.9q~ZjFDeB+HHf?XVi!J2KPt');
define('SECURE_AUTH_SALT', 'FmA PZL{5<i!n4j0m:|T3|hdl+6`8YENpJQYFt,/~A<c/f6e}U<SY?#FH,!YK>`B');
define('LOGGED_IN_SALT',   '<y_=]HNZL~B}Q![S*Ou=Hh7;s;h0hS% Y ]/>Y?>[z ^:@F<cI<3a{<+Tz,pC(xW');
define('NONCE_SALT',       '5:W9U.NajD$ioy8*5T>:oX8{_nh^5R%o?T= :qW3|Cx2N.>Sg1l/^B83AleJq) C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cpa_';

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
