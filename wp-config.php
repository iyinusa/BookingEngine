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
define('DB_NAME', 'bookingdb');

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
define('AUTH_KEY',         'Gn*>Vd_HNxyMz1|N:Q{jV=[#0/9NMm~.d|XKYFU<IW15$K>FwoHB!8y?xw`mJxyn');
define('SECURE_AUTH_KEY',  'V_z@<s+v t$2/I[JKo.lA-!py}=RGK%~2Nbx:fp4?Fr,/NEyNvWD-GkMn>}iWE d');
define('LOGGED_IN_KEY',    'NT^^%r:sd0{e>G3gyK&tU%yh`Ndt8aH*-Stw#fS^om%#W,3a;8 PwF1MEJQmsdUr');
define('NONCE_KEY',        'Dl+,,*Mq_&ipL8`5FmeRE.H{r$~jqD(_smUwV*_w_j0em~LJ(3]1;Q;+z|S*,j2#');
define('AUTH_SALT',        '6AT@7Tw,LO6+5(FAE8o]f,T2nCI,0T}P_ncW}~)NvwHx1:0{P}SAn<zN0[Yhbqs{');
define('SECURE_AUTH_SALT', 'yxzlmF-VLv2&!TfKP%sa|*VP9EY2o%?^}u<}XQAxo.@EY]5eB,c,&EU{1h#I*9[3');
define('LOGGED_IN_SALT',   'ztJ9zz-RDLfQ4X9,eZ7o+W6{}63uK[(G2nh@`MD2zebjAK0;%9VRhH<.E!jbN`uH');
define('NONCE_SALT',       'Yu3gD[AQS6T3~!W@m8r0:ek8`_jg-98|EQ3vrpD,&TljIUm}Ao^/$:Br_N3G8NFp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ab_';

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
