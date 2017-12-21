# spl_include.php

SPL register Auto Include

Auto include class files from various sources and styles

## Example

    <?php
    require_once(__LIBRARIES_DIR__."/classes/backend/class.spl_include.inc.php");
    spl_autoload_register(array(new \backend\spl_include(__LIBRARIES_DIR__."/classes"), "namespaced_inc_dot"));
    spl_autoload_register(array(new \backend\spl_include(__LIBRARIES_DIR__."/classes"), "psr0"));

Only call the includer of your style.

eg. *namespaced_inc_dot()* calls: *class.CLASSNAME.inc.php*.


## Installation

    composer require anytizer/spl_include.php:dev-master
