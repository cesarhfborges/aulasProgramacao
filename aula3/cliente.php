<?php
require_once('pessoa.php');

class Cliente extends Pessoa {

    public $cartao;

    function __construct($nome, $sobrenome, $data_nasc, $rg, $cartao)
    {
        parent::__construct($nome, $sobrenome, $data_nasc, $rg);
        $this->cartao = $cartao;
    }

    public function getRg() {
        return $this->get('rg');
    }
}