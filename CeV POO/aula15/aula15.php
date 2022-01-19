<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Aula 15</title>
</head>
<body>
    
    <pre>

        <?php

            require_once "./Video.php";
            require_once "./Gafanhoto.php";
            require_once "./Visualizacao.php";

            ?><h2>Vídeos</h2><?php

            $videos = [
                new Video('Aula 1 PHP POO'),
                new Video('Aula 2 PHP POO'),
                new Video('Aula 3 PHP POO'),
                new Video('Aula 4 PHP POO'),
                new Video('Aula 5 PHP POO')
            ];

            print_r($videos);

            ?><h2>Gafanhotos</h2><?php

            $gafanhotos = [
                new Gafanhoto('Leonardo', 'Leo'),
                new Gafanhoto('Rafael', 'Rafa'),
                new Gafanhoto('Daniela', 'Dani'),                
            ];

            print_r($gafanhotos);

            ?><h2>Visualizações</h2><?php

            $visualizacoes = [
                new Visualizacao($gafanhotos[0], $videos[0]),
                new Visualizacao($gafanhotos[0], $videos[1]),
                new Visualizacao($gafanhotos[0], $videos[2]),
                new Visualizacao($gafanhotos[0], $videos[3]),
                new Visualizacao($gafanhotos[1], $videos[0]),
                new Visualizacao($gafanhotos[1], $videos[1]),
                new Visualizacao($gafanhotos[2], $videos[0]),
                new Visualizacao($gafanhotos[2], $videos[1]),
                new Visualizacao($gafanhotos[2], $videos[2]),
                new Visualizacao($gafanhotos[2], $videos[3]),
                new Visualizacao($gafanhotos[2], $videos[4])
            ];

            print_r($visualizacoes);
        
        ?>

    </pre>
    
</body>
</html>