<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Aula 11</title>
</head>
<body>

    <pre>

        <?php

            require_once "./Visitante.php";
            require_once "./Professor.php";
            require_once "./Aluno.php";
            require_once "./Bolsista.php";
            require_once "./Tecnico.php";

            $visitante = new Visitante('Alberto', 45, 'M');
            $professor = new Professor('Gerson', 44, 'M');
            $aluno = new Aluno('Caique', 18, 'M');
            $bolsista = new Bolsista('Fátima', 23, 'F');
            $tecnico = new Tecnico('Laura', 22, 'F');

            $professor -> setSalario(2500);
            $professor -> receberAumento(200);
            $aluno -> pagarMensalidade();
            $bolsista -> renovarBolsa();
            $bolsista -> pagarMensalidade();
            $tecnico -> praticar();

            print_r($visitante);
            print_r($professor);
            print_r($aluno);
            print_r($bolsista);
            print_r($tecnico);

        ?>

    </pre>
    
</body>
</html>