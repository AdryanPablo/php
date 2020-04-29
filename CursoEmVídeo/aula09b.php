<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula x</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <form method="get">

        <label for="nota1">1ª Nota: </label>
        <input type="number" name="nota1" class="caixa">
        <label for="nota2">2ª Nota: </label>
        <input type="number" name="nota2" class="caixa">
        <input type="submit" value="Analisar" class="botão">

    </form>

    <?php

        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $média = ($nota1 + $nota2) / 2;

        if ($média < 5) {

            $situação = "REPROVADO";

        } else if ($média < 7) {

            $situação = "EM RECUPERAÇÃO";

        } else {

            $situação = "APROVADO";

        }

        echo "Com as notas " . number_format($nota1, 1) . " e " . number_format($nota2, 1) . " a média do aluno foi " . number_format($média, 1) . ".";
        echo "<br>Portanto, sua situação é: $situação";

    ?>
    
</body>
</html>