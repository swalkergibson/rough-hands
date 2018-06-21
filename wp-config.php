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
define('DB_NAME', 'roughhands');

/** MySQL database username */
define('DB_USER', 'roughhands');

/** MySQL database password */
define('DB_PASSWORD', 'roughhandspassword');

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
define('AUTH_KEY',         '.=IQev]/X/;`K|x.j|~6$5CNNlkIj}096+8gwxybJB: z2dM}z8>^3|qIZWr|(`+');
define('SECURE_AUTH_KEY',  'fJ~m[-vN80CRvDFa;xSma&V<ZqGHNs*fw~{JNqxR8e@1?jNFhz-y1:upgd_6@AS1');
define('LOGGED_IN_KEY',    'TZYX?8wa;UL|`=xAd0hQN^c]zf2Mxg~1J3QAN|3c]o.E9wd7UPwMvB&+I#5nahKW');
define('NONCE_KEY',        'w[cJFP2|u.SmcSMfx,..U{+O <dk|_mYnWB=AXj5H}$+R/@%*v1ZH_O5W?7|J7Wq');
define('AUTH_SALT',        'zEh~lu+4^|x6o7fQJZ_h.q_^`ejlg{cPLjyBoUcl)iK)O4:+}-)z0C( oT-Y]eB.');
define('SECURE_AUTH_SALT', ']CBri=yz-x{&Wl+~+XBY[sR~  U<l4F]c/M|rsQ_4f4tA$rw&3s@i5^V$M)~ISs:');
define('LOGGED_IN_SALT',   '$Ol82}s4#8[4#dh6Mn0.y^^dw%:- +1zhGm1 $&?[u1_JI.*NW-h;UQJ!L_QT~>V');
define('NONCE_SALT',       'G[+D)4-C@C9Bf)Sq!?-lgj Y~ynC+k,+28-G1^x|{>QTxG^n{+NE63rp4yno5Z8?');

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
