<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Aula 14</title>
</head>
<body>
    
    <pre>

        <?php

            require_once "./Video.php";
            require_once "./Gafanhoto.php";

            $videos = [
                new Video('Aula 1 PHP POO'),
                new Video('Aula 2 PHP POO'),
                new Video('Aula 3 PHP POO'),
                new Video('Aula 4 PHP POO'),
                new Video('Aula 5 PHP POO')
            ];

            $gafanhotos = [
                new Gafanhoto('Leonardo', 'Leo'),
                new Gafanhoto('Rafael', 'Rafa'),
                new Gafanhoto('Daniela', 'Dani'),                
            ];

            print_r($videos);
            print_r($gafanhotos);
        
        ?>

    </pre>
    
</body>
</html>