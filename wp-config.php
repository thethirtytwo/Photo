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
define('DB_NAME', '1666923_second');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'A8a UHrG|i@k8Y@x?uUk&#L61 8&^Mm0gn)-Jw&y?-+-bKf-(-b)x6#&-IgY-9SZ');
define('SECURE_AUTH_KEY',  'Q$96r+29 j^jF>$-*|vO/3Pz.9,]E~Ld16/IgpX{Q!s+esqBVd&=zPQmbY5zxsew');
define('LOGGED_IN_KEY',    ']$h%3SoRL1z992YvJBT0YEOy-B:=5)4-SV?r<V)X#+;PTLt9?KWMc*|x;EI^4Rtp');
define('NONCE_KEY',        '!=d]X)$HwqzS:a3x{J$h}j/|8hG!E j=w&y `(3ibTMOLmO,ks2o{Q(/{da6`S}U');
define('AUTH_SALT',        '-E[~|mdbvu7BC#IHtk<<@J}H+`:Z2J/zk<eL3]-4x?jaK{@D6Tx3$nJR@I{Bi.Ll');
define('SECURE_AUTH_SALT', '`i@NQR4MyxpH+P-@^?Tkmf+7W`XR-8I0|LiL?40[2SrbQ)]D(` 1}@jR>IO^N==V');
define('LOGGED_IN_SALT',   '@%cN%e::rVIK-|(qFs1cB3Z#b0 =Th`pb/E+,)d DIs< -3O1t|:m;P%;e(9+t5c');
define('NONCE_SALT',       'W-]k,p MY`O* uPF`pu44vr-Dk;z-.!0pKBw}LwlZaRkuVyzjbkuF~g=0F}V#qMx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
