<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 13 c</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <h1 class="títulos">Analisador de Número Primos</h1>

    <form action="">

        <label for="numero">Número: </label>
        <input type="number" name="numero" value="2" min="2" class="caixa">
        <input type="submit" value="Verificar" class="botão">

    </form>

    <?php

        $numero = $_GET["numero"];
        $acumulador = 0;

        echo "<h2 class='subtítulos'>Analisando o número $numero:</h2>";
        echo "Ele é divisível por: ";

        for ($contador = 1; $contador <= $numero; $contador ++) {

            if ($numero % $contador == 0) {

                echo "$contador ";  // Mostrar número que é divisível
                $acumulador ++;                

            }

        }

        echo "<br>$numero é divisível por $acumulador números.";

        if ($acumulador > 2) {

            echo "<br>Portanto não é primo!";

        } else {

            echo "<br>Portanto é primo!";

        }

    ?>
    
</body>
</html>