<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 14 b</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <?php

        function soma () {

            $numeros = func_get_args();
            $quantidade = func_num_args();
            $soma = 0;

            for ($contador = 0; $contador < $quantidade; $contador ++) {

                $soma += $numeros[$contador];

            }

            echo "A soma de todos os $quantidade valores é $soma.";
            
        }
    
        soma(1, 2, 3, 4, 5, 6);

    ?>
    
</body>
</html>