<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 18</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <pre>
    <?php

        $numeros[0] = 0;
        $numeros[1] = 1;
        $numeros[2] = 2;

        $letras = array("a", "b", "c");
        $letras[] = "d";

        print_r($numeros);
        print_r($letras);

        $intervalo = range(0, 50, 10);

        echo "<table border='1'><tr>";

        foreach ($intervalo as $valor) {

            echo "<td>$valor</td>";

        }

        echo "</tr></table>";

        $vogais = array(0 => "A", 5 => "E", 9 => "I", 15 => "O");
        print_r($vogais);

        $vogais[21] = "U";
        print_r($vogais);

        unset($vogais[21]);
        print_r($vogais);

        $pessoa = array(
            "nome" => "Ádryan",
            "idade" => 17,
            "peso" => 54.8
        );

        print_r($pessoa);
        
        
        foreach ($pessoa as $campo => $conteudo) {

            echo "O campo <strong>$campo</strong> possui o conteúdo: $conteudo.<br>";

        }

        // Tabela de usuários:

        $tabela = array(
            "Títulos" => array("Nome", "Idade"),
            "Pessoa1" => array("Fulano", 44),
            "Pessoa2" => array("Beltrano", 51)
        );

        echo "<table border='1'>";

        foreach ($tabela as $linha => $coluna) {

            echo "<tr>";

            foreach ($coluna as $conteudo) {

                echo "<td>$conteudo</td>";

            }

            echo "</tr>";
            
        }

        echo "</table>";

    ?>
    </pre>
    
</body>
</html>