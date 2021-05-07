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
define( 'DB_NAME', 'gameStore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'FeJ_MR2/hPYnS6mI`##&Yg.A%#TlnO_R{a<JJev]4/872xtD!atQfajGE7I,@dKK' );
define( 'SECURE_AUTH_KEY',  'Ks4u<{_9<4zS{?)X;0x7Qhg[DS=4%#Cn<~l3^(2-W H6ZEg1}zzxejI404yv`c|f' );
define( 'LOGGED_IN_KEY',    '(Z6c;K9Yh|`_]yGR?/l^^;YAcUBoy}w%6?ZPa.c@Hv(^/4ean7nG]UbLU)b&pt_+' );
define( 'NONCE_KEY',        'Xc&!=lR2TJ^EPTyVlSQ%M7fLBRS^|mu#~*I9q=mpS%8wHB&a,UL#@LkG<VX)j`n$' );
define( 'AUTH_SALT',        'Txwou&WN^oq*;kPN7qH%~z/V<k]TEHR-X_az %hak{C0rYF0,d66|pL8N,`:FHyH' );
define( 'SECURE_AUTH_SALT', '!@M{->@AzV _B*S559HOSpb; >L?$5o|fJhDzJk|-d={a(M(/IJdLg}3RHPe+]NE' );
define( 'LOGGED_IN_SALT',   ',)7m:lyfAg.)3m6qLJ/:5>TlB9F.+b+s O(q]R=pdEwSdCusnd{h6|:y;rTi(V$r' );
define( 'NONCE_SALT',       ']PMOewKVK4]lR-XOuE~?#e54uP.l=0+1DxL@C7]y~eLg-+w*,|5^I+o]=$H!Hjdz' );

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
