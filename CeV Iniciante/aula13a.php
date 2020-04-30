<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 13 a</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <?php

        for ($contador = 1; $contador <= 10; $contador ++) {

            echo "$contador ";

        }

        echo "<br><br> === x === <br><br>";

        for ($contador = 10; $contador >= 1; $contador --) {

            echo "$contador ";

        }

        echo "<br><br> === x === <br><br>";

        for ($contador = 0; $contador <= 50; $contador += 5) {

            echo "$contador ";

        }

        echo "<br><br> === x === <br><br>";

        for ($contador = 20; $contador >= 0; $contador -= 2) {

            echo "$contador ";

        }

    ?>
    
</body>
</html>