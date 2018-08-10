<?php

chdir(dirname('index.php'));
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'controller/BaseController.php';
require_once 'controller/IndexController.php';

require_once 'config/DbConfig.php';
require_once 'db/DatabaseConfig.php';
require_once 'db/Database.php';

$ctrl = new App\controller\IndexController();
$ctrl->setProperties();
$ctrl->process();
$ctrl->display();