<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 10 c</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<body>

    <form method="get">

        <label for="estado">Estado: </label>
        <select name="estado" class="caixa" id="estado">

            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia">Bahia</option>            
            <option value="Ceará">Ceará</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Espírito Santo">Espírito Santo</option>
            <option value="Goiás">Goiás</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Pará">Pará</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Paraná">Paraná</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Sergipe">Sergipe</option>
            <option value="Tocantins">Tocantins</option>

        </select>
        <input type="submit" value="Analisar" class="botão">

    </form>

    <?php

        $estado = $_GET["estado"];
        echo "Estado: $estado";

        switch ($estado) {

            case "Acre":
            case "Amapá":
            case "Amazonas":
            case "Pará":
            case "Rondônia":
            case "Roraima":
            case "Tocantins":

                $regiao = "Norte";
                break;

            case "Alagoas":
            case "Bahia":
            case "Ceará":
            case "Maranhão":
            case "Paraíba":
            case "Pernambuco":
            case "Piauí":
            case "Rio Grande do Norte":
            case "Sergipe":

                $regiao = "Nordeste";
                break;

            case "Distrito Federal":
            case "Goiás":
            case "Mato Grosso":
            case "Mato Grosso do Sul":

                $regiao = "Centro Oeste";
                break;

            case "Espírito Santo":
            case "Minas Gerais":
            case "Rio de Janeiro":
            case "São Paulo":

                $regiao = "Sudeste";
                break;

            case "Paraná":
            case "Rio Grande do Sul":
            case "Santa Catarina":

                $regiao = "Sul";

        }

        echo "<br>Região: $regiao.";

    ?>
    
</body>
</html>