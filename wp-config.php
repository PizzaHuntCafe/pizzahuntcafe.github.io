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
define( 'DB_NAME', 'pizzahuntcafe_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5F_l*Jm.3oudWdffY<Y[9$ 3=.jh7!IgK)TkIx3pp~}` >t!<@cC{yp;q9:f{ap^' );
define( 'SECURE_AUTH_KEY',  'z9};6xU_p~UeBbdZlvG?hm0XO8^|Me;-kAJp_XxA!@#B 4SLq|sf?^RER4h*+_#G' );
define( 'LOGGED_IN_KEY',    'kY/,`^vVmu}z{ubyH^`/2SA].G=w(L@~sr0CG]:*,<xgeE{cjoZdw7|uj;L_zW4)' );
define( 'NONCE_KEY',        'W`&(!R50.k_Giv|^:fzj:<w_[t&fsmMwB;7>#(rznBaZI.XhloT sXyFN5tboqw2' );
define( 'AUTH_SALT',        'Rdyyd@yzaTkC.6{Q]EKwY/p7/}f0IIGLW$ZdD4h:)S.nb>`ZQdE&_{M >L]e5+3m' );
define( 'SECURE_AUTH_SALT', ',<$F`y}[r(P6&vBE{;+KH5^i>Ry;?NBe56V?C@B?ViKw[^]S0qLh1|[[345+>Y^8' );
define( 'LOGGED_IN_SALT',   'O00+zDt-N`:dG9}`[;@R.Y=}f(RS:)S~ 0>=|lp}p ZTW_Yabc9JB{wGMglF40KP' );
define( 'NONCE_SALT',       'MG6/SauhOgoOV}.;%0#eMD|ukM5%[vv4L:]y5-W0ANoCIah%~q$p<5e;e{p?iYfL' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
