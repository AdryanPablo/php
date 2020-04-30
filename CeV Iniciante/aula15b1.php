<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 15 b</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <?php

        include "aula15b2.php"; // Se não achar o arquivo, vai continuar com a execução do código.

        ola();
        echo "<br>";
        hello();

        require "aula15b3.php"; // Se não encontrar, vai parar a execução.

        echo "Pós require";

    ?>
    
</body>
</html>