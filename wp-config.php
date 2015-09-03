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
define('DB_NAME', 'junhee');

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
define('AUTH_KEY',         '6}@qAKtqO+a~=Ym_JK<|&j.3E73%P0-X7?CvH(`%v5w[P!!H0>^0|:Nl++r-RXVR');
define('SECURE_AUTH_KEY',  'H$Hgto<Ree6[alGtP% sxL{.=Z!*q$0ech1|=08|r,pvVO=Tq3n?Dvl,`RQx:H<6');
define('LOGGED_IN_KEY',    'X</h_GDj=/kFBiwV@;.K|q&+%Mc!4;b+qLqin8V#0+81^s+Gh4GiZLVdXk^xDm<J');
define('NONCE_KEY',        'qwG+GT?KbR{o;o*Pl25~X|K~+7YR?Yv(c#.:c9#&ypuOgo~e%TVUy~GmAX>SIPP9');
define('AUTH_SALT',        '+kUI=[--wQY9WdMIloxER,Dr~f+`bc2(bD,6Jk<|3j+F v@g PqX]mxuWFlR4kx ');
define('SECURE_AUTH_SALT', '<./m7fo@6V340x1.etwlp$g}Ly*MGy3NB]n[ci)N/ M=cHs++(a-lVU-sI4@d@w@');
define('LOGGED_IN_SALT',   '+6udX:*+I0yFYH(H)6D~Ujb:&BcC0p;ya=Atqi[0blhyB`S=3`*Z(iL2/crt/h-.');
define('NONCE_SALT',       '&ul8sB[F1_9;RX-dxy@z]RW[tBzvEpipovrpI@(xlW~@`#DXWcktP|,Bqj*SX}%+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'junhee_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
