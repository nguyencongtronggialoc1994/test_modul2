<?php

namespace App\model;

class DBConnect
{
    protected $dsn;
    protected $user;
    protected $pass;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=superMaket";
        $this->user = 'root';
        $this->pass = '1234';
    }

    public function connect()
    {
        return new  \PDO($this->dsn, $this->user, $this->pass);
    }
}