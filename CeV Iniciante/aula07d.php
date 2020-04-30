<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 07d</title>

</head>
<body>

    <?php

        $idade = $_GET['idade'];
        $voto = ($idade >= 18 && $idade < 65) ? "obrigatório" : "não obrigatório";

        echo "Tendo $idade anos o voto é $voto.<br>";

    ?>
    
</body>
</html>