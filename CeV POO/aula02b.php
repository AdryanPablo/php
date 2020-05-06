<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Aula 02 b</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <?php

        require_once 'Chave.php';

        $chaveQuarto = new Chave;

        $chaveQuarto -> porta = "Quarto";
        $chaveQuarto -> abrirPorta($chaveQuarto -> porta);
        $chaveQuarto -> fecharPorta($chaveQuarto -> porta);

    ?>
    
</body>
</html>