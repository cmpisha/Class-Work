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
define('DB_NAME', 'exercise_11_wordpress');

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
define('AUTH_KEY',         ';doo>w,5~!E{[;VpHi}EIX9?;Ab8KSXZhu]+4q(UrT-mFb4W*@^|:%<5moR6qf3s');
define('SECURE_AUTH_KEY',  ',bGC4Y.7Ng}&-SF/uA[;5Fw@tBZd}.S)SmAMYyM^is2)k,MPH,i+F5Q6l0*bWuNe');
define('LOGGED_IN_KEY',    'u|w3Nrpddy*g@1m,zULMN=HT1bu_K_6B>8:xc&2jA ,EcD$daI<CM69G.DL%w,L}');
define('NONCE_KEY',        'q2JOL+~[|Lu+^eoqV{TUC&BBq`lIFRHQ4O8GnwQ_g0([L-oe<+)Cos,FF79@8to@');
define('AUTH_SALT',        'iUa@2*LS(.^HldJ#_<bv9C,K20oHbl<c(v1Yu8.m$P{UH*`t[czvGcM*c)q!.Iru');
define('SECURE_AUTH_SALT', 'VNZxBZDPD*sZHzLj*ueUaLM%/pL]W55;0r6A@+4T7Ivu(Lb/Yw{T}nSLV7Cd7Gy_');
define('LOGGED_IN_SALT',   't$Fg)9wgJ_==@?!^dMx9kXk-SIaod{?ZrY`Xu8iJGZ5R<-8i.X)fnR,u!b_eWNp~');
define('NONCE_SALT',       ',qPZS1g)O66691yYI@Ss/6$;=:bid8c? &GKN>e|C(_k4y3jEr!TH0<qHMvyMp4!');

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
