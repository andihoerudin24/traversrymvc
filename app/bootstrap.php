<?php  
//load config
require_once '../app/config/config.php';


//load libraries
// require_once '../app/libraries/Core.php';
// require_once '../app/libraries/Controller.php';
// require_once '../app/libraries/Database.php';

//autoload core libraries
spl_autoload_register(function($className) {
    require_once '../app/libraries/' . $className . '.php';
});