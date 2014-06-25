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
define('DB_NAME', 'vnusaservices');

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
define('AUTH_KEY',         'pT1<O5aB|0&^]{k[|0)*gFal_,D1?p51Dhct{:jtKpVbVf<G,Q=1}{hzX0Qr>B0A');
define('SECURE_AUTH_KEY',  '1vB)V6-V]n~|b;-X&`*~cyA}bH#+K4MZC){O@p-$EJR-+<2/3<%j;$4+v]jb>[!e');
define('LOGGED_IN_KEY',    'E4&>V@jOkx#T)NVs,7*W.%~}UV!5P.je| CAI1E-P%fHjPf(&vU+&{aeD`!{W|`q');
define('NONCE_KEY',        '&flix2ZX96l>l~f*=+$$g+tL8XRtu&}}*.REDbP-s.bDkvt4Z*~R#/na /fD`S6{');
define('AUTH_SALT',        '&ili; 70*(bH&J8qTaJjjZ% HYo-=K+x-ajs+XFTm?(ML/BY7EcOygB`k+V}H1<s');
define('SECURE_AUTH_SALT', '&)zrm@|Ch)5k~89K#{nIJCrqlV~|r6ys)U:+c<W!p<5uDA?d{/Y*ES&ai$(9=jkJ');
define('LOGGED_IN_SALT',   '19,{h3y,@sOi$Ac&5&-wR>-Z?JJnc8d4uP^Xk-h0+i+ExK0NhOv|`HiTRurhe>}V');
define('NONCE_SALT',       '847YN0R|j+Z4PfuNFwAIi;GI;kz0!|#Wt!v/P&wP*|IC;$G;aMqVA,[q}T5$;7?)');

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

define('FS_METHOD','direct');