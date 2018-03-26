<?php
namespace tests;

error_reporting(E_ALL|E_STRICT);

require_once "../src/anytizer/includer.php";
use anytizer\includer;

spl_autoload_register(array(new includer("classes"), "namespaced_inc_dot"));
spl_autoload_register(array(new includer("classes"), "psr4"));
spl_autoload_register(array(new includer("classes"), "psr0"));
