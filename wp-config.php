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
define('DB_NAME', 'db_askinhouse');

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
define('AUTH_KEY',         'CjODG#7RoT]ZP,-Rp(Z-J<BzT{h5Tp]o?37SnM6{|FO}MNJ#0(K ZjpVD o ;-4w');
define('SECURE_AUTH_KEY',  '{=?e<s|r#8giH;!e~rDNX4akH9&FSSV`()A]2<M8(xV%m)U*ve71JB,Ux$YI%L:U');
define('LOGGED_IN_KEY',    'PF&L@|Ou:tgb~VG%O4oCfa][3HC&bCTIq[blxY+Rf(Y $uF2Efy!}B>!bI|k^%P?');
define('NONCE_KEY',        'mVu[m}Ynq(!GZyp{tiU+QD!~,r+p@snd+YP{GQVjw|tT)soA/e+v~n{,,AZSr ([');
define('AUTH_SALT',        'H@yjVJ`VeEAlm4rK-m|K]<A*|zlyhV6Z+swPF@_6 6dq+vrR58M=bJD{Slfba9<u');
define('SECURE_AUTH_SALT', 'N/*B5JlE=LFlZr*R3S|(7rUZT%V8}a~YUCCM-nO-&/MKmE&#j<Za|_CNR5]GZR7$');
define('LOGGED_IN_SALT',   ')bEUJ~!_F<th%o$5Wo]eT~e~fj6kphz!&(^Ri!zBY28BSzfkIn9|Q?n9WGMmMC&L');
define('NONCE_SALT',       'M@[lQZEeM<IgFHB2NttO>o<1VXa%U/(V!@70hY35?_%o), cKrkdoU}7n+tlm:Y`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
