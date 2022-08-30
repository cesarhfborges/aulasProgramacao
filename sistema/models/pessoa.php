<?php

class Pessoa
{
    public $nome;
    public $sobrenome;
    public $sexo;
    public $rg_ie;
    public $cpf_cnpj;

    public function __construct(
        $nome = null,
        $sobrenome = null,
        $sexo = null,
        $rg_ie = null,
        $cpf_cnpj = null
    ) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->sexo = $sexo;
        $this->rg_ie = $rg_ie;
        $this->cpf_cnpj = $cpf_cnpj;
    }
}
