<?php

class Caneta {

    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function tampar() {

        $this -> tampada = true;

    }

    public function destampar() {

        $this -> tampada = false;

    }
    
    public function getModelo() {

        return $this -> modelo;

    }

    public function setModelo($modelo) {

        return $this -> modelo = $modelo;

    }

    public function getCor() {

        return $this -> cor;

    }

    public function setCor($cor) {

        return $this -> cor = $cor;

    }

    public function getPonta() {

        return $this -> ponta;

    }

    public function setPonta($ponta) {

        return $this -> ponta = $ponta;

    }

    public function getTampada() {

        if ($this -> tampada) {

            return "tampada";

        } else {

            return "destampada";

        }
    }
}