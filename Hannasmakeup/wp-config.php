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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hannasdb' );

/** Database username */
define( 'DB_USER', 'miguelhyto' );

/** Database password */
define( 'DB_PASSWORD', 'G4T1C0$$' );

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
define( 'AUTH_KEY',         'oUtV .<#F2zV<*Fs{[.77rAA^rJ|qLqUUt@{I7Qs6RP2ttE]qIUI~^S|2A*$X@Qm' );
define( 'SECURE_AUTH_KEY',  'zA/ck=i+4E]LvrSsC:zOt[i3wc`SkOWmZ.njVIJ_(L/8_7Cu_qQ,,^Nd5TUlAzx,' );
define( 'LOGGED_IN_KEY',    '))-s:t8`?|i@QKcrA&wQ,O$TN{kR}=&7o)I3^c0?r~zT[q&X-!$xQ,#qj4$+XT34' );
define( 'NONCE_KEY',        'xE7E&s8j~>Ld^@Fq;xGFmqg7oLI<38UJ)_0OmcH{g;^xV*Q$/-=aXg,&aFw-lh(0' );
define( 'AUTH_SALT',        'Zmsg7~`eDF$fcb-xmusK{+HAh~[.Co8,IX;?p.rU2Q 0lNeP:Y*&D#zJuL^.m?/?' );
define( 'SECURE_AUTH_SALT', 'pgqa$R`h(d[M>+P*{3r~4Km,[ff]B?c|&J5pZs35PQ#=2~7s8:GLvSi)YNNGU<Z*' );
define( 'LOGGED_IN_SALT',   'n@m7cKgu[u+.mJLo7~l3C>RHyVkg,x!.eow0f4|!8m(3R^ZJ6T7b.RK^#;MtUNK%' );
define( 'NONCE_SALT',       'D6be9fG=.6gxsl-G *y8H0[rWwP|P$d=9mOY-bi2]f~Or[zW)oE?]QAuU2@: ZM3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hm_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
