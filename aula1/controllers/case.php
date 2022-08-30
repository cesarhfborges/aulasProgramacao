<?php

$numero = 50;

switch ($numero) {
    case 1:
        echo "sou numero um";
        break;
    case 2:
        echo "sou numero dois";
        break;
    case 10:
        echo "sou numero dez";
        break;
    default:
        echo "nao achei nada";
        break;
}


if ($numero == 1) {
    echo "sou numero um";
} else if ($numero == 2) {
    echo "sou numero dois";
} else if ($numero == 10) {
    echo "sou numero dez";
} else {
    echo "nao achei nada";
}