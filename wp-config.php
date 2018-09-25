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
define('DB_NAME', 'tung');

/** MySQL database username */
define('DB_USER', 'tung');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'ViN===*v~0.LnTFbrICd,o]xyXV=gP04ze?k0*#tDN(.j*hgE7vr7n|*X%>K=cjv');
define('SECURE_AUTH_KEY',  '?co(J2 G?`R3UTH*87;@qPn;H5^FV$$Kk?U.Lehenk+Bh~@fm~/>rhs9)EJ<;u<N');
define('LOGGED_IN_KEY',    ',o|P|la>i<ydNh:W*db1Bz/)8,`M|xEe{LaiH2rhERb^F[fo:[?Kv%*YTO6[QJ:b');
define('NONCE_KEY',        '*:@Nzt41)KA?KS eUN}Pz-9fX?{N-g|KRah>eZfJu_8q8o!Idb2W.purZ?%Drw,-');
define('AUTH_SALT',        '?|z>aved#nl/(p<#T@2KxAB}qc/SIX$]@n_X`C:eo`^,C+r9W&g<$h@WNL=[-GJ/');
define('SECURE_AUTH_SALT', 'l{ct!oPH^KR4k3st]*pVS9z Wlv)RKr :K,|yzSse?bJSp_&({yl4/2*CAl`XBYZ');
define('LOGGED_IN_SALT',   '</oHbj(zugi@&7yVoIVSiUTD9#WGA{1BX+3Ox{vbd}AXDF%fCcL?PBSk[uf)$m$$');
define('NONCE_SALT',       ']MpEo]@j7AXAi @t`Z)As_w9gpsa`w:nq4<^nshG3i4|YF}DJ_#?pDM*7UnEl1u$');

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
