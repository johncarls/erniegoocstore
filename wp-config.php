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
define( 'DB_NAME', 'erniegooc_db' );

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
define( 'AUTH_KEY',         'haUxvq}g9h*+%^9p<M%=rN%b(NBK=U0AYaT+}$oH-7h}~8zd.B_cKu5=RiRya 7!' );
define( 'SECURE_AUTH_KEY',  'gLH<O3B_r`wk:iLj Nd<#}SWm?? W7E,ZNt}89)AENDB|HXE;ehtZJ5*4|ZUd7s5' );
define( 'LOGGED_IN_KEY',    'rV~Jyx/3gywIC<&35!pj9O3sxA%psSU$(P/e/1q/+d(|yBXrYeF~Q&tNiq*Kdjdm' );
define( 'NONCE_KEY',        'nnq%|hbT%A#P3&Rvw}oS>IA{[1_Nnw/<KqOa;vvK^9ntf6o.0SZWrh%T;<K[Jh>/' );
define( 'AUTH_SALT',        'P&p[{u^e3.]*y3tq9]F1<p)`6^/?iZ?~iB0^oEwXL5z#yb%Bp658TK)a0=T+TM$u' );
define( 'SECURE_AUTH_SALT', 'SV1bwUkN[s6wZOL0y.V}qCjr-S=.8@h6e#l6qspDVIpo|Bfqf ;&v^Rwr?3_sDl{' );
define( 'LOGGED_IN_SALT',   '3?e%4,ZQ_BP.N!)|HyzC$kn+[J9Iu CVX+]f,L*~R^<iJ67bI20Br0<>drPh0d^4' );
define( 'NONCE_SALT',       'trX4L5vUt0ft#lq7KqgDR; |)wjK<OaCG r.qruP:ByJy-*.fk^r^l`nbB+!C3.n' );

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
