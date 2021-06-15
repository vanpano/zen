<?php

require_once('../index.php');

$ip = 'localhost';
$port = 7667;

$command = function() {
	WEB::$browser->navigate('google.com');
	WEB::$browser->wait();
	WEB::$browser->wait_js();
	
	DOM::$input->get_by_number(0)->send_input("tr");
	WEB::$browser->wait();
	WEB::$browser->wait_js();
	
	sleep(1);
	
	DOM::$input->get_by_number(0)->send_key(VK_ENTER);
	WEB::$browser->wait();
	WEB::$browser->wait_js();
	
	sleep(1);
};

$client = new \Xhe\Client\Client($ip, $port);

if (! $result = request($command, $client))
	printf("Some errors during request....\n");

//$app->pause();
//$app->stop_script();

$app->enable_quit(true);
$app->exitapp();
$app->quit();