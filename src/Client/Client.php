<?php

namespace Xhe\Client;

class Client {
	protected $ip;
	protected $port;

	public function getIp() {
		return $this->ip;
	}
	
	public function setIp($ip) {
		$this->ip = $ip;
		return $this;
	}
	
	public function getPort() {
		return $this->port;
	}
	
	public function setPort($port) {
		$this->port = $port;
		return $this;
	}
	
}