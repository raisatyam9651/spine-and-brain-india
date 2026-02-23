<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'spineandbrain_wp362' );

/** Database username */
define( 'DB_USER', 'spineandbrain_wp362' );

/** Database password */
define( 'DB_PASSWORD', '(B)Sf9p5k7' );

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
define( 'AUTH_KEY',         '9irnbti1v6xbbwuoiiegcltfzhxwfnihejjdy0kxebutsq8fdskzihqjjudwjc8b' );
define( 'SECURE_AUTH_KEY',  'ajsxbcfqyrbnxmtokibpiz6zum4kamygwei9b9kybm8jmdk5ijy64jcokagxdiua' );
define( 'LOGGED_IN_KEY',    'cgkbkljmlockcxq2lrvjrsivxpz8fcmezefzqov49rivleszy0ay4erxf99d7vi2' );
define( 'NONCE_KEY',        '99wuer3xlsbptljefsayil2dw4afuaxedr9zvom44iiyfii39rhj8egnioyeztq6' );
define( 'AUTH_SALT',        'rcnc4fsgsgrubuwyobav45gzeytsjtqi6nr52lvykhab2efqi6jtx0dyrjby04wh' );
define( 'SECURE_AUTH_SALT', 'xeabi0xevwlx2rxiiki0aqvrfxcmsbuoj8xp2snejrf9dkacwncozbp8ohy82jb2' );
define( 'LOGGED_IN_SALT',   '3zdz7getrsgaptmmvtyu4pkvfxyqszodpslbrfbztmno8xuoqvag94x0u82abei4' );
define( 'NONCE_SALT',       'b0dj5l5bllvv90klrctj2aiex5xopjxfywpyxhekstdqxil7y1baiyl5nbipnnvw' );

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
$table_prefix = 'wpmq_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
