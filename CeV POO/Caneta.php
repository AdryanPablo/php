<?php

class Caneta {

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function escrever () {

        if ($this -> tampada) {

            echo "<p>Não dá pra escrever com a caneta tampada!</p>";

        } else {
            
            echo "<p>Estou escrevendo... </p>";

        }

    }

    function tampar () {

        $this -> tampada = true;

    }

    function destampar () {

        $this -> tampada = false;

    }

}