<?php

require_once "./Animal.php";

class Peixe extends Animal {

    protected $corEscama;

    public function soltarBolha() {

        echo "<p>Soltando bolha...</p>";
        
    }

    public function locomover() {

        echo "<p>Nadando...</p>";

    }

    public function alimentar() {

        echo "<p>Comendo...</p>";

    }

    public function emitirSom() {

        echo "<p>Peixe não emite som.</p>";

    }

    public function getCorEscama() {

        return $this -> corEscama;

    }

    public function setCorEscama($cor) {

        $this -> corEscama = $cor;

    }
}