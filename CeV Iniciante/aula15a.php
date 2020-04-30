<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 15 a</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <?php

        function parâmetroValor ($a) {

            $a ++;
            echo "A: $a<br>";

        }

        function parâmetroReferência (&$b) {

            $b ++;
            echo "B: $b<br>";

        }

        $x = 5;
        $y = 10;

        echo "<h2 class='subtítulos'>Início:</h2>";

        echo "X: $x<br>";
        echo "Y: $y<br>";

        echo "<h2 class='subtítulos'>Funções:</h2>";

        parâmetroValor($x);
        parâmetroReferência($y);

        echo "<h2 class='subtítulos'>Final:</h2>";

        echo "X: $x<br>";
        echo "Y: $y<br>";

    ?>
    
</body>
</html>