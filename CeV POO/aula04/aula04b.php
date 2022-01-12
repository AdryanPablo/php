<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP POO - Aula 04b</title>

    <link rel="stylesheet" href="../estilos/estilo.css">

</head>
<body>

    <pre>

        <?php

            require_once "./CanetaB.php";

            $caneta1 = new Caneta;
            
            echo "Eu tenho uma caneta {$caneta1 -> getModelo()} {$caneta1 -> getCor()} de ponta {$caneta1 -> getPonta()} que está {$caneta1 -> getTampada()}.";
        
        ?>

    </pre>
    
</body>
</html>