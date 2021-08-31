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
define( 'DB_NAME', getenv('MYSQL_DATABASE') ?: 'coolmat' );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') ?: 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') ?: 'root' );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') ?: 'localhost' );

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
define( 'AUTH_KEY', getenv('AUTH_KEY') ?: '8!ovKEOkT&F!N PMC ez~P6t0^tfVj$iRW(G^$ijz8(dVtm_Ub+A.TdQD]GUDvD@' );
define( 'SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?: '%)Ni%{;O+>O **pLdC^ky5N;}Jx!S+$tmU,^4`,QkEH`i3cbm@:$A^lMdi 3eJva' );
define( 'LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') ?: 'YfRwE^nRR_{nDhgCQm>/s<f1|Rlu?5/7c;}o@Wi.Hdd*C_6D9ikT$Rd$#_fKpn[u' );
define( 'NONCE_KEY', getenv('NONCE_KEY') ?: '@mM3FFtG4Q5w+lEC2J{dHpLu5UONCkG&bFVo}adWp^;tgPV5ENZB8n7W4E+-GKl!' );
define( 'AUTH_SALT', getenv('AUTH_SALT') ?: 'Uv{tTUjnw=AzdvOnAb9>u-z,@|dSsO64c(K6mXPFk=*k{HfG?Oh_[/qANo/Dn7;m' );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?: 'Ac/i.I)lZA}p/9|P$K!HT/!U0I/2Qb:{fvpH)<_SxcZb:vZ,Z}@9/|-<(b*Mam[G' );
define( 'LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?: '*H0/cYRFt:`uJ[M/<[KmvirHEkm OA@PW)xX/Uexw34X&CYwCAQ5t+4~!X]Gz[ a' );
define( 'NONCE_SALT', getenv('NONCE_SALT') ?: ';0<x&|J^TI9p{y!D?`.`RHceLi(^3vZWu&GMBm=Hy>0t][Q[S9eE@__5s?~Pxc2a' );

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
