<?php
if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){

    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
} 
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gasnownowDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'gasnownowDBCont' );

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
define('AUTH_KEY',         '$@R^-LMJlW`-Q7.h-YeY{.J_XR!+X:2Q3T=[66PES0=4Eil:fTn2<p%6D+Co37B8');
define('SECURE_AUTH_KEY',  '%v O&Xo2{b1<)_Gf7P>b;EP+)<2,=nlfKHc4:WS:F>lW<0&4O=|wErFai z_@^>F');
define('LOGGED_IN_KEY',    'O}lj^IF)w|o7eNz>ZoSBnQ~p8M^ph|XcB<T+Yq,R X|wjQ 4hh/,?hxbmO;xo-R&');
define('NONCE_KEY',        '3flJc^+O|skRrZW5)w3(EnI,a}9X{8RDJK@lP<@[UHL2pC~drx?hk>it]^meJmJ[');
define('AUTH_SALT',        'kcgcab#!zDb2,n7JrfaaOPsY,o5QOLY|{Iy!3@Fwozh}>>G*q1YS[9v2YQc2yv3G');
define('SECURE_AUTH_SALT', 'kl;7iW[Vt<453a4j<EI,#MT%;T,l}f(.>H_lwFL4Kz%D]<GVP3=YPb!qtigNksSh');
define('LOGGED_IN_SALT',   'PfCouamX+vE[=0A}.;{UZ.C9F=tSc+Wl# pH(0lUW-GMzX+EP/$;qxi27c49U(1O');
define('NONCE_SALT',       'B[h}i?Yt}-PvPv7.WceA=oT+<43!aHsj5-Sf1J),h_SG},Te_c$%){jxn98n<1Ht');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gnn22_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_HOME','https://testedweb.ddns.net/'); 
define('WP_SITEURL','https://testedweb.ddns.net/'); 
