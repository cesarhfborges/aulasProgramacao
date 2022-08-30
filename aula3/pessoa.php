<?php

abstract class Pessoa {
    
    public $nome;
    public $sobrenome;
    
    protected $data_nasc;

    private $rg;

    function __construct($nome, $sobrenome, $data_nasc, $rg)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->data_nasc = $data_nasc;
        $this->rg = $rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    public function getRg() {
        return $this->rg;
    }

    protected function get($name)
   {
      return $this->$name;
   }
}