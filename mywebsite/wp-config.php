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
define('DB_NAME', 'myweb');

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
define('AUTH_KEY',         'r[^I+gu_zBZ^v|zl]EL[|[@k{w&?XaK7Uuzo9)UYre16rg/w3g4y6lTS`[9v&}MS');
define('SECURE_AUTH_KEY',  '}d$>/b@I.8$n=8ET)*mh/};tGtj+Qy?Ul+T}ulMd9mRVU,sG+n*wyU..Nq,fp|mH');
define('LOGGED_IN_KEY',    '<7(-[(2mA}rLfG*J&Mb.abZKz%/e{0.mj91e$J_ZRNNt0PdM!<sgWG37bCV?bLDS');
define('NONCE_KEY',        'zWVKX}1I6zg$[d5.|VlN9>_lk5`+(n0:keh;xwWA6m{f+.p/H<0w|+0d@]cB$jA ');
define('AUTH_SALT',        '$^6(4.HVq~.e(4.(SM!{MRQkr{^te0-Enk8WCNrzU4JnHc[]F!Zec,y$2/s,ILb1');
define('SECURE_AUTH_SALT', '1C=_)|@4y$*5(XKFEM=&)2AUP|rBP@9_()YLiv3hA2#QDgyMf]!a*};!~Hx(L~$_');
define('LOGGED_IN_SALT',   'a;eltq#|z#i3!e1PzxZu q-9wRRU0{R@Ka17%~3JJ!)[>L|Yo aAi6cA;_&Se9xm');
define('NONCE_SALT',       '@cLEICX5)_(`L?oY4w%yvqI24|GvStV/]~yY%dY5=:{seZqbRjzHm8qfl9ZW;/w+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'db_';

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

/*Multisite*/
define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
