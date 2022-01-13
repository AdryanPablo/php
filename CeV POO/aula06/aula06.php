<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP POO - Aula 06</title>

    <link rel="stylesheet" href="../estilos/estilo.css">
</head>
<body>

    <h1>Controle Remoto</h1>

    <pre>

        <?php

            require_once "ControleRemoto.php";

            $controleRemoto = new ControleRemoto;
            $controleRemoto -> ligar();
            $controleRemoto -> aumentarVolume();
            $controleRemoto -> abrirMenu();
            $controleRemoto -> reproduzir();

            $controleRemoto -> diminuirVolume();
            $controleRemoto -> diminuirVolume();
            $controleRemoto -> mutar();
            $controleRemoto -> pausar();
            $controleRemoto -> abrirMenu();

            $controleRemoto -> desmutar();
            $controleRemoto -> reproduzir();
            $controleRemoto -> desligar();

        ?>

    </pre>

</body>
</html>