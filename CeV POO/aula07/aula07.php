<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP POO - Aula 07</title>

    <link rel="stylesheet" href="../estilos/estilo.css">
</head>
<body>

    <h1 class="títulos">UEC - Ultra Emoji Combat</h1>

    <pre>
        <?php

            require_once "Lutador.php";

            $lutadores = [
                new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 3, 1),
                new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3),
                new Lutador('Snapshadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1),
                new Lutador('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2),
                new Lutador('Ufucobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3),
                new Lutador('Nerdaard', 'EUA', 30, 1.81, 105.7, 12, 2, 4)
            ];

            $lutadores[0] -> apresentar();
            $lutadores[1] -> apresentar();
            $lutadores[2] -> apresentar();
            $lutadores[3] -> apresentar();
            $lutadores[4] -> apresentar();

            $lutadores[0] -> status();
            $lutadores[1] -> status();
            $lutadores[2] -> status();
            $lutadores[3] -> status();
            $lutadores[4] -> status();

        ?>
    </pre>
    
</body>
</html>