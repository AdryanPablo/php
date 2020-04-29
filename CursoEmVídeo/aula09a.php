<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 09 a</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <form method="get">

        <label for="ano">Ano de Nascimento: </label>
        <input type="number" name="ano" class="caixa">
        <input type="submit" value="Verificar" class="botão">

    </form>

    <?php

        $ano = $_GET["ano"];
        echo "Você nasceu em $ano.";

        $idade = date("Y") - $ano;
        echo "<br>Você tem $idade anos.";

        if ($idade < 16) {

            $votar = "não pode votar";
            $dirigir = "não pode dirigir";

        } else if ($idade < 18) {

            $votar = "pode votar";
            $dirigir = "não pode dirigir";

        } else if ($idade >= 70) {

            $votar = "pode votar";
            $dirigir = "pode dirigir";

        } else {

            $votar = "deve votar";
            $dirigir = "pode dirigir";

        }

        echo "<br>Você $votar e $dirigir.";

    ?>
    
</body>
</html>