<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 10 b</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <form method="get">

        <fieldset class="opções"><legend>Dia da Semana</legend>

            <input type="radio" name="dia" value="Domingo" id="domingo">
            <label for="domingo">Domingo</label>
            <input type="radio" name="dia" value="Segunda" id="segunda" checked>
            <label for="segunda">Segunda</label>
            <input type="radio" name="dia" value="Terça" id="terça">
            <label for="terça">Terça</label>
            <input type="radio" name="dia" value="Quarta" id="quarta">
            <label for="quarta">Quarta</label>
            <input type="radio" name="dia" value="Quinta" id="quinta">
            <label for="quinta">Quinta</label>
            <input type="radio" name="dia" value="Sexta" id="sexta">
            <label for="sexta">Sexta</label>
            <input type="radio" name="dia" value="Sábado" id="sábado">
            <label for="sábado">Sábado</label>

        </fieldset>
        <input type="submit" value="Avaliar" class="botão">

    </form>

    <?php

        $dia = $_GET["dia"];   // Dia da semana;

        switch ($dia) {

            case "Segunda":
            case "Terça":
            case "Quarta":
            case "Quinta":
            case "Sexta":
                
                $situacao = "vai pra escola";
                break;

            case "Sábado":
            case "Domingo":

                $situacao = "pode descansar";

        }

        echo "Hoje é $dia. Você $situacao!";

    ?>
    
</body>
</html>