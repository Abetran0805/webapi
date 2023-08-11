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
define( 'DB_NAME', 'wpapi' );

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
define( 'AUTH_KEY',         '.nO/PoUi}gU@fL/0c->Bq[1&Q^V!$!x,DdlIIu3z ?&LjeCfdsd1X7A= AQZuSzO' );
define( 'SECURE_AUTH_KEY',  '&Uo=A1~z|87q}Naeue7Wjcyd{P ;g`&Lq)=a.Vvi6gWGSV|vZilv&[kfV|a.;:5M' );
define( 'LOGGED_IN_KEY',    'p?xW)0E>X@e)Vpn[B:4YJ>&Fx)yEVVG1H56g[%}@v;DfFBdi(d7T2f<(=^B I%gR' );
define( 'NONCE_KEY',        '3IOQX@%x!20 j/Rvwc!Qre6CR0{0Y?M,8D{cQAH.pekTm6xTg=0FpL/(<?qlHGf7' );
define( 'AUTH_SALT',        ' F+Ln8/<cing)(N3@8~?0Ewnsb/%;7@7OH6?t&V5Rgt,<D$!3$`DN&V_Od9iatN}' );
define( 'SECURE_AUTH_SALT', '8>ovRQB<-lbQrgJ$+mz-v12<6vh9cHyQpSUV.)+r/!tVbq:/Ofld_Pwz.Eh;B> U' );
define( 'LOGGED_IN_SALT',   'eLHP hx=OM;HmJN4nZa4wl6he!HxKsPtkSqmTS:0N}EL_A_6ihad5RcR!j(y(57G' );
define( 'NONCE_SALT',       'dyomit]@vh=ta=-DQ [}.;][8G:P6+5aY1cbQ(%h[(#-))6T|:(H%nyCw)!JmJBn' );

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
