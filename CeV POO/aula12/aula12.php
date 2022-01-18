<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Aula 12</title>
</head>
<body>

    <pre>

        <h1>Zoológico</h1>

        <?php

            require_once "./Mamifero.php";
            require_once "./Reptil.php";
            require_once "./Peixe.php";
            require_once "./Ave.php";
            require_once "./Canguru.php";
            require_once "./Cachorro.php";
            require_once "./Gato.php";
            require_once "./Cobra.php";
            require_once "./Tartaruga.php";
            require_once "./PeixeDourado.php";
            require_once "./Arara.php";

            $mamifero = new Mamifero;
            $reptil = new Reptil;
            $peixe = new Peixe;
            $ave = new Ave;
            $canguru = new Canguru;
            $cachorro = new Cachorro;
            $gato = new Gato;
            $cobra = new Cobra;
            $tartaruga = new Tartaruga;
            $peixeDourado = new PeixeDourado;
            $arara = new Arara;

            ?><h2>Mamífero</h2><?php
            
            print_r($mamifero);
            $mamifero -> locomover();
            $mamifero -> alimentar();
            $mamifero -> emitirSom();

            ?><h2>Réptil</h2><?php

            print_r($reptil);
            $reptil -> locomover();
            $reptil -> alimentar();
            $reptil -> emitirSom();

            ?><h2>Peixe</h2><?php

            print_r($peixe);
            $peixe -> locomover();
            $peixe -> alimentar();
            $peixe -> emitirSom();
            $peixe -> soltarBolha();

            ?><h2>Ave</h2><?php
            
            print_r($ave);
            $ave -> locomover();
            $ave -> alimentar();
            $ave -> emitirSom();
            $ave -> fazerNinho();

            ?><h2>Canguru</h2><?php

            $canguru -> locomover();
            $canguru -> alimentar();
            $canguru -> emitirSom();
            $canguru -> usarBolsa();

            ?><h2>Cachorro</h2><?php

            $cachorro -> locomover();
            $cachorro -> alimentar();
            $cachorro -> emitirSom();
            $cachorro -> enterrarOsso();
            $cachorro -> abanarRabo();

            ?><h2>Gato</h2><?php

            $gato -> locomover();
            $gato -> alimentar();
            $gato -> emitirSom();

            ?><h2>Cobra</h2><?php

            $cobra -> locomover();
            $cobra -> alimentar();
            $cobra -> emitirSom();

            ?><h2>Tartaruga</h2><?php

            $tartaruga -> locomover();
            $tartaruga -> alimentar();
            $tartaruga -> emitirSom();
            $tartaruga -> esconderCabeca();

            ?><h2>Peixe Dourado</h2><?php

            $peixeDourado -> locomover();
            $peixeDourado -> alimentar();
            $peixeDourado -> emitirSom();
            $peixeDourado -> soltarBolha();

            ?><h2>Arara</h2><?php

            $arara -> locomover();
            $arara -> alimentar();
            $arara -> emitirSom();

        ?>

    </pre>
    
</body>
</html>