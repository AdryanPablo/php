<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 06c</title>

</head>
<body>

    <?php

        $a = 3;
        $b = &$a;   // Ao fazer referência com variáveis, o que acontecer com uma também acontece com a outra.
        $b += 7;

        echo "A = $a.<br>";
        echo "B = $b.<br>";

        $a -= 5;

        echo "A = $a.<br>";
        echo "B = $b.<br>";

    ?>
    
</body>
</html>
