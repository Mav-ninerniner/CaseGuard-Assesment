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
define( 'DB_NAME', 'cgassessment' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'hgg#8.,Uh&)/Qf9JR|/sqp`p!NQ<(HkXO2|2Ai9MgfZ(79UJ-mu]5I*o|rCH~=+2' );
define( 'SECURE_AUTH_KEY',  '{:,vtc-s3^5F([Dv gg}16G$,pti?yT,Bh;/TS~[Cm9!Y}32Q`iKk.,=VmkADh5;' );
define( 'LOGGED_IN_KEY',    '&7^VgZXT{n9!W1HW|Zgcjoa_T|ho}gd[6i]Tht_CD,J7l29/dRkv[(Q%7B8UI;0Z' );
define( 'NONCE_KEY',        '5 0wyBW:eh+=XCs8,I-l*/QZIS&L6CokPBjaY~^eSiDz_%Gm@.$c/fPOF#eoq)=u' );
define( 'AUTH_SALT',        'kR=KY2BTW?haG0.=TXZ.;w<A0Jv&`B}?$n1p=E%)L&LZMM4:CDV8;6GFeb/lztS>' );
define( 'SECURE_AUTH_SALT', ' 1p3_h8I?5X#=z)HFTk5,?Yu+%t_BIR5dYK12m[ucBpZ+oHi(ZHt:5>n&xe4+mxF' );
define( 'LOGGED_IN_SALT',   '((ox] AvRTa|w?tW.6<EZtf2$dds3s^4W*|TXQx}j&G|IcOe1ufWT9QmC8+!4 aX' );
define( 'NONCE_SALT',       'C6sI35iwXoxR9NUu%%F]>dupIf8lj]!,#v[|,g;/`~A<R#=<bGB%0Bju=bbXUtsK' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';