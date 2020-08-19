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
define( 'DB_NAME', 'dearanon' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '$RushilSahishnu123' );

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
define( 'AUTH_KEY',         '^B$]Qq1{!L<WmjkUq~2(}#<>0b^yfs0tD;e0tuTY52h)w}_!i(v4Y}-|,[DN<<l>' );
define( 'SECURE_AUTH_KEY',  '24l_B)~YrJZO)L]0q.)dgV93r1r.^)P 39XKp#vW)}9<o5).~#AAk*(?Qp:bW,/{' );
define( 'LOGGED_IN_KEY',    'BV^9wWUsV6*@b0<qHu*v]aMt:z1TEV Co2^=t/c{J2]LaeN~bF4^xRz4  v>9!y9' );
define( 'NONCE_KEY',        'XkEYBTjT!-}+I5<qg4+w>AMYnF>cpyln-wwV|HS:C[lCSi q?2{m}[{EV&3k,[*X' );
define( 'AUTH_SALT',        'a?!E=2=Q3YF?bp&J0w:n1{4?Df-?HaW{k&A[sAEdz,/8uI61qxo`cl3OL9o]?KDZ' );
define( 'SECURE_AUTH_SALT', 'P)=XeC;<3&E@>TnfKtzg:/!ce{x2&8>8XW|!K5Qb(vQKWJMdv.WlGgxu3-{&(7{-' );
define( 'LOGGED_IN_SALT',   'o]sEg0=&=%V/DyRh+#KMY9o<L5+[roNqbeLFMT)2~v]K_5fJjL/n9I6X,yuhdgeW' );
define( 'NONCE_SALT',       '-S<[JWahz]Z7W@Wj8a>K|?//<=&kjMtSe/z1RcynbfG``[JX&m;pRQom=D*]Ov^(' );

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
