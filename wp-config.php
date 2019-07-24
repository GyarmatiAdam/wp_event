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
define( 'DB_NAME', 'wp_event' );

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
define( 'AUTH_KEY',         'E>M@~JYmI/Q06U*^zY7#`7;].H::sO+Y1&#efE2%Y+#YSdyf.b&u._Vi>rCp|o<r' );
define( 'SECURE_AUTH_KEY',  '@Fp)hS-VN|X[A5_]KY,fRagx[vuRT:/VZ}8{Dd(quFYysCWxNT/ ^f`Dbdh+%Mu0' );
define( 'LOGGED_IN_KEY',    'P<MKy;rv#j(>TT&_,WJzLkfJ_T}&X,fNjvI9!`V^UTog[SrV6i,+|Wj*4O3JVG,?' );
define( 'NONCE_KEY',        'w$pJ] asK0q&Hsfn@e:6}dVBVctte<]Mju~-:7p!zmzR1X^*2Uj7|XSj:-bSAeSt' );
define( 'AUTH_SALT',        '<!I7Gzl6yVfn@q9B&7kNA8vYL;D}81zMbc9XANL[4Rb~Z|KtrP+8I|YG|_7X])`{' );
define( 'SECURE_AUTH_SALT', '>B5|sJ#[5:lCE#!$:{qXX:LR,Hp;xKm,65*WI61II5xpR9e/q-0g8=t^e>0{HH%$' );
define( 'LOGGED_IN_SALT',   'vMQI0q+k/Bz$0hoTHC?87K[sm #qZSqf8eQ8tNABrNN$@DcDsDzj+oVFanfGK &d' );
define( 'NONCE_SALT',       'ldN;D]~b>8E.eLCo;n%otU`u /+0|ox610h0?T,a[V4Pb|Z4F8qCjt7Z{Tj{d~)k' );

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
