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
define('DB_NAME', 'db_vf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
/*define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('DB_NAME', 'vf');
define('DB_USER', 'da_admin');
define('DB_PASSWORD', '3888888');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');*/
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!GTTWS+/{$i5L2)IDpf Ls1#.,ISTOlsA=q1#KARY1E{AE>rrTMX=b|Yjb5l1D(%');
define('SECURE_AUTH_KEY',  '+r2U$fI8?.sF]`7n?F<L&<(Rq%h.<$Ycf8|[oU#v#C^ZNdxT8tBSyY1bWC.8I-LN');
define('LOGGED_IN_KEY',    'Odz1g5:TKae@vTbF$cDc{@E+:k,v8^?1&UE;#h^(!yZ:Gc:$w@Kbma UN06G)5KS');
define('NONCE_KEY',        'Qqj.wrNXsYtTYJSFsQ`AZ);/#$15g,M+#jl<kW_zjitfPZZ0b$TvOdxfoM8@76GU');
define('AUTH_SALT',        ',cpa_$)|lLrLE_2BTtg6<-lMA9}k`9r4W9HID.9W?LNZ0Nme4|$pPacNBL]Yd^tT');
define('SECURE_AUTH_SALT', '#x#j{</xPm9:-E[QnV[kWaq%<%(dTm~UV@+}Rw5[X4{5-/Q^)_Qres<8:TSV`0sB');
define('LOGGED_IN_SALT',   '-E!ZZsE7?6*8N8N.+~UE8J1*n%ycl3E4+Rx-m{AL{FzNV$DqBzG vW#fNj~=}-^0');
define('NONCE_SALT',       '-3eP&FSX)2j.oTRg9&0I*r~-[6BfwcqEb6_i{O>b*adB|j6M!ufclIc*b2kAxu#|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'buiweb_';

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
