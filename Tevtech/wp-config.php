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
define( 'DB_NAME', 'Yangwha' );

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
define( 'AUTH_KEY',         '~!KOgksxjL4V@Drimcp)$pU!!smr&;m`~FWPmt|1:~g%mUGI-Y6VwC{wb?T6>k1`' );
define( 'SECURE_AUTH_KEY',  'ul1L@/QxDyN(q=ZL<@jLozXju;l!Adw4?PxC|_;y]$Bc+cO4SW6E0B5x,9[b$u?!' );
define( 'LOGGED_IN_KEY',    'g{e.4UF&Xf]QBmM)6[9s.|KEHI?48Q!bYw*fZhmt6W5~Hl%CP3zXy5q/=[J9:IQ_' );
define( 'NONCE_KEY',        'a@=@*xJin*!&Z<+=URV(svDkb-s{H`%%;Zk;C[(|QS(m4*r<JU-2qh%DY%4j;t%Y' );
define( 'AUTH_SALT',        'A/H<N@JZh~Z/SE#PSr8GJ;&necLq&b_AQbq)a0ahG/%_?/kar}4`qB)dswx1)931' );
define( 'SECURE_AUTH_SALT', ',%57n?JN5<~!O%3VU,.S6p;Z@`@?vmA9R!HIy/Lya/w2_DQR~U.0_@9m0R#v|LsS' );
define( 'LOGGED_IN_SALT',   '7Mht)2XMOm~YJWG+0wt5_4!&4YODF`,?z+0|_Ud<oZI5^uuEvx*Eebb(#5.jAF4j' );
define( 'NONCE_SALT',       'q:rf+CKCb*ML%(hmJV&U,<hLtB9>`zCDhGS:e5*9H>!.OjsV4|t#@f=xSaEiYIst' );

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
