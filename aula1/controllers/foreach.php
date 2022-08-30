<?php
require('produto.php');

$listaprodutos = array();

$produto1 = new Produto('Parafuso', 2.5, 37);
array_push($listaprodutos, $produto1);

$produto2 = new Produto('Arruela', 0.5, 77);
array_push($listaprodutos, $produto2);

//var_dump($listaPessoas);

echo "<br>";

foreach ($listaprodutos as $p) {
    echo "{$p->descricao} {$p->valorUnitario} {$p->quantidade} {$p->total()}";
    echo "<br>";
}

echo Produto::somaTudo($listaprodutos);