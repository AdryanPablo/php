<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 07c</title>

</head>
<body>

    <?php

        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $média = ($nota1 + $nota2) / 2;

        echo "As notas foram $nota1 e $nota2 e a média é $média.<br>";

        $situação = $média < 6 ? "Reprovado" : "Aprovado";

        echo "O aluno está $situação!";

    ?>
    
</body>
</html>