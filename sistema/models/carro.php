<?php

class Carro
{
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $potencia;
    public $capacidade;
    public $odometroAtual;
    public $litros;

    function __construct(
        $marca,
        $modelo,
        $ano,
        $cor,
        $potencia,
        $capacidade,
        $odometroAtual,
        $litros
    ) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->potencia = $potencia;
        $this->capacidade = $capacidade;
        $this->odometroAtual = $odometroAtual;
        $this->litros = $litros;
    }

    function capacidadeAtual()
    {
        $total = $this->litros / $this->capacidade;
        return $total * 100;
    }

    function andar($distancia)
    {
        //$autonomia = $this->litros * $this->consumo();
        if ($this->litros > 0) {
            if ($this->autonomia() >= $distancia) {
                $this->odometroAtual += $distancia;
                $litrosgastos = $distancia / $this->consumo();
            } else {
                $this->odometroAtual += $this->autonomia();
                $litrosgastos = $this->autonomia() / $this->consumo();
            }
            $this->litros -= $litrosgastos;
        }
    }

    function autonomia()
    {
        return $this->litros * $this->consumo();
    }

    private function consumo()
    {
        if ($this->potencia == 1) {
            return 18;
        } else if ($this->potencia == 1.6) {
            return 12;
        } else if ($this->potencia == 2) {
            return 8;
        }
    }
}
