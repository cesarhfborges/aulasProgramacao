<?php
require_once('pessoa.php');

class Funcionario extends Pessoa {

    public $cargo;
    public $salario;

    function __construct($nome, $sobrenome, $data_nasc, $rg, $cargo, $salario)
    {
        parent::__construct($nome, $sobrenome, $data_nasc, $rg);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    function getDataNasc() {
        return $this->data_nasc;
    }

    public function getRg() {
        return '***' . substr($this->get('rg'), 3);
    }
}