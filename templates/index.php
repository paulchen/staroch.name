<?php
if(!preg_match('/^[a-z]+/', $lang)) {
	die();
}

require_once(dirname(__FILE__) . "/index_$lang.php");

