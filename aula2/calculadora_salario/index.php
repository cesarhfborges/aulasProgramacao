<?php
require './codigo.php';
sleep(2);
?>
<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <base href="/" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <form method="post">
        <div>
            <label for="valor_hora">Valor Hora</label>
            <input name="valor_hora" id="valor_hora" type="text" value="<?php echo $valor_hora;?>">
        </div>

        <div>
            <label for="horas_dia">Horas/dia</label>
            <input name="horas_dia" id="horas_dia" type="text" value="<?php echo $horas_dia;?>">
        </div>

        <div>
        <label for="dias_mes">Dias mês</label>
        <input name="dias_mes" id="dias_mes" type="text" value="<?php echo $dias_mes;?>">
        </div>

        <div>
            <button type="reset">Limpar</button>
            <button type="submit">Enviar</button>
        </div>
    </form>

    <h1><?php echo calcular($valor_hora, $dias_mes, $horas_dia); ?></h1>


    <script type="text/javascript" src="js/interacao.js"></script>
</body>
</html>