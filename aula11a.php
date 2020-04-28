<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 11 a</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <form action="">

        <label for="operacao">Operação:</label>
        <select name="operacao" class="caixa">

            <option value="Progressiva" checked>Progressiva</option>
            <option value="Regressiva">Regressiva</option>

        </select>
        <label for="salto">Salto: </label>
        <input type="number" name="salto" value="1" min="1" max="10" class="caixa" >
        <input type="submit" value="Contar" class="botão">

    </form>

    <?php

        $operacao = $_GET["operacao"];
        $salto = isset($_GET["salto"]) ? $_GET["salto"] : 1;

        switch ($operacao) {

            case "Progressiva":

                $num = 1;

                while ($num <= 10) {

                    echo "$num <br>";
                    $num += $salto;
        
                }

                break;

            case "Regressiva":

                $num = 10;

                while ($num >= 1) {

                    echo "$num <br>";
                    $num -= $salto;

                }

                break;

        }

    ?>
    
</body>
</html>