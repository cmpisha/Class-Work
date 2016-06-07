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
define('DB_NAME', 'wordpress_1');

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
define('AUTH_KEY',         '#AX2s6D0SDYetGNCly$ek8P-n%W6OMHG|V7(#LI@?427|<@sT+;94fb0Dc3{|yh&');
define('SECURE_AUTH_KEY',  'Lx?^,ZsfWXaf=}d.mB3Ho>Fj@vB)W5*_)W@JUlCHk0EcyGygKaBhPOWe6o*afts4');
define('LOGGED_IN_KEY',    'W|u[t2`enf&&faQOqnLHF%=F7=Y2TzDIeWc,_I~.(9K,T$38ynNmnV(~[_gB9E>e');
define('NONCE_KEY',        '}harZQ@q<0S( M3^T*bJS5Kv :z2lI`ZnHnO]Rx,V2J889*?OD<.,vLld`4kwtb&');
define('AUTH_SALT',        'W1@jVT0m,pyk]Rin^r5JmrX])`yt,uCcbBW_n}1]5t8dog-8pO%#_O7%X<CEs^p]');
define('SECURE_AUTH_SALT', 'sdOttCUN#)8>$I=/3~=$s,AIn``Y F~W.V]R35@N;{eHfTXb=>Q:VCz&Q=D ZA-s');
define('LOGGED_IN_SALT',   '+$L7sVh_&mV~W[Yy5KUKc2HNIBdx:D#OBb>5$Hk9$w3I&>Cs+9S>;ESwP*xv)1^/');
define('NONCE_SALT',       's%p5Cp[IJo!c5</UymFV*hL^yWM3Gt`h-p.307E#eue Qc@|VnW HSBv/}UZm/M.');

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
