<?php

require_once('../index.php');

function launch($command) {
	$handle = popen($command, 'w');
	
	return $read = fread($handle, 2096);
}

function _args($args) {
	$result = $args;
	
	return $result;
}

$ip = 'localhost';
$port = '8998';
$script = "C:\XWeb\Human Emulator Studio 7.0.60\My Scripts\test.php";
$script_args = 'DEMON';
$in_tray = 'no';

$command = "\"C:\XWeb\Human Emulator Studio 7.0.60\XWeb Human Emulator Studio RT.exe\" /ip:\"" . $ip . "\" /port:\"" . $port . "\" /script:\"" . $script . "\" /script_args:\"" . $script_args . "\" /in_tray:\"" . $in_tray . "\"";

$args = [
	'ip' => $ip,
	'port' => $port,
	'script' => $script,
	'script_args' => $script_args,
	'in_tray' => $in_tray
];

$args = _args($args);

if (! $result = launch($command, $args))
	printf("Error during launch!\n");

exit;