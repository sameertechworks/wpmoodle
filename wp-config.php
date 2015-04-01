<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '3IWK35BL61B}+ALl|zUT=!0}I$:u#{7c)tMH$d/]IW|aXyRIs$8=d(m1#}Tut-pi');
define('SECURE_AUTH_KEY',  'iN$V% i*_E[c]Mnn9mU+20|MN2/S6OlA#;G+lgj|,B+:Iosu=-=P1f#ig-N$!%zG');
define('LOGGED_IN_KEY',    'O6-s1>YRO)A<_!-y@*(^V3jx8O,=hN=>@j`_,d`)~hEw^}C8z36HhJ*|C%fbk+#q');
define('NONCE_KEY',        's;3W)7L#v])f{,v a5_kPmQ=&62W[%11|zp;!c$W+FUhO|@I^}SEZS4K7d3@ +H&');
define('AUTH_SALT',        'b7aNFG|TT< i>/&iSdV5/uqm0p_X n!~s-W&%dbag)@I@&JSw$y54jlh9N1.]/>h');
define('SECURE_AUTH_SALT', 'JB#tqV( EL`E_E7q-0dMbRgZ:PLRg?DN{S!-?g8r|nV.BqFTc:(z{f%Y%?D+gD,U');
define('LOGGED_IN_SALT',   'Uv%XvCKmHp%X?Zb:+qKtg-B_NRdI+0S:^ggt+SERiqE|lCLZ=`e@+|#pYiXsFg0N');
define('NONCE_SALT',       'e8Y!O2#64N!-4PN@iEMmTHlQD.7+lUO+wW$NFC(dK4G*lijPX9$L lCi&q4dO6Wv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

