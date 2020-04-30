<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 19</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <pre>

        <?php

            echo "<h1 class='títulos'>Funções Para Vetores</h1>";

            $letras = array("E", "C", "D", "B");

            print_r($letras);
            var_dump($letras);
            echo "O vetor letras tem " . count($letras) . " Elementos.<br>";

            echo "<h2 class='subtítulos'>Inserindo Elementos no Final:</h2>";

            $letras[] = "F";
            array_push($letras, "G");
            var_dump($letras);

            echo "<h2 class='subtítulos'>Removendo Elementos no Final:</h2>";

            array_pop($letras);
            var_dump($letras);

            echo "<h2 class='subtítulos'>Inserindo Elementos no Início:</h2>";

            array_unshift($letras, "A");
            var_dump($letras);

            echo "<h2 class='subtítulos'>Removendo Elementos no Início:</h2>";

            array_shift($letras);
            var_dump($letras);

            echo "<h2 class='subtítulos'>Ordenando Vetores:</h2>";

            sort($letras);  // Ordem crescente
            var_dump($letras);

            rsort($letras); // Ordem reversa
            var_dump($letras);

            asort($letras); // Ordenção de elementos mantendo os índices originais
            var_dump($letras);

            arsort($letras);    // Ordenação reversa de elementos mantendo os índices originais
            var_dump($letras);

            ksort($letras); // Ordenação dos índices
            var_dump($letras);

            krsort($letras);    // Ordenação reversa do índices
            var_dump($letras);

        ?>
        
    </pre>
    
</body>
</html>