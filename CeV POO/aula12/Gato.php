<?php

require_once "./Mamifero.php";

class Gato extends Mamifero {

    private $raca;

    public function emitirSom() {

        echo "<p>Miando...</p>";
        
    }

    public function getRaca() {

        return $this -> raca;

    }

    public function setRaca($raca) {

        $this -> raca = $raca;

    }
}