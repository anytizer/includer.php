<?php
namespace test;

/**
 * Load from global scope
 */
require_once("vendor/autoload.php");
use anytizer\includer;

spl_autoload_register(array(new includer("../phpunit/classes"), "namespaced_inc_dot"));
spl_autoload_register(array(new includer("../phpunit/classes"), "psr4"));

$di = new \examples\deep\inner();
$di->deal();

$ps = new \psr4\walk();
$ps->deal();

print_r($di);
print_r($ps);
