<?php

$nome_peca = isset($_POST['nome_peca']) ? $_POST['nome_peca'] : null;
$qtd_peca = isset($_POST['qtd_peca']) ? $_POST['qtd_peca'] : null;
$valor_peca = isset($_POST['valor_peca']) ? $_POST['valor_peca'] : null;

$total = null;

function calcular($qtd, $valor) {
    return $qtd * $valor;
}


if ($nome_peca && $qtd_peca && $valor_peca) {
    $total = calcular($qtd_peca, $valor_peca);
}