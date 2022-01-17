<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Aula 10</title>
</head>
<body>

    <pre>

        <?php
            
            require_once "./Pessoa.php";
            require_once "./Aluno.php";
            require_once "./Professor.php";
            require_once "./Funcionario.php";

            $pessoa = new Pessoa('Pedro', 18, 'M');
            $aluno = new Aluno('Maria', 25, 'F');
            $professor = new Professor('Fernando', 21, 'M');
            $funcionario = new Funcionario('Isabel', 19, 'F');

            $aluno -> setCurso('Informática');
            $professor -> setSalario(2500);
            $professor -> receberAumento(500);
            $funcionario -> setSetor('Estoque');

            print_r($pessoa);
            print_r($aluno);
            print_r($professor);
            print_r($funcionario);

        ?>

    </pre>
    
</body>
</html>