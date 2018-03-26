<?php
namespace test;

require_once("vendor/autoload.php");
use anytizer\includer;

spl_autoload_register(array(new includer("../phpunit/classes/examples"), "namespaced_inc_dot"));
spl_autoload_register(array(new includer("../phpunit/classes/psr4"), "psr4"));

$di = new \examples\deep\inner();
$ps = new \psr4\walk();

print_r($di);
print_r($ps);
