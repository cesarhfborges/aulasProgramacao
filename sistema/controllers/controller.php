<?php
include_once 'models/carro.php';

/*
    O controller é responsavel pelo controle de tudo,
    inclusive é atraves dele que fazemos as regras de negócio
    e no final ele retorno o html que sera renderizado no navegador
*/

class Controller {

    // metodo 'index ou /' é o inicio de tudo
    public function index() {

        $carros = [];

        $carro1 = new Carro(
            'Vw',
            'polo',
            '2018',
            'branco',
            1.6,
            55,
            80000,
            20
        );

        array_push($carros, $carro1);

        $carro2 = new Carro('fiat', 'punto', '2017', 'branco', 1, 50, 100000, 40);
        array_push($carros, $carro2);

        require_once 'views/view.php';
    }
}