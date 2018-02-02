# includer.php

SPL autoload registration of custom PHP Class files.

See on [spl-autoload-register](http://php.net/manual/en/function.spl-autoload-register.php) on PHP Manual.


## Example

    <?php
    require_once("../vendor/autoload.php");
    use anytizer\includer;

    spl_autoload_register(array(new includer("path/libraries/classes"), "namespaced_inc_dot"));
    spl_autoload_register(array(new includer("other/path/classes"), "namespaced_inc_dot"));


Only call the includer of your style.

 * *namespaced_inc_dot()* calls: __name/space/class.{name}.inc.php__.
 * *psr-0()* calls: __name/space/{name}.php__.


## Installation

    composer require anytizer/includer.php:dev-master
