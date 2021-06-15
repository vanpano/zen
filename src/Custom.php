<?php

namespace Xhe\Client\Command;

class Custom {
	public function __construct() {
		return (function() {WEB::$browser->navigate('google.com');});
	}
}