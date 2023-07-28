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
define( 'DB_NAME', 'mywebsite' );

/** Database username */
define( 'DB_USER', 'pratham' );

/** Database password */
define( 'DB_PASSWORD', 'aUGMEE1[FEalSNWQ' );

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
define( 'AUTH_KEY',         'AS5zd5bo;2m>md) e7?)}/Ze_Z3?&w^S$bm%=,P%lsE1)R#CSS~s!CSa_9q]Qr;-' );
define( 'SECURE_AUTH_KEY',  ' RC*>m[&Ms{&lR<XLF:<H4e:{lqME|tHNrbJB<+g?{A-4u9>b+,K=~u@VJ-i(/]Q' );
define( 'LOGGED_IN_KEY',    '!aB[R`ML5qzlG33L&*H]c^~!> xUy>&!y7Tv$<!jnp8g)y1UTp*x`$hr+]*xPySK' );
define( 'NONCE_KEY',        'pr&4$3RaYfF_KRZ1r9muidS6QbtRj.7]sJ6;ZA.7a~g;Akot&K-ttPp0o1VKwb?A' );
define( 'AUTH_SALT',        'gkZ3f;xPIA[r&gcLU.-5jafTeR<P1hb*ytDN7_,bLVyy+*JK-Tx<,-)g$Ch+ZM/j' );
define( 'SECURE_AUTH_SALT', 'nil%-)>t9E (_0tD,vbErVt}m1I~Bs{#TlLt7/H :4;a]k?SWHUM#b?TN&zCQ|c3' );
define( 'LOGGED_IN_SALT',   'e:He01(:RGX:@t(PX152Putl0e^Nfy<Q+dl6OW/Z_Bewfj@E6[PicN*WWzOBi|g|' );
define( 'NONCE_SALT',       '0F%_8Dsu`du[T{b/80<oD.GIwr5K=PyYby~ I8szYVlL7Xj}d33tA3x6dCG~1TKW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'azr_';

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
