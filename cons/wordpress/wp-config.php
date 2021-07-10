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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cons' );

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
define( 'AUTH_KEY',         'eKPsg,[6}/ef|<!p*XEm03:~9IE@]TYL]]SA>u9cd,e62*C9m!, &<>p~Z$8a-$+' );
define( 'SECURE_AUTH_KEY',  '[]xEEA&Ad(7^3;(C`y1=1G32|%w:)3IBTt)T)j-!Wb1(~q.$gW~I!ny;Q9/PYKz4' );
define( 'LOGGED_IN_KEY',    '(Pmw*i}!jWK9Sx5Na8t$V!%[%=wVWzrUjz9<s9`oq}wO:6]5&]8pdF`i::#E;6&/' );
define( 'NONCE_KEY',        '0D#A]:^AE8dL]L/q*~_ 8X[QQIhu/f-rHN@A^Ht%=JY8}C_P!M&dhg#Cj{FYN)XM' );
define( 'AUTH_SALT',        '`&#17l/;(TDSFSp/=Iw?nZ:^AIY[*%$.!e?iUHbk*m5$q,/iO(V{r>{H@.4nOi5a' );
define( 'SECURE_AUTH_SALT', ',LQVlcnVp!T%B%Ow59IV{2.Zv1-Slg(mlBA:g{4XI=9P2s~.qtn5@bixp1IM#w+A' );
define( 'LOGGED_IN_SALT',   'pZ24frA:f0S}qd3`}GUe(#=IIS4U+c>`& -OjG@g%e+nN+YR)$tT-m>}Qc kuE5J' );
define( 'NONCE_SALT',       '*U*I4C}h5)F!+<J#f@`CGZQ feAP}@DTNNjU1mwNy<Spscqx{n7St;~uSeP[iR`y' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
