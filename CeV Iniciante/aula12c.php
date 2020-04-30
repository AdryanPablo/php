<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 12 c</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <form method="get">

        <label for="numero">Número: </label>
        <select name="numero" class="caixa">

            <?php

                $contador = 1;

                do {

                    echo "<option value='$contador'>$contador</option>";
                    $contador ++;

                } while ($contador <= 10);         

            ?>            

        </select>
        <input type="submit" class="botão">

    </form>

    <?php

        $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;
        $contador = 1;

        do {

            echo "<br>$numero x $contador = " . ($numero * $contador);
            $contador ++;

        } while ($contador <= 10);

    ?>
    
</body>
</html>