<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 13 b 1</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <form method="get" action="aula13b2.php">

        <label for="numero">Número: </label>
        <select name="numero" class="caixa">

            <?php

                for ($contador = 1; $contador <= 10; $contador ++) {

                    echo "<option value='$contador'>$contador</option>";

                }

            ?>

        </select>
        <input type="submit" value="Calcular" class="botão">
    
    </form>
    
</body>
</html>