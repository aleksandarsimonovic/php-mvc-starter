<?php

namespace App\Controller;

class IndexController extends BaseController
{
    public $content = '';
    public $action = 'index';
    public $tpl = 'layout.tpl.php';
    protected $viewDir = __DIR__ . '/../view/index/';
    protected $connection;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->getFileContent('index.tpl.php');
    }
}