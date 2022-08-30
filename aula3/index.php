<?php

require('./funcionario.php');
require('./cliente.php');

$f = new Funcionario('Cesar', 'Henrique', '01/01/2000', '10001', 'programador', '1000');

$c = new Cliente('Ederson', 'Costa', '01/01/1999', '10002', '1111222233334444');


echo 'RG Funcionario: ' . $f->getRg();
echo '<br>';
echo 'RG Cliente: ' . $c->getRg();


//$p = new Pessoa('Ederson', 'Costa', '01/01/1999', 'programador', '1000');

// echo $f->nome;
// echo $f->cep;
// 
// 
// echo $f1->data_nasc; // **/**/2000
// echo $f1->getRg(); // **/**/2000