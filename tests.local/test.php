<?php
namespace test;

define("__CLASSES__", realpath("../phpunit/classes"));
#echo __CLASSES__;

require_once("./vendor/autoload.php");
use anytizer\includer;

spl_autoload_register(array(new includer(__CLASSES__), "namespaced_inc_dot"));
spl_autoload_register(array(new includer(__CLASSES__), "psr4"));

/**
 * examples/deep/class.inner.inc.php
 */
$di = new \examples\deep\inner();

/**
 * psr4/walk.php
 */
$ps = new \psr4\walk();

print_r($di);
print_r($ps);
