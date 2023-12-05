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
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'uHMV ,jn1%+#.e,;%7s./CSZ#?Vm@DK-@z5^;.}_zE3@7;U6p|3r6;R:/p.vls }' );
define( 'SECURE_AUTH_KEY',  '4@m_Lt  2X4/E)<KD|}jMDgY##lI$_R$C4}P/Iy>PCNs-*&z1Gba4|1-Yq)v1G0v' );
define( 'LOGGED_IN_KEY',    ',j+@*b$CcwB<UQ|i]-;8ug9c=GH|*j>5O~pUeQX7s=8xqDpx3,tCiPaU#gs. rp%' );
define( 'NONCE_KEY',        'Qn$E]Q-Sr7Ru-=2N)hz}]:xV(Ty/U?7_h>b]:& .YLfx@OFYEtfkZf1DGPC7,5CD' );
define( 'AUTH_SALT',        'A})M~y+`_4SP$(Curk<CO{WHLlY.lIIP~n]BMc}Fo3C~IMh)X;Q94r[YDZLk-l4L' );
define( 'SECURE_AUTH_SALT', ':3,mLB},Cj#JRWdghwI{QdPI,tS[k#}F8bM}3Wulb7q5#r_4J]$;=-ec%_yX^fLt' );
define( 'LOGGED_IN_SALT',   'Tk;qaT.WRg1o]6:|QLF=q-zTZ{wO1d}}n9BZF/77V7a=8TL((EkxCNF`v/!F!Jif' );
define( 'NONCE_SALT',       'xh4`k4}(OYfGBnv&l1UbvP,;C7-DI@J Y$[$@H.CqW8P{raGUi<fB#C%=mY8MADw' );

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
