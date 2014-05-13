<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'd`!i:Eoi0%u~wAqlyxmr7>-XsztXTZtwWQ8o)A*Dp<c&S5*?lE%w!<s9+J|Da9_~');
define('SECURE_AUTH_KEY',  'ihSqq}x-!@l95.$J,I@8E3*Hy$]+aQx46Q~M6gG60Ji^v` `kn!+CO c@2+YxU8I');
define('LOGGED_IN_KEY',    'SS(VQo([Oh9Cp54hOs%t22D_)#to]!z8]BW_c1s=ddH~`DQR7*-Ow5c[,SLIHA6^');
define('NONCE_KEY',        'CF7--}w-*$xg|V4O-`$`whm+am(Xv/&zIB%}99bsi9Tm[h-hx97_,q7L_l3w)ZKN');
define('AUTH_SALT',        'r@i{Le;r _Cg-PBw=U=J,A+2$R$fOK@:Li_ |#G)_H_FEA,a,SA+&(BI;&;j|,7;');
define('SECURE_AUTH_SALT', 'Z-4DQ60_FY6 ~,mVH~9Av?b$b0u>IfE}}^VP0W^d%XfhK6$s0Aitkm#99S FmRP6');
define('LOGGED_IN_SALT',   '|C /M{`s3$b&|+m9_~2:2ia(RYl3avBjRE5V^Js5/NSU_ s/qrWggGrPHzeu9/iL');
define('NONCE_SALT',       '><`Nz vrKTQ_`Y}6he5N/f^.^}|t8t~e.,e:=l%NA.5V~dVu/a4Z=-AsH5etKLA ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'animalhealth_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define( 'WP_HOME', 'http://animal-health.dev:8888' );
define( 'WP_SITEURL', 'http://animal-health.dev:8888' );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
