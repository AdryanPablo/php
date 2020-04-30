<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 05c - Valores Personalizados</title>

    <style>

        * {
            font: 14pt Purisa;
        }
    
    </style>

</head>

<body>

    <?php

        $número1 = $_GET['a'];
        $número2 = $_GET['b'];
        $número3 = $_GET['c'];

        $soma = $número1 + $número2;
        $potência = pow($número1, $número2);
        $raiz = sqrt($número1);

        echo "A soma entre $número1 e $número2 é $soma.";
        echo "<br/>$número1<sup>$número2</sup> = $potência.";
        echo "<br/>A raiz quadrada de $número1 é $raiz.";
        echo "<br/>$número3 arredondado é ". round($número3).".";

        echo "<br/>R$" . number_format($número2, 2);
    
    ?>

</body>

</html>