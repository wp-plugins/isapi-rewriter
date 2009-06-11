<?php
/*
Plugin Name: ISAPI Rewriter
Plugin Author: Andy Stratton
Plugin URI: http://theandystratton.com/
Version: 1.0
Description: This plugin enables WordPress' Permalink functionality when redirecting URL's on a Windows Server with ISAPI Rewrite 3.
Use WordPress' default .htaccess file.
*/

add_action('init','__isapi_rewriter_init');
function __isapi_rewriter_init(){
	$_SERVER['REQUEST_URI'] = $_SERVER['HTTP_X_REWRITE_URL'];
}

