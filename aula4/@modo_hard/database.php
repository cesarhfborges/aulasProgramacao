<?php

$host = '127.0.0.1';
$port = '3306';
$user = 'root';
$pass = '';
$database = 'sistema';



$db = mysqli_connect($host . ':' . $port, $user, $pass, $database);

if (!$db) {
    die('Não foi possivel conectar ao banco de dados.' . mysqli_connect_error());
}

// echo 'Conexaão bem sucedida';


$result = $db->query("
select
sum(`casosNovos`) as 'total de casos',
`estado`
from `covid` 
where `estado` != '' and `casosNovos` > 0
group by `estado`
order by `total de casos` desc;
");

if ($result) {

    $clientes = $result->fetch_all();
?>

    <table style="border: 1px solid #000000;">
        <thead>
            <tr>
                <th>Total de casos</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($clientes as $cliente) {
                echo "
                <tr>
                    <td>$cliente[0]</td>
                    <td>$cliente[1]</td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>

<?php

} else {
    echo 'nenhum cliente cadastrado!';
}


mysqli_close($db);
