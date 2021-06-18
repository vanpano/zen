<?php

namespace Xhe\Client;

class ClientBuilder {
	private $client;
	
	public function __construct() {
		$this->reset();
	}
	
	public function build($ip, $port) {
		$this->client->setIp($ip);
		$this->client->setPort($port);
		
		return $this->getClient();
	}
	
	public function getClient() {
		return $this->client;
	}
	
	public function reset() {
		$this->client  = new Client();
		return $this;
	}
}