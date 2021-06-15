<?php

require_once('../index.php');

$ip = '127.0.0.1';
$port = '7777';

$builder = new \Xhe\Client\ClientBuilder;

$client = $builder->build($ip, $port);

$command = function() {
	WEB::$browser->navigate('rambler.ru');
	WEB::$browser->wait();
	WEB::$browser->wait_js();
};

if ( ! $result = request($command, $client) )
	printf("Error during request!\n");

//$app->pause();
//$app->stop_script();

$app->enable_quit(true);
$app->exitapp();
$app->quit();