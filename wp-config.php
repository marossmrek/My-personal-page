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
define('DB_NAME', 'WP_MP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':Rz}P$Z4YR 5=]xG9a<c/W@bUM0@F*V&:c3O4kxj4C_6<4ahh[c#*rnIf9FtI%t?');
define('SECURE_AUTH_KEY',  'POruvK;a85S};xlS4/[{;.v-4+7D<]wmy<3-aAC7/B?p@]QC&ZQ*h=p#%VH<to&M');
define('LOGGED_IN_KEY',    'dJO#ADch<B^UL0+]VS0i?)g/.r-f!1&X:7J~<sD%w!>KGfnvfZjNh)9%<+i^0fM.');
define('NONCE_KEY',        '*jOt+Or7SHf&WF Re<Xn5SpAqK5[*50$i;~Yp>=bSUJlY<{g#LA@%2ajvJ@kT<t@');
define('AUTH_SALT',        'h*Y14S*PdNA/!hD9At^b#uy3XoO9~~zd6e~u*`tBx7z,^iA5z*.%*0^tu&<V^X^c');
define('SECURE_AUTH_SALT', 'T=623KK(|(em7$Yy{KX1Kfrp:QW}-x}#={c? 6j$8tB+cgzt8k-8?1(%*Py73^fo');
define('LOGGED_IN_SALT',   't[$6mpjpZ,wmy?Fn&p%` Nkfm#w4Ux>4@<t38sB6CV,);yKr6h!Vf2F:(%W7?Qm$');
define('NONCE_SALT',       ',9t9kB8TA0~sn4W;5BU5OSSMXy*b`]>7uJC.v4-%^5n,B;M4X8@~DjPqL[BKn}IN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
