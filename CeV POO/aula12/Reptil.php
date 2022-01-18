<?php

require_once "./Animal.php";

class Reptil extends Animal{

    protected $corEscama;

    public function locomover() {

        echo "<p>Andando...</p>";

    }

    public function alimentar() {

        echo "<p>Comendo...</p>";

    }

    public function emitirSom() {

        echo "<p>Emitindo som de réptil...</p>";

    }

    public function getCorEscama() {

        return $this -> corEscama;

    }

    public function setCorEscama($cor) {

        $this -> corEscama = $cor;

    }
}