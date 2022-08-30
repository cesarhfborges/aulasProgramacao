<?php
require('produto.php');

$listaprodutos = array();

$produto1 = new Produto('Parafuso', 2.5, 37);
array_push($listaprodutos, $produto1);

$produto2 = new Produto('Arruela', 0.5, 77);
array_push($listaprodutos, $produto2);

//var_dump($listaPessoas);

echo "<br>";

for ($i = 0; $i < sizeof($listaprodutos); $i++) {
    echo "{$listaprodutos[$i]->descricao} {$listaprodutos[$i]->valorUnitario} {$listaprodutos[$i]->quantidade} {$listaprodutos[$i]->total()}";
    echo "<br>";
}

echo Produto::somaTudo($listaprodutos);