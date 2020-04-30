<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 12 a</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <form method="get">

        <label for="">Número: </label>
        <input type="number" name="numero" value="1" min="1" class="caixa">
        <input type="submit" value="Calcular" class="botão">

    </form>

    <?php

        $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;
        $contador = $numero;
        $fatorial = 1;
        
        do {

            $fatorial *= $contador;
            $contador --;

        } while ($contador > 0);

        echo "$numero! = $fatorial";

    ?>
    
</body>
</html>