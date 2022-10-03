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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '1Gh{][4se]I4v9#*$Bzjm{>-*i.n,`iZE-+G[w-;E}u33;MU6;s*Ass~izqk;+8b' );
define( 'SECURE_AUTH_KEY',  'D7/#j?H;)h[d4S,>2d)(Mmw6R`{VaiO|d]T8BQ#MjZlZy9fio e,l%:3|gaU+W6n' );
define( 'LOGGED_IN_KEY',    'R<w80D}W `eV59rPTS1ft#(Oy;~fWxs!jAF=FM?46Zwn3$FQkx( 3U~!v0]Z Tn@' );
define( 'NONCE_KEY',        'k3v2/tSL8L>wBN^HQWbp.dRnaU$pDV&E7#!D/+keAv%BAc>.W@.-WME-<Oh5;1N0' );
define( 'AUTH_SALT',        'R.hEE]ae_;VT^Oxe]=Z7N#*GP!>&RaHem,Gwr^Tb[J|)5Z-Zb|pI/B~y3Dkw}?|y' );
define( 'SECURE_AUTH_SALT', '-iMZ>YaLzBgU /5M.U!K-afd} kDI0nPdoj+Z#WS6[]oj_+J#hP8wRU}65E7(1Lm' );
define( 'LOGGED_IN_SALT',   '#VPiA$~{O*w=L[$eH-)][D~_zFBnK3[Z#2>(hc{}WHK23}/*S8<9Fq|KnRw?Qy>[' );
define( 'NONCE_SALT',       'MGm7.R0mQ5Gs88SiWb}4]x<,wT~fm=hCC[u-o;tlHwdk%dj7{f_K<;s@`L*  i.D' );

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
