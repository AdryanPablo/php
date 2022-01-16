<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Aula 09</title>
</head>
<body>

    <pre>

        <?php

            require_once "./Pessoa.php";
            require_once "./Publicacao.php";

            $pessoa = new Pessoa('Adryan', 19, 'M');
            $livro = new Livro('Essencialismo', 'Greg McKeown', 265, $pessoa);

            $livro -> detalhes();

            $livro -> abrir();
            $livro -> folhear(150);
            $livro -> detalhes();

            $livro -> fechar();
            $livro -> detalhes();

            $livro -> abrir();
            
            $livro -> detalhes();
            
        ?>

    </pre>
    
</body>
</html>