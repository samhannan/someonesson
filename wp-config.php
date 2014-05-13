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
define('DB_NAME', 'someones_son');

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
define('AUTH_KEY',         '`-:+A[@Is0u>2ib+bs[G1X~;|mQZS-8lw++_:E:2G:%s^57a*a+<c-bA5]n!Fl>6');
define('SECURE_AUTH_KEY',  'P[yS1>a`Z}m^j*<Q;#0xh6(H;mL^M*%+^F:f_R|Cp@E+#3eBPLG&j]+h@^ce(iNz');
define('LOGGED_IN_KEY',    'eCTZ4pcVoS~x;jSx84]dn_kVx?ud*+XjY3WGC!>v=|S5+G[|kP*Vf34U4q-t:1!N');
define('NONCE_KEY',        ' !]7W,>LTF1^?R}WqcH=Ar0h|3t!_|k1VkYe+-$Z9,g|;-twk+;q9FyE^OJ,{c)S');
define('AUTH_SALT',        '%pBn[tIH7Oa.n|>| mmQysJG]J+8Q/o(}tawvG{NBBdUy^ItAj]dee+9r+97YEL&');
define('SECURE_AUTH_SALT', '[D?-V.oW)ESOpPA%|^A-~+<nlR#Ag74|CC+W0f5a[8HH@[4pCfjJ;=:c}Lb(>dS_');
define('LOGGED_IN_SALT',   'Wr(.g^e8*hReoA5UB0+0.woaM9+nc`}Qy=w{XesqywEr>/fB>.L}7YC-QcFj6|LX');
define('NONCE_SALT',       'xK/mEte)geqp8@x!&4FF!ZP(j!.aJc{#.]!.;ET065/fo+=ss6}TC+v`d_mw*}.u');

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
