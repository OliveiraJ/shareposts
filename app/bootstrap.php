<?php

//load config
require_once 'config/config.php';
require_once  'helpers/url_help.php';
require_once  'helpers/session_helper.php';
//load libraries
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

//Autoload core libraries
spl_autoload_register(function ($classname) {
    require_once 'libraries/' . $classname . '.php';
});
