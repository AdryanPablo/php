<?php

class Chave {

    var $porta;
    var $estadoPorta;
    
    function abrirPorta ($local) {

        $estadoPorta = true;

        echo "<p>A porta do(a) $local está aberta.</p>";

    }

    function fecharPorta ($local) {

        $estadoPorta = false;

        echo "<p>A porta do(a) $local está fechada.</p>";

    }
}