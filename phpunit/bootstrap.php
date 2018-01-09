<?php
namespace tests;

error_reporting(E_ALL|E_STRICT);

require_once("../src/libraries/classes/anytizer/backend/class.spl_include.inc.php");
use anytizer\backend\anytizer_include;

spl_autoload_register(array(new anytizer_include("classes"), "namespaced_inc_dot"));
