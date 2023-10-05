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
define( 'DB_NAME', 'mk_flower' );

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
define( 'AUTH_KEY',         'Y:vJ#o}ure+uMA+G@|::^}4cB@0wVMN|-$7,g*OT{fHmGda*Fd/^o*}9r?77|G,q' );
define( 'SECURE_AUTH_KEY',  '1J(UYhw$-)z`^olgD~7B0%/ol+jr`Kf]-KV[0&*EUsgSzVVZu1{_mIt8K#9#+14V' );
define( 'LOGGED_IN_KEY',    'KdF5n?b,F-_8Aul#CsQvkXpITR,d{bX;KMW{H|eK(*ei.U? }^(KV1er#03_dH=e' );
define( 'NONCE_KEY',        ':@g8DY:g;lWzLK!8>|(m3OzK$lP8qi4BwXk4K6-#fbIe}!y3j8{(y z7.AGa{4R/' );
define( 'AUTH_SALT',        'Xt36ge=deBw*j/ZQ!K{xVnp<Tok7P5ED$@3s>/|I/d3S 0/U] _UnDbPq.F9mz9q' );
define( 'SECURE_AUTH_SALT', 'VI~RqR)A9&<963)2=+QxF$m_n)= |8an&SD6l3k?/yLL#076HP2.!,HKuwOI[5|a' );
define( 'LOGGED_IN_SALT',   'LRb=Ev-CTsb>bZbdlV1uo)pb$(JJm-RU#`Bsyo5xU)H4aSr(,&;%D,32f(m7oa*X' );
define( 'NONCE_SALT',       'mN^XBq<A,Af{<X~h-E)4=ndgn>a2?I`T$XNYWyU4Udo+~~&X]#:0q9KKRq2l*?Nt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tkflower_';

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
define( 'WP_DEBUG', false);
define( 'WP_DEBUG_LOG', false);



/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
