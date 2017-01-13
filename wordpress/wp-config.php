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
define('DB_NAME', 'wordpress');

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

define('AUTH_KEY',         '#IvX#ta6#d#6[{%8.+n^QNSnHK.$D?DAG&:~o?pHI1a/4,Hx>M99xQDj?Gl:F2N<');
define('SECURE_AUTH_KEY',  'bn%v~q4{N@8I4bFY*)<c%ms JcK+n4a1jevyWPN4HkfjNWH#DQp<9Lg@d.n}$QTX');
define('LOGGED_IN_KEY',    '*-9l[?|G^%:+:SF7d_3u=EgC`hVqqwZB]V*z%iS7&22G!1.!LM~^-LI!HYz3ZJV+');
define('NONCE_KEY',        'W44tW<N!L%.?bv]J&Th+H5$,B,{(7F[&`H&e;%R `yD=TIw92;llqW+1aEpJmx%%');
define('AUTH_SALT',        'Z)_9usW::vn&3(Gk16nr8q#N/Z20_^d,iQExseg6vO(wd#=#JgZib8a)+Ko?4@ M');
define('SECURE_AUTH_SALT', '&M!AW6!p}Q(#<68WY$p_,ZS&AER!S2A8^okP>qg4Yq]x;lF.WrS~<aXn7[ fIhSI');
define('LOGGED_IN_SALT',   '[W%S.U2NL}fHs|OKiM@FMpIr;J=CU S4,E?;eai.vw7*Ae|w= Y]a;B_!izpNfc2');
define('NONCE_SALT',       'Jh:8Zk4D_zuHY_:9F^C_E*<?9{ktl|CMI^!LsNku= ,&pgTCJopy/)$XLwwmiFU!');

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
