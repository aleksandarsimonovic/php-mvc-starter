<?php

namespace App\Db;

use App\Config\DbConfig;
use PDO;
use Exception;
use InvalidArgumentException;

class Database
{
    protected $connection;

    public function __construct(DbConfig $dbconfig)
    {
        if (empty($dbconfig->dsn)) {
            throw  new InvalidArgumentException('No dsn defined');
        }
        if (empty($dbconfig->username)) {
            throw  new InvalidArgumentException('No username defined');
        }
        // Optionally throw exception if no password is defined
        /*if (empty($dbconfig->password)) {
            throw  new InvalidArgumentException('No password defined');
        }*/

        $this->dsn = $dbconfig->dsn;
        $this->username = $dbconfig->username;
        $this->password = $dbconfig->password;

        try {
            $this->connection = new PDO($this->dsn,
                $this->username,
                $this->password
            );

            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->exec("set names utf8");

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getConnetion()
    {
        return $this->connection;
    }
}