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

function is_assoc(array $arr) {
	if (array() === $arr) return false;
	return array_keys($arr) !== range(0, count($arr) - 1);
}

function launch($command, $ping = true) {
	if (!$ping)
		$pCommand = '';
	else $pCommand = ' & ' . 'ping -n -f -w 1 5000 192.168.254.254 >nul';
	
	$command .= $pCommand;
	
	$handle = popen($command, 'w');
	fread($handle, 2096);
}

function launchXhe($args) {
	$exe = str_replace(' ', '^ ', XHE_EXE_RT);
	$command = $exe . ' ' . _args($args);
	
	launch($command);
}


function _args($array) : string {
	$args = '';
	
	if (!is_assoc($array) || !is_array($array)) {
		printf("Arguments should be passed as an associate array!\n");
		
		return false;
	}
	
	foreach($array as $key => $value) {
		$args .= '/' . $key . ':' . '"' . $value . '"';
		$args .= ' ';
	}
	
	return $args;
}

function print_var_name($var) {
    foreach($GLOBALS as $var_name => $value) {
        if ($value === $var) {
            return $var_name;
        }
    }

    return false;
}

function get_xhe_port($settings_path) {
	if (!realpath($settings_path))
		return false;
	
	$port = (int) file_get_contents($settings_path . DIRECTORY_SEPARATOR . "port.txt");
	
	if (!$port)
		return false;
	return $port;
}
