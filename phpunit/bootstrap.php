<?php
namespace tests;

error_reporting(E_ALL|E_STRICT);

require_once("../src/libraries/classes/anytizer/backend/class.includer.inc.php");
use anytizer\backend\includer;

spl_autoload_register(array(new includer("classes"), "namespaced_inc_dot"));
