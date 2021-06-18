<?php

require_once('../index.php');

$ip = '127.0.0.1';
$port = 7007;
$script = XHE_SCRIPTS . DIRECTORY_SEPARATOR . 'test.php';
$script_args = 'a';
$in_tray = 'yes';

//BIN . DIRECTORY_SEPARATOR . 'run-client.bat';
//str_replace(' ', '^ ', 'C:\XWeb\Human Emulator Studio 7.0.60\XWeb Human Emulator Studio RT.exe');
$executable = str_replace(' ', '^ ', 'C:\XWeb\Human Emulator Studio 7.0.60\XWeb Human Emulator Studio RT.exe');
//BIN . DIRECTORY_SEPARATOR . 'run.cmd';

$command = $executable . " /port:\"" . $port . "\" /script:\"" . $script . "\" /script_args:\"" . $script_args . "\" /in_tray:\"" . $in_tray . "\"";
var_dump($command);
if ( ! $launched = launch($command))
	printf("Achtung! Error during launch!\n");

exit;