<?php
session_start();

require('./calculadora.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nome_peca">Nome peça:</label>
        <input type="text" name="nome_peca" id="nome_peca" value="<?php echo $nome_peca ? $nome_peca : '';?>">

        <label for="qtd_peca">Quantidade peças:</label>
        <input type="text" name="qtd_peca" id="qtd_peca" value="<?php echo $qtd_peca ? $qtd_peca : '';?>">

        <label for="valor_peca">Valor peça:</label>
        <input type="text" name="valor_peca" id="valor_peca" value="<?php echo $valor_peca ? $valor_peca : '';?>">

        <button type="reset">Limpar</button>
        <button type="submit">Enviar</button>
    </form>

    <h1><?php echo $total ? $total : ''; ?></h1>
</body>
</html>