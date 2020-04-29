<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 06a</title>

</head>
<body>

    <?php

        $preço = $_GET['preco'];
        $aumento = $preço;
        $desconto = $preço;
        
        $aumento += $aumento * 10/100;
        $desconto -= $desconto * 10/100;

        echo "O preço do produto é R$" . number_format($preço, 2) . ".<br>";
        echo "O novo preço do produto com 10% de aumento é R$" . number_format($aumento, 2) . ".<br>";
        echo "O novo preço do produto com 10% de desconto é R$" . number_format($desconto, 2) . ".<br>";

    ?>
    
</body>
</html>