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
define('DB_NAME', 'medical');

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
define('AUTH_KEY',         'R/j%A&Yx@EE&Gl<&ov TuJWgi@qa]9=8&k(&j4@jb3sM-$V9a>A5WX[gaWRT@.~;');
define('SECURE_AUTH_KEY',  '>OV)gy+f-N!7pUXt]gd=27K.%]kq<0Zqrz}UPuv$_<gq+R6*Mta1J5Z||hZTV*qn');
define('LOGGED_IN_KEY',    'E2O8&2~-/4v&=ucH|>/JBRabLl}{1AU0}Lf 0}19Y4u]BGn7UW~P|6&v<r4DG4K`');
define('NONCE_KEY',        'G?d@SObOu_,+9D9PiO =c%6;@R#ud{+W@srU0<$tIr7J5fn;NR3 l4G/xa }f-l+');
define('AUTH_SALT',        '++G41%=g#J 3fHU@+ |85#6lhMk<Wsp*BWVQV>5)DKZXvB:r%.-2nY$Ea%Gi-|3O');
define('SECURE_AUTH_SALT', 'S,oqc;UY<S?PN-zauNR`>Mg*_3v-#Qw<tB`|,f8dWL+={}|u>/z&gVr;RD|%&i&,');
define('LOGGED_IN_SALT',   'nR9bs1(L.k6XVrpU%yf7L,5 CDCT`uWSzLdkDQ.SW^`RFlI|S]!,@:i/G`qiuUE!');
define('NONCE_SALT',       'ZcfGX/iBY|[xj<9vY-=5#B`q|wc|NE?|2rk]0/Gmqnm&k>G9i:R!Jd,t3!y^:=CW');

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
