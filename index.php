<?php

require 'vendor/autoload.php';

chdir(dirname('index.php'));
ini_set('display_errors', 1);
error_reporting(E_ALL);

$ctrl = new \App\Controller\IndexController();
$ctrl->setProperties();
$ctrl->process();
$ctrl->display();