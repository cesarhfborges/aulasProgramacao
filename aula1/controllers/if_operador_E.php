<?php

$numero1 = 10;
$numero2 = 30;
$numero3 = 79;

$numero3 = $numero1 . $numero2;

// if maior
if ($numero1 == 10 && ($numero2 == 30 && !($numero3 == 50))) {
    echo "SIM entrei";
} else {
    echo "NÃO entrei";
}

// if menor
echo $numero1 == 10 ? "SIM entrei" : "NÃO entrei";
$total = $numero1 == 10 ? $numero2 : $numero3;
echo $total;