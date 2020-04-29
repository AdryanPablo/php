<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 07b</title>

</head>
<body>

    <?php

        $a = 5;
        $b = "5";
        $igual = $a == $b ? "Sim" : "Não";
        $idêntico = $a === $b ? "Sim" : "Não";

        echo "A é igual a B? $igual.<br>";
        echo "A é idêntico a B? $idêntico.<br>";

    ?>
    
</body>
</html>