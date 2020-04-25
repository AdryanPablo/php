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

        <label for="nome">Nome: </label>
        <input type="text" name="nome" class="caixa" id="nome">
        <label for="ano">Ano de Nascimento: </label>
        <input type="number" name="ano" class="caixa" id="ano">
        <fieldset class="opções"><legend>Sexo</legend>

            <input type="radio" name="sexo" value="masculino" id="masculino">
            <label for="masculino">Masculino</label>
            <input type="radio" name="sexo" value="feminino" id="feminino">
            <label for="feminino">Feminino</label>
            
        </fieldset>
        <input type="submit" value="Enviar" class="botão">

    </form>

    <?php

        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano;

        echo "$nome é do sexo $sexo e tem $idade anos."

    ?>
    
</body>
</html>