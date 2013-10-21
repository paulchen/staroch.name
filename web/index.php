<?php

$default_lang = 'en';
if(!isset($_REQUEST['lang'])) {
	header("Location: /$default_lang/");
	die();
}
else {
	$lang = $_REQUEST['lang'];
}

switch($_REQUEST['request']) {
	case '':
		$templates_dir = dirname(__FILE__) . '/../templates';
		if(!file_exists("$templates_dir/index_$lang.php")) {
			header("Location: /$default_lang/");
			die();
		}

		require_once("$templates_dir/index.php");
		break;

	default:
		http_send_status(404);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'https://' . $_SERVER['SERVER_NAME'] . '/XXX');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$data = curl_exec($curl);
		$data = str_replace('/XXX', $_SERVER['REQUEST_URI'], $data);
		curl_close($curl);
		die($data);
}
