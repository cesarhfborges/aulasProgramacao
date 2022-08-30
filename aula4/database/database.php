<?php

class Database {

    private $config = [
        'host' => '127.0.0.1',
        'port' => '3306',
        'user' => 'root',
        'pass' => '',
        'database' => 'sistema',
    ];

    protected $mysqli;

    function __construct()
    {
        $this->conectar();
    }

    private function conectar() {
        $this->mysqli = new mysqli(
            $this->config['host'],
            $this->config['user'],
            $this->config['pass'],
            $this->config['database'],
            $this->config['port']
        );
    }


    
}