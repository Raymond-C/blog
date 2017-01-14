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
define('AUTH_KEY',         '_lnW8jmV9J+/u5{=I!} `_;S{cYLp7^*e@3&9)@$mEPBtxw@b%{t(VeY[;(<_,A!');
define('SECURE_AUTH_KEY',  ' Pj oYL}MOyfY0GXigY]U=ed$tV0V{-/9{!Z9f?rZtT,uqk_+iARuG~bZeBQ[sCf');
define('LOGGED_IN_KEY',    '`e~fHO;><U7xIHOI-r9B|Jzi}c2yn_!s6az7utl1S_M!eJ~:SKHqmbjsBpB10DR@');
define('NONCE_KEY',        'dy19QA*K{Sh$As~zYrG+8Ap7Phrp~^#iuIh!I(YHo`Ns4E,$&IJ5Az#GR%<!0G1E');
define('AUTH_SALT',        'k@Sr{J}tU_zMIe]G;7RX e.Lbp]MOywJ$406^JVZsEuBZ]*[P}k_a&u&cK i[+M0');
define('SECURE_AUTH_SALT', 'MKD0x*J:kd>Wb ~V8*0Da4A:!?aJVaI$w%~)@a{juC=H CLb.$a!oqDe4D|tj9yZ');
define('LOGGED_IN_SALT',   '$ZH&#c^B(@--tRe!]C3XVa2]&|-fQ4?<>ZRRZ|0TDrz+PUmU,lMiONpAd%y70gc:');
define('NONCE_SALT',       'fo5z+`=ar3vpm;#TI/0!Zqv8:xrO.rhCa%IXJgjJtku+{{;QF9<&|j@:ly+maoxY');

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
