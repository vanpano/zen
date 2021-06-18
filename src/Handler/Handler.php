<?php

namespace Xhe\Handler;

class Handler {
	public $client;
	
	public function __construct($client) {
		$this->client = $client;
	}
	
	public function handle($Command) {
		$xhe_host = $this->client->getIp() . ":" . $this->client->getPort();
		
		require_once(XHE_DIR . DIRECTORY_SEPARATOR . 'Templates/init.php');
		
		if (is_closure($Command))
			$result = $Command->run($xhe_host);
		else $result = $Command($xhe_host);
		
		return $result;
	}
}

