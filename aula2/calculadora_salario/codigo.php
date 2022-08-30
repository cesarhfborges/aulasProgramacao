<?php

$valor_hora = isset($_POST['valor_hora']) ? $_POST['valor_hora'] : "";
$dias_mes = isset($_POST['dias_mes']) ? $_POST['dias_mes'] : "";
$horas_dia = isset($_POST['horas_dia']) ? $_POST['horas_dia'] : "";

function calcular($valorH, $diasM, $horasD) {
    if (is_numeric($valorH) && is_numeric($diasM) && is_numeric($horasD)) {
        $total = ($valorH * $horasD) * $diasM;
        return "Valor liquido mensal: " . $total;
    } else {
        return "Preencha os valores com números.";
    }
};
?>