<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 17</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <?php

        $nome = "AdRyan PAblo";

        echo "$nome <br> " . strtolower($nome) . "<br>" . strtoupper($nome);
        echo "<br>" . ucfirst(strtolower($nome));
        echo "<br>" . ucwords(strtolower($nome));
        echo "<br>" . ucwords(strrev(strtolower($nome)));
        echo "<br>Letra P na " . stripos($nome, "p") . "ª posição.";
        echo "<br>O nome tem " . substr_count(strtolower($nome), "a") . " letras a.";
        echo "<br>" . substr($nome, 0, 7);
        echo "<br>" . str_pad(substr($nome, 0, 7), 30, "=", STR_PAD_BOTH);
        echo "<br>" . str_repeat("Php", 5);

        $frase = "Gosto de estudar matemática";

        echo "<br>$frase";
        echo "<br>" . str_ireplace("Matemática", "PHP", $frase);

    ?>
    
</body>
</html>