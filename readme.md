# includer.php

SPL autoload registeration of custom PHP Class files.


## Example

	<?php
	require_once("../vendor/autoload.php");
	require_once("../src/libraries/classes/anytizer/backend/class.includer.inc.php");
	
	use anytizer\backend\includer;
	spl_autoload_register(array(new includer("libraries/classes"), "namespaced_inc_dot"));


Only call the includer of your style.

 * *namespaced_inc_dot()* calls: __namespace/class.{name}.inc.php__.
 * *prs0()* calls: __namespace/{name}__.


## Installation

    composer require anytizer/includer.php:dev-master
