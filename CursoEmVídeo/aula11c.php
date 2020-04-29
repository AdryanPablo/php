<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 11 c</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <form method="get">

        <label for="inicio">Início: </label>
        <input type="number" name="inicio" value="1" class="caixa">
        <label for="final">Final: </label>
        <input type="number" name="final" value="10" class="caixa">
        <label for="salto">Salto: </label>
        <input type="number" name="salto" value="1" class="caixa">
        <input type="submit" value="Contar" class="botão">

    </form>

    <?php

        $inicio = $_GET["inicio"];
        $final = $_GET["final"];
        $salto = $_GET["salto"];
        $contador = $inicio;
        
        if ($inicio <= $final) {    // Progressiva

            while ($contador <= $final) {

                echo "$contador<br>";
                $contador += $salto;

            }

        } else {    // Regressiva

            while ($contador >= $final) {

                echo "$contador<br>";
                $contador -= $salto;

            }

        }

    ?>
    
</body>
</html>