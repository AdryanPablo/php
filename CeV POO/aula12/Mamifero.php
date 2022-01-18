<?php

require_once "./Animal.php";

class Mamifero extends Animal {

    protected $corPelo;

    public function locomover() {

        echo "<p>Andando...</p>";

    }

    public function alimentar() {

        if ($this -> getIdade() <= 1) {

            echo "<p>Mamando...</p>";

        } else {

            echo "<p>Comendo...</p>";

        }
    }

    public function emitirSom() {

        echo "<p>Emitindo som de mamífero...</p>";

    }

    public function getCorPelo() {

        return $this -> corPelo;

    }

    public function setCorPelo($cor) {

        $this -> corPelo = $cor;

    }
}