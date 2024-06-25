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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_blogpersonal' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'w0rdpre55' );

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
define( 'AUTH_KEY',         '%*Cppj9q^E+6Oz]Oz3,ey*]pZ,n4C,a:8Fo5295i4I@AV,)cN&3AKvajl5J@! ;{' );
define( 'SECURE_AUTH_KEY',  '7kTUA4sb0{E.@Ai 1Pu5IuQK~j4pboTZJA[|NJgJJ}Q.V;%[:/o**m`NP}Hw&BU~' );
define( 'LOGGED_IN_KEY',    '?(-4WQ8`Z&tOfBnb$/Z7LH2F,CD70J!{|ZA [`/*G3Uc0-N0my}}K&9e@3A<| lY' );
define( 'NONCE_KEY',        '4lb[ c@b_N1=hf<u04^<Hp>3n@pgxA<h:%9[w:LU{iKAyhko2~=wM0CR 1JmUZQs' );
define( 'AUTH_SALT',        'UlP-+LJh=uJb5~Pc#:,+iRXk5%MX-4z~U+w?:n)f~GOvEp1bHYWQ6Vw&b,gSRQU5' );
define( 'SECURE_AUTH_SALT', ')TZ>;X=t=>)KeVs]t{I3{uZ0~A.(ZP2/mv~yP[CoDo;a)M/tJrX{gfapL|GI)k!,' );
define( 'LOGGED_IN_SALT',   '[Cj2-ER,Qo6!v:8Fi,:gZ7mMI9nL]QMT9L>B:a@u-,d&dvKW)hGjHR8=g:> u,kN' );
define( 'NONCE_SALT',       ' .{=7Qvj$ Ss`4Hm@=cJKK-m.FDoChVh@>fhumCnv}7h-qP!PXY3YgO(w32~Nh/U' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
