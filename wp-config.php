<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'wxPmo9>z05g=k,o9e7p}md=R9JxnV@RAnTE{056*B[-[5oX4R-()|udH0c={O<$}' );
define( 'SECURE_AUTH_KEY',   'E/FJK2<,}suLH|vXI<YWfyn]aBoi!x8@`W_,}DC=T}[m)x0)JJJ#<s`GRRH7h8sq' );
define( 'LOGGED_IN_KEY',     ',=A<Wc/2.kV/o0H#CWw }-yQ/Z1/Y=f)zv<kDgDNw63K!:FvWy;^}{-[8%Aq8A=D' );
define( 'NONCE_KEY',         'F?DQq=|;#$sLQ=5B(F4@#DOHo**c7YZ`jbYzfC4oN yOO?#[))zR@ct9,j%Q>h3*' );
define( 'AUTH_SALT',         'qhwzoP&MrtPsj_{HqJ1z7nr`zg)K.S8~o)s^d#R!N+7mp_}@%f@kV93UJ%9Rf88Q' );
define( 'SECURE_AUTH_SALT',  'Sh559h9$&knK`ksv]V[_Ou>Azy9({FE/S#d?AT<KhR!b|=D(oG2ZNoaTO5]o(Q3B' );
define( 'LOGGED_IN_SALT',    '}S-[YEDZ0WL=?5U*lmM?1_H:e*g;+syv4Mcfk|79F15(:04^mwr%cZ|!haRDF=tZ' );
define( 'NONCE_SALT',        '50M46n)m.Z.L2tr5GvkRQa^_1=y$lb(xbh,/{eCSG~r^6T=v,an=s7`,i+KNd]@ ' );
define( 'WP_CACHE_KEY_SALT', 'x7s4=vO}!nd8Jy69?bfkuPo1kH~[mM7vwd;TLZ^zejqd?NUQ|q6,|$!J.^oTYKZs' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
