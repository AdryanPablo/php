<?php

require_once "./Aluno.php";

class Bolsista extends Aluno {

    private $bolsa;

    public function renovarBolsa() {

        echo "<p>Bolsa renovada!</p>";

    }

    public function pagarMensalidade() {

        echo "<p>Mensalidade, com desconto, paga!</p>";
        
    }

    public function getBolsa() {

        return $this -> bolsa;

    }

    public function setBolsa($bolsa) {

        $this -> bolsa = $bolsa;

    }
}