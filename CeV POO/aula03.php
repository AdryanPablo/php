<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Aula 03</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <pre>

        <?php

            require_once 'Caneta.php';

            $canetaAzul = new Caneta;
            $canetaAzul -> modelo = "Bic";
            $canetaAzul -> cor = "Azul";
            //$canetaAzul -> ponta = 0.5;

            $canetaAzul -> tampar();

            print_r($canetaAzul);

        ?>

    </pre>
    
</body>
</html>