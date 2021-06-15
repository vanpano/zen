<?php

require_once('../index.php');

$interactive_mode = FALSE;

if ( ! FALSE == $interactive_mode );

$ip = '127.0.0.1';
$port = 7888;

if ( ! $launched = \Xhe\Client\ClientLauncher::launch())
	printf("Error while launch!\n");

