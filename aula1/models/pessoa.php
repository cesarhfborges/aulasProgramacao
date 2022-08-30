<?php

class Pessoa {

    public $nome;
    public $sobrenome;
    public $data_nasc;
    public $telefone;

    function __construct($nome, $sobrenome, $data_nasc, $telefone) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->data_nasc = $data_nasc;
        $this->telefone = $telefone;
    }

    function nomeCompleto() {
        return $this->nome . ' ' . $this->sobrenome;
    }
}