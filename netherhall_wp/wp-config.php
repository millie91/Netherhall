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
define('DB_NAME', 'netherhall');

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
define('AUTH_KEY',         'td|1w1X([dZbUI4MVr_|{k5(zsVR%M-=OvqY.m.DyBwCshz +Shve+?Clg18m:xH');
define('SECURE_AUTH_KEY',  'H%:Jp00Xfy&x$0%yk7j?<b/q0m9yGTf6THt?#i|`4?l{8P%y=aSA/o2=%{UR43dJ');
define('LOGGED_IN_KEY',    '7OO*U+_J%s6YGL2*IR:+MsB?2{<<Df)h+~,LzSlA2^^Z=#Rdm4V! vc@+g#~3JAE');
define('NONCE_KEY',        'mzuA5?D{ez*e=pe(X!ohKLS(z9t-iz.5P+(E>plM]0n__K%UBce=m.n.A*wRACUC');
define('AUTH_SALT',        'Sebx$@t0Jb8B<H)o9N%!Az6x8h|:}jcx$wArqw`&-Dmtd9URR~3.$TgV4PA%NiTU');
define('SECURE_AUTH_SALT', '![hhU/1OLl;% |:HInUKu]XIuaYt- }gQ.$$1wt_@z~r@eek^~+^huhTp_-CjvYU');
define('LOGGED_IN_SALT',   '`=J.K{^[3`fV8l<eyrn6h0|Z$frCub7nUYYcLTlRY([?58<Wq`@E,N?6TCk{VLXJ');
define('NONCE_SALT',       '`go6wuDI=,beQ,M])1b`Fm~w@KKr=.{n$did7=QJm&(]IOrjJd^F){uF~Vg.sO,Y');

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

/* Multisite */
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost:8888');
define('PATH_CURRENT_SITE', '/netherhall/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define( 'WP_SITEURL', 'localhost:8888/netherhall/sixthform' );
define( 'WP_SITEURL', 'localhost:8888/netherhall/sportscentre' );
define( 'WP_HOME', 'localhost:8888/netherhall/' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
