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
define('DB_NAME', 'ovawra_redwood');

/** MySQL database username */
define('DB_USER', 'ovawra_redwood');

/** MySQL database password */
define('DB_PASSWORD', 'MR9cuQw8{yUN');

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
define('AUTH_KEY',         'cw>BS1uZ4;9stXTXtx=acm0-i*N5#s H ]o[L!1MSl<H8TGpfD+ Z4Aq^4&/F-ap');
define('SECURE_AUTH_KEY',  'nt*eEuX!LqE$$&lS (PIyv5=oRDg>RS(<l)T46j*1 E8SRJ<o?>e[*4j^aomF*<j');
define('LOGGED_IN_KEY',    '7DN+K?3MOB~{{tXviL060?uxq3pn)L.@jKY4Jj$]Glc%eC_*{caJ?8mFYrrBV8~u');
define('NONCE_KEY',        '@Echp*>h!/UN56_&Gt<UtFAr9[Pxr!nOgH:P=)Y&s<Jv|5-O0gN-Qs/e!5z25||[');
define('AUTH_SALT',        '-%0!HXswP]ir&0DVK7#FTgW*}wtCI6HR%6<t1CT(%sgpT84)p,#<e[x}AVymd)2N');
define('SECURE_AUTH_SALT', ',eVT$}8oZv^P|BPCMx-N#Ot}-Y-]DVz?~S>Nv8k.1*5hte;l-xBs10h=+3Fq $`}');
define('LOGGED_IN_SALT',   'IP/83cb0A,^Q97~xV;@Oj^vUWFpsucN8>sluy!-Ye3@JBd)&Z}UwX?>V+(t0AZ;>');
define('NONCE_SALT',       '}W(c:mu&,C(j/C6F^aNLFk<zj&%5(y>Q#^C[ ;raB`7IJ~.TRJwfwjd.uz0]XF68');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
