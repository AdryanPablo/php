<?php

require_once "./Pessoa.php";

class Funcionario extends Pessoa {

    private $setor;
    private $trabalhando;

    public function mudarTrabalhando() {

        if ($this -> isTrabalhando()) {

            $this -> setTrabalhando(false);

        } else {

            $this -> setTrabalhando(true);

        }
    }

    public function getSetor() {

        return $this -> setor;

    }

    public function setSetor($setor)  {

        $this -> setor = $setor;

    }

    public function isTrabalhando() {

        return $this -> trabalhando;

    }

    public function setTrabalhando($trabalhando) {

        $this -> trabalhando = $trabalhando;

    }
}