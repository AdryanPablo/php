<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 10 a</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <form method="get">

        <label for="numero">Número: </label>
        <input type="number" name="numero" class="caixa">
        <fieldset class="opções"><legend>Operação</legend>

            <input type="radio" name="operacao" value="1" id="dobro" checked>
            <label for="dobro">Dobro</label>
            <input type="radio" name="operacao" value="2" id="cubo">
            <label for="cubo">Cubo</label>
            <input type="radio" name="operacao" value="3" id="raiz">
            <label for="raiz">Raiz Quadrada</label>

        </fieldset>
        <input type="submit" value="Calcular" class="botão">

    </form>

    <?php

        $numero = $_GET["numero"];
        $operacao = $_GET["operacao"];

        switch ($operacao) {

            case 1:

                $resultado = $numero * 2;
                echo "Dobro: ";
                break;

            case 2:

                $resultado = pow($numero, 3);
                echo "Cubo: ";
                break;

            case 3:

                $resultado = sqrt($numero);
                echo "Raiz: ";
                break;

        }

        echo "$resultado.";

    ?>
    
</body>
</html>