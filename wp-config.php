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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'horizon');

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
define('AUTH_KEY',         '`S0*C8FePC|o6lkw<l*H#T$:oOs%O}-^hWbFejbKZJAYrZV5,>-alT#AM*KeBdrn');
define('SECURE_AUTH_KEY',  '/X42?60Q!|y-TB~H+I}A/g{Aan*+99m^ir:+eW9lRBp9],<1K|YwP&%Ka%3iIfrt');
define('LOGGED_IN_KEY',    'SoQ+w{S!o73>/!]B|(6}%vW-%CGqHJbef8V6/z@ %|YbtK;(y=;7[990>qWt6~rs');
define('NONCE_KEY',        '8!JdC>-tT;:9QuG6s^$TQGiI$%:oD0q6L`1]{Ng}> ^NvAO)eZ I*-}N,raNeW4!');
define('AUTH_SALT',        '`476thDT8y?Cu7*(T5q;>lH2`I5?TsyCcey[l/AA@)yVcg&u5Y.Y-K}=HgXNA1dA');
define('SECURE_AUTH_SALT', 'lo0#1Hx{^(S8nc G/]?AW)}KDL@S**DV>$5u|(%oh;TB!?dWuA4o6#yG:k,DKv.o');
define('LOGGED_IN_SALT',   '!K.$Ot_A{t6Kxz>y}NG=G<;gGmV]God}Mmq3l Rm}UsuVRDh (HvRLGhr.eF9!>Y');
define('NONCE_SALT',       's7<J2CL=BW_N]armE@^SY2txQbq(`] v`r<X/,#,nL#&>27=D5*[ (nANUX7t&]>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
