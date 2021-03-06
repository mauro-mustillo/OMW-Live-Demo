<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'duckwort_site');

/** MySQL database username */
define('DB_USER', 'duckwort_user');

/** MySQL database password */
define('DB_PASSWORD', 'II_Ji+@ZK,%-');

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
define('AUTH_KEY', 'j+NJIHlTeSPrJtyLtYf91Rt/35Y1RLKryo6fL7fmHcdHCa+uYuMcJXxZweyJzHPL');
define('SECURE_AUTH_KEY', 'CVzn1KRvVJfPxdnufxQVCDIdmfo29bC3m3rgeqLJ9u9UUIWkKe/69bQuKPAdiIJ0');
define('LOGGED_IN_KEY', 'LUYk4ufa4d5fIfIqF4aV61n7w/L8ljBK/Vbc7UtocMvhCmiXArLVGw+r2jNKRZ8w');
define('NONCE_KEY', 'ATErG5dfoeg7y7C+8B+3FQkLgBRGoZ/tIEl7hfVptP1UI8zd/PqiAy9e2gH7mF4a');
define('AUTH_SALT', 'cGqX3gPFXDLMhaSjpTasNiven8KMpk5ElXFviBfGzS5Kw5sMNLNoWYv5N0oLZ5Xb');
define('SECURE_AUTH_SALT', 'KOEbgkuYW/4SlavE8kxBiw6Xj3p8vExjXSKEUzk3HAeAsdmhU0wSlg6ageIZLrDc');
define('LOGGED_IN_SALT', 'HHix4zLASzlImlFtJ651G5Eh/SxjOg61GFXgU5pgv0MYAa+OxUkla+rGhvoQARoV');
define('NONCE_SALT', '+sdDJ3m1rGXK59Eph1Q8/9ma0KW3M44ge8Wr1y7916VMAKMLI3D7kUzqPl0tq9Lr');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'shift3_';

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

