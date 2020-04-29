<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 11 b</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <?php

        $contador = 1;
        while ($contador <= 5) {
            
            echo "<input type='number' name='numero$contador' value='1' class='caixa'>";
            $contador++;

        }

        echo "<input type='submit' value='Verificar' class='botão'>";

    ?>
    
</body>
</html>