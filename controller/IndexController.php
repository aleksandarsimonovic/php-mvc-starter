<?php

namespace App\Controller;

class IndexController extends BaseController
{
    public $content = '';
    public $action = 'index';
    public $tpl = 'layout.tpl.php';
    protected $viewDir = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'index' . DIRECTORY_SEPARATOR;
    protected $connection;

    public function index()
    {
        $this->getFileContent('index.tpl.php');
    }
}