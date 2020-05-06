<?php

class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function escrever () {

        if ($this -> tampada) {

            echo "<p>Não dá pra escrever com a caneta tampada!</p>";

        } else {
            
            echo "<p>Estou escrevendo... </p>";

        }

    }

    public function tampar () {

        $this -> tampada = true;

    }

    public function destampar () {

        $this -> tampada = false;

    }

}