<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Aula 02 a</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <pre>

        <?php

            require_once 'Caneta.php';

            $caneta1 = new Caneta;

            $caneta1 -> cor = "Azul";
            $caneta1 -> ponta = 0.5;
            $caneta1 -> tampada = false;
            //$caneta1 -> tampada = true;

            $caneta1 -> escrever();
            $caneta1 -> tampar();
            $caneta1 -> escrever();      

            print_r($caneta1);
            //var_dump($caneta1);

            $caneta2 = new Caneta;

            $caneta2 -> cor = "Vermelha";
            $caneta2 -> tampar();

            print_r($caneta2);

        ?>

    </pre>
    
</body>
</html>