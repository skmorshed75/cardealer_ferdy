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
define( 'DB_NAME', 'cardealer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'j[KV*?^b&:>%-Xlb7X{Zw-@)N96R:?t(Bbx#je6T~& Kr|r96TY?u|&[F[02OOQy' );
define( 'SECURE_AUTH_KEY',  'jUR*wNPK]<B=Fvi-v!p!B_W&Ximx~jyZ.ObO|g[c}1mu{&cP9d/jnS?+,A1/s{OJ' );
define( 'LOGGED_IN_KEY',    'yH ];;20VtOB~Uu_64b7BU@6YPQZj7Au)XB [T; 5PD0C/;A(l|ujqU~`6%;d{Nm' );
define( 'NONCE_KEY',        '|XG24omFWYW0kpq4xaJKbB[4K},*5J+XlHSgR%}SZ-C,]Hp:hX(JDVE!I>d5NTlh' );
define( 'AUTH_SALT',        '}RaYNsJ:N$C&.%]OFMR9A^d7(:,b[bmXSX#vk9aoAC3(e#|6g-2oCy3*OQn!0@ $' );
define( 'SECURE_AUTH_SALT', ')fZhU!=<]Q6lhPyueB4vIB0la%s<-u29L6Me[$LM%q=:rkcIDNWK?x3w*)(aH;(B' );
define( 'LOGGED_IN_SALT',   'PLsO35 3:/:n(V*0XLIg/KRj)Yie5JgraljZoA$sfFC%mvxr+I6&{E1hxFj9?&.H' );
define( 'NONCE_SALT',       '}QWX~SjFfc|vWazRBqTuJWtXM.;2Cze9r{~1I+4rZ8>pzwx/Ux_*He:^9!anWtYE' );

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
