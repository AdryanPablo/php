<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 06b</title>

</head>

<body>

    <?php

        $anoAtual = $_GET['anoAtual'];  // Pega o ano atual na URL

        echo "O ano atual é $anoAtual.<br>";
        echo "O ano passado foi " . --$anoAtual . "."

    ?>
    
</body>
</html>