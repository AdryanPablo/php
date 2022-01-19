<?php

require_once "./Lobo.php";

class Cachorro extends Lobo {

    public function reagirFrase($frase) {

        if ($frase == 'Toma comida' || $frase == "Vem cá") {

            $this -> abanarRabo();
            $this -> emitirSom();

        } else {

            $this -> rosnar();
            
        }
    }

    public function reagirHorario($hora) {

        if ($hora < 12 ) {

            $this -> abanarRabo();

        } else if ($hora > 18) {

            echo "<p>Ignorando...</p>";


        } else {

            $this -> abanarRabo();
            $this -> emitirSom();

        }
    }

    public function reagirDono($dono) {

        if ($dono) {

            $this -> abanarRabo();
            
        } else {

            $this -> rosnar();
            $this -> emitirSom();

        }
    }

    public function abanarRabo() {

        echo "<p>Abanando rabo...</p>";

    }

    public function rosnar() {

        echo "<p>Rosnando...</p>";

    }

    public function emitirSom() {

        echo "<p>Latindo...</p>";

    }
}