<?php

$config = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'sistema',
    'port' => '3306',
];

$mysqli = new mysqli(
    $config['host'],
    $config['username'],
    $config['password'],
    $config['database']
);

if ($mysqli->connect_error) {
    echo die('Não foi possivel conectar o banco de dados: ' . $mysqli->connect_error);
}

$a = 'Cesar' .  $mysqli->connect_error;
$b = "Cesar $mysqli->connect_error";


$result = $mysqli->query("select * from `clientes`;");

if ($result) {
    $clientes = $result->fetch_all();

    foreach ($clientes as $cliente) {
        echo $cliente[1] . ' ' . $cliente[2] . PHP_EOL;
    }

} else {
    echo 'nenhum cliente cadastrado!';
}

mysqli_close($mysqli);
