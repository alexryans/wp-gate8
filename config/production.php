<?php
define('DB_NAME', 'database_name_here');
define('DB_USER', 'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_HOST', 'localhost');

if ( defined('WP_CLI') && WP_CLI ) {
    define('WP_HOME', 'http://PRODUCTION-URL.com/');
}
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/app');
define('WP_CONTENT_URL', WP_HOME . '/app');

//https://codex.wordpress.org/Editing_wp-config.php#Disable_Plugin_and_Theme_Update_and_Installation
//define('DISALLOW_FILE_MODS', true);
define('DISALLOW_FILE_EDIT', true);
define('WP_DEBUG', false);
