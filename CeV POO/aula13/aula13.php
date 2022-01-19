<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Aula 13</title>
</head>
<body>

    <pre>

        <?php

            require_once "./Cachorro.php";

            //$animal = new Animal;
            $mamifero = new Mamifero;
            $lobo = new Lobo;
            $cachorro = new Cachorro;

            //print_r($animal);
            print_r($mamifero);
            print_r($lobo);
            print_r($cachorro);
            
            $cachorro -> reagirFrase('Vem cá');
            $cachorro -> reagirFrase('Sai daqui');
            $cachorro -> reagirHorario(10);
            $cachorro -> reagirHorario(15);
            $cachorro -> reagirHorario(21);
            $cachorro -> reagirDono(true);
            $cachorro -> reagirDono(false);
        
        ?>

    </pre>
    
</body>
</html>