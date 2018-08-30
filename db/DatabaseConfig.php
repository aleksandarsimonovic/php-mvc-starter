<?php

namespace App\Db;

use App\Config\DbConfig;

class DatabaseConfig extends DbConfig
{
    public function getConnection()
    {
        return $this->connection;
    }

    public function __construct(array $dbconfig)
    {
        foreach ($dbconfig as $k => $v) {
            $this->$k = $v;
        }
    }
}
