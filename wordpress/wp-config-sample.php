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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         '6!!#CvI1Diy_i7x(!dPp}I%BH[[60KdGy>p=G*ig?f<HdAl(S5r+/9^!!:(Khm[?');
define('SECURE_AUTH_KEY',  'rh((:@1FsOVLSsMbY*C2v{I<[vxQtzl8 a/0OkMpDSrLm.3&6,6ydS4:|LA[o]!D');
define('LOGGED_IN_KEY',    'WoOeni{!iH}5`8$Ars;2N[Hd_@j;5hKUR+2`%Ichx%3FePRNc%q8n8Tf$Fh(85Eb');
define('NONCE_KEY',        'Mi7SOJHsRnnJ{a7]7Mk(;nL0HGH7=1tv,Rl^#  %W2/tIy{N$&HR)u7l $U^:PX9');
define('AUTH_SALT',        'i1B%bsfo|9sPdF%uL:[W]i0)a9~&S%tNigd/t10%a}..os AvrCUF^ TLPEk|kuw');
define('SECURE_AUTH_SALT', '-II>|vfSGaoty^[1]Vc2{=3+_icI=jf(U?O6aO67T+r)T4r @2z^CD;ryMVf})5+');
define('LOGGED_IN_SALT',   '?#q7/=[2<Fs+vK^)pRs$Nni.qc$iv[2BIT!9QxXN=Vs|D>r$|D`WS;ETyU>lA%9s');
define('NONCE_SALT',       'sZw4*?j$@DxVIRs~ZM|RK&z}Y<QATKCPo#^SI91K>;_Zr*_L.sz=q-MjWl@dbG&F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog_';

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
