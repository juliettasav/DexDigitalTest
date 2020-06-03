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
define( 'DB_NAME', 'av390288_db' );

/** MySQL database username */
define( 'DB_USER', 'av390288_db' );

/** MySQL database password */
define( 'DB_PASSWORD', '5t2dTg8H' );

/** MySQL hostname */
define( 'DB_HOST', 'av390288.mysql.tools' );

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
define( 'AUTH_KEY',         ';_pH067tX;5l2J={L*}qRdaeY>3(#)Y]$JtLcNo5Wud9Taz;hr]%e!uZ[Ia_(vC(' );
define( 'SECURE_AUTH_KEY',  'uMqL$Dks4W[3W7R>k=8#,G=!Vmad|Z~wk;vnM6?x2Qv$Kb|,eb|Mp|D4%!g<Z+On' );
define( 'LOGGED_IN_KEY',    'ggd1if[>@7-98Uz*+Aw=j*fp9Wvm=5-0!0G=ghL w&B^v_w:?UiA?4;q1A,{upe]' );
define( 'NONCE_KEY',        'UVKf0e^L2X`Qh(uL+^FgaNhZ9TJVd6li_5ic&Lzl^XZWp_F oEMR8$88q,2u.@.]' );
define( 'AUTH_SALT',        'qpdA`[(AD#Zw?Cn:)^Qo8N24t5M&v0N4quE}6>)#.3/MA+_+p:m|Hp-SNHA}=V4:' );
define( 'SECURE_AUTH_SALT', '&.FZ;2p#m8m~#rzTg<.C6;L 4CIRy4BtthoOL.<wJe)sL~9tiX:YD}1rO%yS?uf?' );
define( 'LOGGED_IN_SALT',   'w~yYU$*~frR7n4eIVXnRxI}n: z*{B+^&T2Ph*PJa#zJh/Ht!Bv7J6iQdw,83<qG' );
define( 'NONCE_SALT',       'fQ=MeG.,)6vtqBW[i*x_gK[vwm[{)O]]Bd SjtW=612%b)KN0~&K#;:lV)< !^IT' );

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
