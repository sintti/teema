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
define( 'DB_NAME', 'teema' );

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
define( 'AUTH_KEY',         '68JEoz),9$; Fva*Fz~In4I[hI$E6?eM1cS}75Cb4hk`dc)P^J/!,tI2$;uNvt]N' );
define( 'SECURE_AUTH_KEY',  ',:1Ub[_45hW1Fh|F<$erl_*HM&^Lc(Z(K_DT_E[`@c;5%Dy~M8n4urh% ]D[I@xX' );
define( 'LOGGED_IN_KEY',    'wh.z?/a`m&U|IGUF]r8E>0x.z*@3,<jAVRbaJFgB}8]KnZ@`y8kBT4W@:>lD?g}`' );
define( 'NONCE_KEY',        '[4$I#DF6=.;&>>$st1TT6@zM@D&K*@nUu{=-l({ho283+<RCs2ob[?=31riHr@km' );
define( 'AUTH_SALT',        'aq}Jlso*EaYh&bn*N8kfeE3Gux]<]Qb%*PJs1iDcPU!6hp9?mTSo6<&6,i4ROUq2' );
define( 'SECURE_AUTH_SALT', '<IwdCy!K+af=x6gP,iE*?3YpNd1]{b;8z4VD{hu2<CquhH-BdARp+C7N5n[,iXp?' );
define( 'LOGGED_IN_SALT',   ')g*AJZJk`p}|upX@-@[#vIk4y,X*?8~3;wPi|3F+,xxfo )V<=*sT,wT*Sve] tY' );
define( 'NONCE_SALT',       't<6T4%!X{b|RL}at&z@%WL+<1rw/yE,LGTsa@X u3}2, d=0ziLCGc}};zvvmTV|' );

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
