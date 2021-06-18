<?php

require_once('../index.php');

$amount = 1;

$ip = '127.0.0.1';
$script = XHE_SCRIPTS . DIRECTORY_SEPARATOR . 'test3.php';

$command = function() {
	WEB::$browser->navigate('google.com');
	WEB::$browser->wait();
	WEB::$browser->wait_js();
	
	DOM::$input->get_by_number(0)->send_input('Hello World!');
	WEB::$browser->wait();
	WEB::$browser->wait_js();
	
	SYSTEM::$keyboard->send_key(VK_ENTER);
	WEB::$browser->wait();
	WEB::$browser->wait_js();
	
	return true;
};

for($i = 0; $i < $amount; $i++) {
	$port = get_xhe_port(XHE_SETTINGS) + 1;
	$script_args = $port;

	$builder = new \Xhe\Client\ClientBuilder;
	$client = $builder->build($ip, $port);

	$args = [
		'port' => $port,
		'script' => $script,
		'script_args' => $script_args,
		'in_tray' => 'no'
	];

	printf("Attempting to run client on port %d...\n", $port);
	
	launchXhe($args);
	
	//if (! $result = request($command, $client))
	//	printf("Some errors during request....\n");
}


exit;