<?php

$default_lang = 'en';
if(!isset($_REQUEST['lang'])) {
	header("Location: /$default_lang/");
	die();
}
else {
	$lang = $_REQUEST['lang'];
}

$templates_dir = dirname(__FILE__) . '/../templates';
if(!file_exists("$templates_dir/index_$lang.php")) {
	header("Location: /$default_lang/");
	die();
}

require_once("$templates_dir/index.php");

