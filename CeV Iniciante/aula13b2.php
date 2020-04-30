<head>

    <title>Tabuada</title>
    <link rel="stylesheet" href="estilos/estilo.css">

</head>

<?php

    $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;

    echo "<fieldset style='border: 2px solid #000; border-radius: 15px; padding: 10px;'><legend>Tabuada do $numero</legend>";

    for ($contador = 1; $contador <= 10; $contador ++) {

        echo "<br>$numero x $contador = " . ($numero * $contador);

    }

    echo "</fieldset><br>";
    echo "<a href='aula13b1.php' class='botão'>Voltar</a>";

?>