<?php

require_once('../index.php');

$db = new Mysqlidb('localhost', 'root', '', 'workflow');

dbObject::autoload("models");

$proxies = dbObject::table("proxies");

var_dump($proxies);