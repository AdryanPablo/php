<?php

class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function escrever () {

        if ($this -> tampada) {

            echo "<p>Não é possível escrever com a caneta tampada.</p>";

        } else if ($this -> carga == 0) {

            echo "<p>Não é possível escrever com a caneta sem tinta.</p>";

        } else {
            
            echo "<p>Estou escrevendo...</p>";

        }
    }

    public function tampar () {

        $this -> tampada = true;

    }

    public function destampar () {

        $this -> tampada = false;

    }
}