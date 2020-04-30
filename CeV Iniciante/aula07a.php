<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 07a</title>

</head>
<body>

    <?php

        $número1 = $_GET['numero1'];
        $número2 = $_GET['numero2'];
        $operação = $_GET['operacao'];

        echo "Os valores são $número1 e $número2.<br>";

        $resultado = $operação == 'soma' ? $número1 + $número2 : $número1 * $número2;

        echo "O resultado é $resultado.";

    ?>
    
</body>
</html>