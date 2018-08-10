<?php

namespace App\Config;

abstract class DbConfig
{
    abstract public function getConnection();
}