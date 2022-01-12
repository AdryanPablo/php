<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP POO - Aula 05</title>

    <link rel="stylesheet" href="../estilos/estilo.css">
</head>
<body>

    <pre>

        <h1>Banco</h1>

        <?php

            require_once "ContaBanco.php";

            $usuario1 = new ContaBanco();
            $usuario1 -> abrirConta('Corrente');
            $usuario1 -> setNumeroConta(1);
            $usuario1 -> setDono('Jubileu');

            $usuario2 = new ContaBanco();
            $usuario2 -> abrirConta('Poupança');
            $usuario2 -> setNumeroConta(2);
            $usuario2 -> setDono('Creuza');

            echo "<h2>Extrato inicial:</h2>";

            print_r($usuario1);
            print_r($usuario2);

            $usuario1 -> depositar(300);
            $usuario2 -> depositar(500);

            echo "<h2>Extrato dos depósitos:</h2>";

            print_r($usuario1);
            print_r($usuario2);

            $usuario2 -> sacar(100);

            echo "<h2>Extrato do saque:</h2>";

            print_r($usuario1);
            print_r($usuario2);

            $usuario1 -> pagarMensalidade();
            $usuario2 -> pagarMensalidade();

            echo "<h2>Extrato do pagamento da mensalidade:</h2>";

            print_r($usuario1);
            print_r($usuario2);

        ?>

    </pre>
    
</body>
</html>