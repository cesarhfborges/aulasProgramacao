<?php
require_once 'assets/layout/head.php';

echo '<div  class ="row">';

foreach ($carros as $carro) {
    echo '<div class="col-6">';
    echo '<div class="card">';
    echo '  <div class="card-body">';
    echo "    <p>Marca: $carro->marca</p>";
    echo "    <p>Modelo: $carro->modelo</p>";
    echo "    <p>Capacidade no tanque:  " . $carro->capacidade . "</p>";
    echo "    <p>litros no tanque:  " . $carro->litros . "</p>";
    echo "    <p>Capacidade atual de combustivel: " . round($carro->capacidadeAtual(), 2) . '%' . "</p>";
    echo "    <p>Odometro atual: " . $carro->odometroAtual . "</p>";

    echo '<p style="color: red;">Andei !!!</p>';
    $carro->andar(239);

    echo "    <p><b>litros no tanque: " . $carro->litros . "</b></p>";
    echo "    <p><b>Odometro atual: " . $carro->odometroAtual . "</b></p>";
    echo "    <p><b>Capacidade atual de combustivel:" . round($carro->capacidadeAtual(), 2) . '%' . "</b></p>";

    echo '  </div>';
    echo '</div>';
    echo '</div>';
}

echo '</div>';




// echo "Veiculo: $carro1->modelo";
// echo '<br>';
// echo 'Capacidade atual de combustivel: ' . round($carro1->capacidadeAtual(), 2) . '%';
// echo '<br>';
// echo 'Potencia: ' . $carro1->potencia;
// echo '<br>';
// echo 'litros no tanque: ' . $carro1->litros;
// 
// echo '<br>';
// echo 'Odometro atual: ' . $carro1->odometroAtual;
// 
// echo '<br>';
// echo 'andei';
// $carro1->andar(239);
// 
// echo '<br>';
// echo 'Odometro atual: ' . $carro1->odometroAtual;
// echo '<br>';
// echo 'litros no tanque: ' . $carro1->litros;
// 
// 
// echo "Veiculo: $carro2->modelo";
// echo '<br>';
// echo 'Capacidade atual de combustivel: ' . round($carro2->capacidadeAtual(), 2) . '%';
// echo '<br>';
// echo 'Potencia: ' . $carro2->potencia;
// echo '<br>';
// echo 'litros no tanque: ' . $carro2->litros;
// 
// echo '<br>';
// echo 'Odometro atual: ' . $carro2->odometroAtual;
// 
// echo '<br>';
// echo 'andei';
// $carro1->andar(239);
// 
// echo '<br>';
// echo 'Odometro atual: ' . $carro2->odometroAtual;
// echo '<br>';
// echo 'litros no tanque: ' . $carro2->litros;


require_once 'assets/layout/footer.php';
