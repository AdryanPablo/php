<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP POO - Aula 08</title>

    <link rel="stylesheet" href="../estilos/estilo.css">
</head>
<body>

    <h1 class="títulos">UEC - Ultra Emoji Combat</h1>

    <?php

        require_once "Lutador.php";
        require_once "Luta.php";

        $lutadores = [
            new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 3, 1),
            new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3),
            new Lutador('Snapshadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1),
            new Lutador('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2),
            new Lutador('Ufucobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3),
            new Lutador('Nerdaard', 'EUA', 30, 1.81, 105.7, 12, 2, 4)
        ];

        $UEC01 = new Luta;
        $UEC01 -> marcarLuta($lutadores[0], $lutadores[1], 'Aleatória', 3);
        $UEC01 -> lutarAleatoriamente();

        $UEC01 -> getDesafiante() -> status();
        $UEC01 -> getDesafiado() -> status();

    ?>
    
</body>
</html>