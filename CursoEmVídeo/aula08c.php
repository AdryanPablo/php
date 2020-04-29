<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 08 c</title>
    <link rel="stylesheet" href="estilos/estilo.css">

    <?php

        $texto = $_GET["texto"];
        $tamanho = $_GET["tamanho"];
        $cor = $_GET["cor"];
        echo "<span>$texto</span>";

    ?>

    <style>

        span {
            font-size: <?php echo $tamanho; ?>pt;
            color: <?php echo $cor; ?>;
        }

    </style>

</head>
<body>

    <form method="get" style="display: flex; align-items: center;">

        <label for="texto">Texto: </label>
        <input type="text" name="texto" class="caixa">
        <label for="tamanho">Tamanho: </label>
        <input type="number" name="tamanho" class="caixa">
        <label for="cor">Cor: </label>
        <input type="color" name="cor" class="caixa">
        <input type="submit" value="Enviar" class="botão">

    </form>
    
</body>
</html>