<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'home' );

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
define( 'AUTH_KEY',         'D3**6Jp^k`J%0R/q*F>:d#I^LH^,VrBfRDaWLi1!pZKbo:<,z^&Z&L{PT)EGqb7_' );
define( 'SECURE_AUTH_KEY',  '3chsRo5onGB6T_ikwpGHj=4.*^n^#D{5!EO?Ns9,g<Kvjl!4c`>KYa9Z#_-)IMP)' );
define( 'LOGGED_IN_KEY',    '(Pi:!^(o*Qa$6~XTV/<t;W?kL8H64uzSK/Q-~pi}~V^.60 4K=LkgtUYtr$=zE$r' );
define( 'NONCE_KEY',        '~vmyD^OHpoY+%/3MyP5klM~=ddr3SkkMrMVy*(Vl!2eR&+nG+6I)J1oM@]UDRnVx' );
define( 'AUTH_SALT',        'sWOO w,2$WN3E_]~NO7:`F/#tdcuUEVD(LTnisb!PJ,t]gy6!Oyj1-Yf .D^kDd7' );
define( 'SECURE_AUTH_SALT', 'D8Lbh<{4BA]Uu/;NpOz?Cv4>-Ttc:c[$CoQ,3<:*dI9u$W$ r=P:<8];]KGz+rn6' );
define( 'LOGGED_IN_SALT',   '}FOqY6W6P>%{jtg-O+db5X68LdI_7Q]sf;f51a}#FUc6UK!0ZrYT,c?2h5r5<$Jp' );
define( 'NONCE_SALT',       'CVItRttW){i8*10z&CY-[z:=Pv0ms8;;BCBROhM#Wh?/:dMUR8S]#xrq&[rpn?mH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
