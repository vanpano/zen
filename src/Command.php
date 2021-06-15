<?php

namespace Xhe\Client;
		
class Command {
	protected $action;
	
	public function __construct($action) {
		$this->setAction($action);
	}
	
	protected function setAction($action) {
		$this->action = $action;
		
		return $this;
	}
	
	public function getAction() {
		return $this->action;
	}
	
	public function run() {
		$action = $this->getAction();
		
		if ( ! $result = $action())
			return false;
		return $result;
	}
	
	public function __invoke() {
		printf("Hello Invoker!\n");
	}
}