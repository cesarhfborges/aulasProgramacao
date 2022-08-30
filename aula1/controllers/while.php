<?php

// $lista = array("cesar", "bruno", "ederson", "diego", "jadson");

$add = array();

$fazer = false;

$i = 0;

while ($fazer) {
    if ($i < 1000) {
        array_push($add, $i);
        echo $i;
    } else {
        $fazer = false;
    }
    $i++;
}