<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula x</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <?php

        $contador = 0;

        do {

            echo "$contador <br>";
            $contador ++;

        } while ($contador <= 10);

        echo "<br> === x === <br>";

        do {

            echo "<br>$contador";
            $contador --;

        } while ($contador >= 0);

    ?>
    
</body>
</html>