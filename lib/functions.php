<?php

function request($command, $client) {
	$xhe_host = $client->getIp() . ":" . $client->getPort();
	
	require( XHE_TEMPLATES . DIRECTORY_SEPARATOR . 'init.php');
	
	$result = $command();
	
	return $result;
}

function is_closure($t) {
    return $t instanceof Closure;
}

