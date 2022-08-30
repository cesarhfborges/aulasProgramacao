<?php

/*
    Primeiro arquivo a ser executado
    o sistema começa por aqui
*/

require_once('./controllers/controller.php'); // carrega o controller.php

$controller = new Controller(); // instancia a em um novo objeto
$controller->index(); // invoca o metodo index dentro do controller.php