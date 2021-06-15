<?php

function request($command, $client) {
	$xhe_host = $client->getIp() . ":" . $client->getPort();
	
	require_once( XHE_TEMPLATES . DIRECTORY_SEPARATOR . 'init.php');
	
	$result = $command();
	
	return $result;
}

function is_closure($t) {
    return $t instanceof Closure;
}

function isAssoc(array $arr) {
	if (array() === $arr) return false;
	return array_keys($arr) !== range(0, count($arr) - 1);
}

function launchBat($bat, $args, $ping = true) {
	if (!$ping)
		$pingCommand = '';
	else $pingCommand = 'ping -n -f -w 1 5000 192.168.254.254 >nul';
	
	if (is_array($args))
		$args = formatArgs($args);
	
	$command = ($bat . ' ' . (is_array($args) ? implode(' ', $args) : $args) . ($ping ? ' & ' . $pingCommand : ''));
	
	var_dump($command);
	
	$handle = popen($command, 'w');
	$read = fread($handle, 2096);
}

function formatArgs($args) {
	$new_args = (
		(isset($args['ip']) ? '/ip:' . $args['ip'] . ' ': '') . 
		(isset($args['port']) ? '/port:' . $args['port'] . ' ' : '') . 
		(isset($args['script']) ? '/script:' . $args['script'] . ' ': '') . 
		(
			( 
				isset($args['script_args']) ? is_array($args['script_args']) ?
					'/script_args:' . implode(" ", $args['script_args']) . ' ' :
					'/script_args:' . $args['script_args'] . ' ': ''
			)
		) . 
		(isset($args['in_tray']) ? '/in_tray:' . $args['in_tray'] : '/in_tray:no')
	);

	$result = $new_args;
	/*
	$result = (
		count($args) > 0 ? 
			isAssoc($args) ? 
				$new_args
			: implode(' ', $args)
		: ''
	);*/
	
	return $result;
}


// Not working...
function xhe_finish() {	
	//$app->pause();
	//$app->stop_script();

	$app->enable_quit(true);
	$app->exitapp();
	$app->quit();
}