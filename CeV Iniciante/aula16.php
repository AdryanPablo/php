<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 16</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <?php

        $produto = "Leite";
        $preco = 4.5;

        printf("O %s custa R$%.2f.<br>", $produto, $preco);

        $vetor[0] = 0;
        $vetor[1] = 1;
        $vetor[2] = 2;

        print_r($vetor);

        $texto = "<br>Lorem ipsum dolor laboriosam, dolores id illo fuga similique laudantium, enim quo nesciunt ea perferendis quaerat necessitatibus animi incidunt soluta ex voluptas accusamus eveniet dicta.";
        $palavras = str_word_count($texto);

        echo wordwrap($texto, 20, "<br>\n", false);
        echo "<br>O texto tem $palavras palavras.";        

        $nome = "    Fulano de Tal   ";
        $tamanho1 = strlen($nome);

        echo "<br>$nome tem $tamanho1 caracteres";

        $tamanho2 = strlen(trim($nome));
        $nomes = explode(" ", trim($nome));
        $letras = str_split($nome);

        echo " e, após o tratamento, ficou com $tamanho2.<br>";
        print_r($nomes);
        echo "<br>";
        print_r($letras);

        echo implode("#", $nomes);

        $letra1 = chr(67);
        $letra2 = ord("c");

        echo "<br>Código 67: $letra1 / c: $letra2";

    ?>
    
</body>
</html>