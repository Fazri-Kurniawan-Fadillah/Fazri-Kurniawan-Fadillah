<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thetullips' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J3)T6/AZc$m5.T.ZiEygZxiJ%c.xA_S_*6;=;pX!OR (WN0vN>>TR+7nj8A*BGo,' );
define( 'SECURE_AUTH_KEY',  '.@QQo@x]HiRrg3icFAwKB;^$9gMj9tu9}Jn&& 9V4[f<w [%X%*;c)SuTfq&:3?t' );
define( 'LOGGED_IN_KEY',    ',<rdHqlM]w9/WAAOubuPOeJfAu*;*_eUT6|T&qxghF4L~.SDc|I3G?]er_bY&Lj4' );
define( 'NONCE_KEY',        '5cCz&D7I%9bEXJEr?3N`%n?_tji()4)Z-V#s:B#fS@dFW@3F1(cW4+XN7zz-Jr1{' );
define( 'AUTH_SALT',        '#!C4:=rYt(N,H`FO55wifZax,v{>X}jXk>q4W#=Z%<*K;w3 38gW,6z`8=!?Q}@,' );
define( 'SECURE_AUTH_SALT', 'gVq/9eM<3n~B<vRooF4lIL 3j8>L/7u%B|V<QT8Mqw+]O@1}2%<QpCLF2S`,vY%|' );
define( 'LOGGED_IN_SALT',   'W-/ISW:BC|XA=fzWw#&NS63.@S+#KD{oe!aXsi4!27%W[~)6-r{|~N gif$K5&E#' );
define( 'NONCE_SALT',       'Q3A$N9`K?a=I;+<BF}jC?q/,pP/Vr(#^!^p,STQ/)qP_w62S9nLR2xCdSdEl?]_6' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
