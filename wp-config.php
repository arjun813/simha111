<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ar' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-2.cj0kgyqvw18l.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '7i6X:C!n|X!Q%{(F[s-@!lYH}_Y%JiFJZ.Gl3DbwT2+#=L<zKCPD%dK|O4%M#;J(');
define('SECURE_AUTH_KEY',  'cfTS(qevc jUBI>/;k}h7EwZBJet77`k~%.BkKqo(+ Gq=NH-Hn5365~8Y3Wa?41');
define('LOGGED_IN_KEY',    '7<oH|;M?{RHu4)oGy@g:{LD 3+S.+,>hd^TC|,l)&7EU2;YHw8tgN|$~WXm6lUYM');
define('NONCE_KEY',        'g1(/Queg&82ant]he6!9#CN>9LQJ2%L,l`^,}/LA7}Q/v8#I GaFFW6!iI`i-|U=');
define('AUTH_SALT',        '@1|55e385j~=Lt$]&tZzoGm#|N/HM];,:AE5g@1Y| +Dp)6`*q-!}8-t`oK&oFL{');
define('SECURE_AUTH_SALT', '?fo?mpSc+<MB1Y`JFAz0,Q5(c|H_zIo3Bcu|<$Rk%$]G/<_H|NIyYs.J<,-OQF$i');
define('LOGGED_IN_SALT',   'oSYVLu|j- __EnZ(-R!cd;N^?GE:>^F ICk_hNg*v`~= h&$u=g zhb8solA`Ap1');
define('NONCE_SALT',       ':GkAc#IV vnO@#mRUBld~)-:0F|r5XpP{.dN8MCzk,DG;*SF,wQs,+T0Vzm^Td&?');

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
