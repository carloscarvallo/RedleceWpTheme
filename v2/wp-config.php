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
define('DB_NAME', 'wp-redleceweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admincarlos');

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
define('AUTH_KEY',         'S3qS!||Tcm2Ws?|i$J okZa+>LjN^ SV{+5R>r 0kfz{mO{?),oCW%vw4Hc&F0}|');
define('SECURE_AUTH_KEY',  'k%R-#$gKb)jHk`~?P_gnK9,4U-6]b#uD(nK=QN{>bgMujaFK[V{KzSvw/KZhxsRE');
define('LOGGED_IN_KEY',    'O+ER,6iO&c(H%d@-37_c})E#A*B/-4u8$5=:>`WJ_LpV8K<8(p|>^5NeKW6O@!0-');
define('NONCE_KEY',        '5;K!]WzA+6,:O~bOIpS0h&`&eu-;U*Mx~UnqQ0?nr&H44|]RUMc|k!,1zusa^&7|');
define('AUTH_SALT',        '$02J4M>#)1[2{EsJpe+DGubmIM4Z+@A]KkYZRb?e3)B%[77K:24>jsVo,~<&CkKV');
define('SECURE_AUTH_SALT', '{N.Z(11<7ae1yjgRcV9)9B?;+9.$-+jN8XhgQtu!X,NVbA+,QV1UtEs:wA1<%;_;');
define('LOGGED_IN_SALT',   'p9q)cT/Z9?p0d54+OR]lylH6i)G?E~YYYb@=`bHvlq5C{|kj9h=DURt;;vuJ:zc!');
define('NONCE_SALT',       'HG!-Y}ZI2O7LxWQ@#I035TjZHhWi=mG$Y%ArEU?+kRUHyEI<cw/VtMrL!cu,!8XY');

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
