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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'monada' );

/** MySQL database username */
define( 'DB_USER', 'monada' );

/** MySQL database password */
define( 'DB_PASSWORD', 'monada87' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'iM;{*YT+1M|Wvp!#&4#AxP)k}3_bsJrT%|<L8)^u%DO|FrhnhY`rr+SYo]lE3kw,' );
define( 'SECURE_AUTH_KEY',   'LZND6&eSD#8v}wV1It8iteI X(@~gj$5$;~LCV[wR_n_NJ][{r&7<Ssc|]5Z>TQ3' );
define( 'LOGGED_IN_KEY',     'tMyzzsnvrTqb>H;~Bv+iS~%z3?-@:-V3BG.C3!7>Y7K]Y(+EcOAhVjq2{9Z |FM0' );
define( 'NONCE_KEY',         '~OXTMW.HkDzr8XAf++QR4R2K$kG%mXH-tO98i0K-O6;-tu-m}S)$63,Ah!=tft&8' );
define( 'AUTH_SALT',         'hx7$l_6:-c7@.CI@qP?!gEm.el[l]l2v-)pVM,sH6&cKGt<99~6zKJRqs`:f=~uC' );
define( 'SECURE_AUTH_SALT',  '(/i{U;/A]zAheT%AhU2)%BmUY}-dhtU2{: &,uIqHFw|OrVLN[~ %I#)M Vn7P;=' );
define( 'LOGGED_IN_SALT',    'yS@~r-(:hwhh?Z(t~3i=Bo1ilr..$ E0G`&3DZgO:~=oFK[m]y#|/%RS&VYp#$ti' );
define( 'NONCE_SALT',        'QxIM=mSpblWl7lIZ&q*{]=`$n8XZqR_6&]c3&94V2L,2?o/Wu#6KT,y}i17-2`D(' );
define( 'WP_CACHE_KEY_SALT', '$U_&?-nXWq7qQVd3SD`Z{+^(V!(76HB5m,?eJ3~6=yt>C8hMkRGd`Xi;ZPL(,=~u' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
