<?php

require_once('../index.php');

$args = [
	'port' => 7788,
	'script' => XHE_SCRIPTS . DIRECTORY_SEPARATOR . 'test2.php',
	'script_args' => '7788 Ivan',
	'in_tray' => 'yes'
];

launchXhe($args);

exit;