<?php

class Produto {

    public $descricao;
    public $valorUnitario;
    public $quantidade;

    function __construct($descricao, $valorUnitario, $quantidade) {
        $this->descricao = $descricao;
        $this->valorUnitario = $valorUnitario;
        $this->quantidade = $quantidade;
    }

    function total() {
        return $this->valorUnitario * $this->quantidade;
    }

    public static function somaTudo($produtos) {
        $total = 0;
        foreach ($produtos as $p) {
            $total += $p->total();
        }
        return $total;
    }
}