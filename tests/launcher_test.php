<?php

require_once('../index.php');

function launch($command) {
	$handle = popen($command, 'w');
	
	return fread($handle, 2096);
}

$xhe = "C:\XWeb\Human Emulator Studio 7.0.60\XWeb Human Emulator Studio RT.exe";
$executable = BIN . DIRECTORY_SEPARATOR . 'run.cmd';

$port = '6776';
$script = 'C:\XWeb\Human Emulator Studio 7.0.60\My Scripts\test.php';
$script_args = 'DEMON';
$in_tray = 'no';

$command = "\"" . $xhe_executable . "\" /port:\"" . $port . "\" /script:\"" . $script . "\" /script_args:\"" . $script_args . "\" /in_tray:\"" . $in_tray . "\"";

$args = [
	'port' => $port,
	'script' => $script,
	'script_args' => $script_args,
	'in_tray' => $in_tray
];

if (! $result = launch($command))
	printf("Error during launch!\n");

exit;