<?php

abstract class Pessoa {

    protected $nome;
    protected $experiencia;

    protected function ganharExperiencia($experiencia) {

        $this -> setExperiencia($this -> getExperiencia() + $experiencia);

    }

    public function __construct($nome) {

        $this -> setNome($nome);
        $this -> setExperiencia(0);
        
    }

    public function getNome() {

        return $this -> nome;

    }

    public function setNome($nome) {

        $this -> nome = $nome;

    }

    public function getExperiencia() {

        return $this -> experiencia;

    }

    public function setExperiencia($experiencia) {

        $this -> experiencia = $experiencia;

    }
}