<?php

require_once "./Animal.php";

class Mamifero extends Animal {

    protected $corPelo;

    public function alimentar() {
        
    }

    public function locomover() {
        
    }

    public function emitirSom() {
        
        echo "<p>Som de mamífero...</p>";

    }

    public function getCorPelo() {

        return $this -> corPelo;

    }

    public function setCorPelo($cor) {

        $this -> corPelo = $cor;
        
    }
}