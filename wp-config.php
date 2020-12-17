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
define( 'DB_NAME', 'testewp' );

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
define( 'AUTH_KEY',         'J,NtV=8E@-!j[Rk@=[6 4~hG H:4HQq4Bc3(HEZL`t!:{`T2stn8Xgi3W$/WyKtP' );
define( 'SECURE_AUTH_KEY',  'GBY<EnbKlUvPY7S )Hp{r/*wU6@61i5M}.>*T:^W[9I?#vJxkk{&q=BcckERUI|#' );
define( 'LOGGED_IN_KEY',    '%eIv)zHB>8)h&:HGisWKCi{BT-T=uJG`arLj]X^d=]hnWP7?Zdvn{zf{~}a>zT+H' );
define( 'NONCE_KEY',        'E1#v@_2HCem+;RR.xAv|9|-S>E:(L41y}ftG_xvuoTO[l87K.Y#:I4FKK G{NPGm' );
define( 'AUTH_SALT',        'JQ*7avJZlmd/2*dqcyPJEaQ;;;;t{T @5hhNHSr7/0#t2,RM?HAOHAoSpmL3;P1_' );
define( 'SECURE_AUTH_SALT', 'upRGG!RcOjL,GGr~uC^[5Co5W4g4c^/g6u$wojO)M(zko{d%xwk!AGK!|iat)%{^' );
define( 'LOGGED_IN_SALT',   'f.s) RHtl^B1MEhm?~%l?_]-CJ7uu8QKk$4NY?eocU2~+>yX8+P(rrzYd[r8W~Pl' );
define( 'NONCE_SALT',       'wEgldh)~_cvI}`K*SII0<,YEsQrM/Je;v<Q^2aKzY)m=cn^KwR_fNksq,#~_0<,A' );

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
