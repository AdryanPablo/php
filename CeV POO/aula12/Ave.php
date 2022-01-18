<?php

require_once "./Animal.php";

class Ave extends Animal {

    protected $corPena;

    public function fazerNinho() {

        echo "<p>Fazendo ninho...</p>";

    }

    public function locomover() {

        echo "<p>Voando...</p>";

    }

    public function alimentar() {

        echo "<p>Comendo frutas...</p>";

    }

    public function emitirSom() {

        echo "<p>Emitindo som de ave...</p>";
    }


    public function getCorPena() {

        return $this -> corPena;

    }

    public function setCorPena($cor) {

        $this -> corPena = $cor;

    }
}