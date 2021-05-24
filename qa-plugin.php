<?php
/*
	Plugin Name: qa-online-user
	Plugin URI: https://ansbangla.com
	Plugin Description: Q2a custom Online User
	Plugin Version: 1.0
	Plugin Date:
	Plugin Author: ansbangla.com
	Plugin Author URI: https://ansbangla.com
	Plugin License: GPLv3
	Plugin Minimum Question2Answer Version: 1.8.0
	Plugin Update Check URI:
*/


if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_layer('qa-online-user.php', 'online user');
