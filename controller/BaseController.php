<?php

namespace App\Controller;

use App\Config\DatabaseConfig;
use App\Db\Database;
use Exception;
use InvalidArgumentException;

class BaseController
{
    public function __construct()
    {
        $dbconfig = new DatabaseConfig(
            include_once 'config/database.php'
        );
        try {
            $database = new Database($dbconfig);
            $this->connection = $database->getConnetion();
        } catch (InvalidArgumentException $e) {
            die($e->getMessage());
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    protected function getFileContent($file)
    {
        ob_start();
        require $this->viewDir . $file;
        $this->content = ob_get_contents();
        ob_end_clean();
    }

    public function setProperties()
    {
        $allVars = array_merge($_GET, $_POST);
        foreach ($allVars as $k => $v) {
            $this->$k = $v;
        }
    }

    public function process()
    {
        $method = $this->action;
        if (method_exists($this, $method)) {

            $this->$method();
        } else {
            die($method . ' Not defined');
        }
    }

    public function display()
    {
        require $this->viewDir . $this->tpl;
    }
}