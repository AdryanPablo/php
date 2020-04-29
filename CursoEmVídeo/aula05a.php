<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 05a</title>

</head>

<body>

    <?php

        $número1 = 15;
        $número2 = 12;

        $soma = $número1 + $número2;
        $subtração = $número1 - $número2;
        $multiplicação = $número1 * $número2;
        $divisão = $número1 / $número2;
        $módulo = $número1 % $número2;

        echo "A soma entre $número1 e $número2 é $soma.<br/>";
        echo "A diferença entre $número1 e $número2 é $subtração.<br/>";
        echo "O produto de $número1 e $número2 é $multiplicação.<br/>";
        echo "A razão entre $número1 e $número2 é $divisão.<br/>";
        echo "O resto da divisão entre $número1 e $número2 é $módulo.<br/>";
    
    ?>

</body>

</html>