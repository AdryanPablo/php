<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 08 a</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>    

    <form method="get">

        <label for="número">Número</label>
        <input type="number" name="numero" class="caixa" id="número">
        <input type="submit" value="Calcular Raiz" class="botão">

    </form>

    <?php

        $valor = $_GET["numero"];
        echo "O número digitado foi $valor.";

        $raiz = sqrt($valor);
        echo "<br>E sua raiz é " . number_format($raiz, 2) . ".";

    ?>
    
</body>
</html>