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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_habitfoundation' );

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
define( 'AUTH_KEY',         'Q+8HQDe(X?I_tE^Jp<BGxPf!.F :gUUqe6=Piwl:8 =~CosnfU%(T`){_D7sp+b$' );
define( 'SECURE_AUTH_KEY',  '4Mw0E8L2M,01@yIk[8C69d870ke-LU`0r@a{qu_P}YP$_UV<tM9cmdt$&S`C/x$j' );
define( 'LOGGED_IN_KEY',    'qzmE$=YA;Vs,2}]nX&!e&!s @E~=0bNYh(Nk$O)]UF#r[3l7H|7xJfHXq@eyvReV' );
define( 'NONCE_KEY',        'v+&t68g)B7*^6Fw$cx}l)~Xeq5+?6A|!c5Q^)(,#{t0FeA0mgq71{2IvWow>bm5T' );
define( 'AUTH_SALT',        'og6QX#z{8gtD:<:LXNj<A0m=!] [hiz#7tlqhV Os5$VM+u9Nh/YAwd6IAFcs>Bq' );
define( 'SECURE_AUTH_SALT', 'B(l[#z@GTi9@9J>IvofXL{7)~@9(%3zabol1qqD~}x-m8#vFhxQUAMPP3{e@?9Um' );
define( 'LOGGED_IN_SALT',   'Y)Tca*^9p(uM7q?&i$M6bs#jw1jdG1[6Iz?0cAfj5$+jol=.&q;$HnQ>`B+sI=20' );
define( 'NONCE_SALT',       'tn]?-crM[idy>@zIB6b#}v.Sq 2W^5 *DoGqfbj]oU11l{_f2_{&Ru,^Ic|Er~7r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
