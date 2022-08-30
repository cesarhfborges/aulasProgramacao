<?php
require('./models/cliente.php');
?>

<table>
    <thead>
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>sobrenome</td>
            <td>sexo</td>
            <td>rg/ie</td>
            <td>cpf/cnpj</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $listaClientes = Cliente::getClientes();
        foreach ($listaClientes as $cliente) {
            echo '<tr>';
            echo '<td>' . $cliente->id . '</td>';
            echo '<td>' . $cliente->nome . '</td>';
            echo '<td>' . $cliente->sobrenome . '</td>';
            echo '<td>' . $cliente->getLabelSexo() . '</td>';
            echo '<td>' . $cliente->rg_ie . '</td>';
            echo '<td>' . $cliente->cpf_cnpj . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>



<?php
//$novoCliente = new Cliente();
//$novoCliente->nome = 'Andrea';
//$novoCliente->sobrenome = 'Souza';
//$novoCliente->sexo = 'M';
//$novoCliente->rg_ie = '7777777';
//$novoCliente->cpf_cnpj = '99988877766';
//$novoCliente->create();
?>