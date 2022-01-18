<?php

require_once "./Mamifero.php";

class Cachorro extends Mamifero {

    private $raca;

    public function enterrarOsso() {

        echo "<p>Enterrando osso...</p>";

    }

    public function abanarRabo() {

        echo "<p>Abanando rabo...</p>";

    }

    public function emitirSom() {

        echo "<p>Latindo...</p>";
        
    }

    public function getRaca() {

        return $this -> raca;

    }

    public function setRaca($raca) {

        $this -> raca = $raca;

    }
}