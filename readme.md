# includer.php

SPL autoload registeration of custom PHP Class files.

See on [spl-autoload-register](http://php.net/manual/en/function.spl-autoload-register.php) on PHP Manual.


## Example

	<?php
	require_once("../vendor/autoload.php");
	require_once("../src/libraries/classes/anytizer/class.includer.inc.php");
	
	use anytizer\includer;
	spl_autoload_register(array(new includer("your/libraries/classes"), "namespaced_inc_dot"));


Only call the includer of your style.

 * *namespaced_inc_dot()* calls: __namespace/class.{name}.inc.php__.
 * *prs0()* calls: __namespace/{name}.php__.


## Installation

    composer require anytizer/includer.php:dev-master
