<?php

$default_lang = 'de';
if(!isset($_REQUEST['lang'])) {
	$lang = $default_lang;
	$redirect = true;
}
else {
	$lang = $_REQUEST['lang'];
}

$templates_dir = dirname(__FILE__) . '/../templates';
if(!file_exists("$templates_dir/index_$lang.php")) {
	$lang = $default_lang;
	$redirect = true;
}

if(isset($redirect) && $redirect) {
	// TODO
}
// echo $lang;

require_once("$templates_dir/index_$lang.php");

