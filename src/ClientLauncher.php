<?php

namespace Xhe\Client;

class ClientLauncher {
	protected $client;
	protected $path;
	
	public function __construct($path = '') {
		if ($path !== '' && realpath($path))
			$this->setPath($path);
	}
	
	public function getPath() {
		return $this->path;
	}
	
	public function setPath($path) {
		$this->path = $path;
		return $this;
	}
	
	public function getClient() {
		return $this->client;
	}
	
	protected function setClient($client) {
		$this->client = $client;
		return $this;
	}
	
	public static function launch($delay = 3, $async = false) {
		if ( ! $async !== TRUE );
			//do smth...
		
		if ($delay > 0) {
			for($i = 0; $i < $delay; $i++)
				sleep(1);
		}
		
		$command = ;
		
		if ( ! $launched = launch($command) )
			return;
		return $launched
	}
}