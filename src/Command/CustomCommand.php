<?php

namespace Xhe\Command;

class CustomCommand {
	public function __construct() {
		return (function() {WEB::$browser->navigate('google.com');});
	}
}