<?php

abstract class Animal {

    protected $peso;
    protected $idade;
    protected $quantidadeMembros;

    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();

    public function getPeso() {

        return $this -> peso;

    }

    public function setPeso($peso) {

        $this -> peso = $peso;

    }

    public function getIdade() {

        return $this -> idade;

    }

    public function setIdade($idade) {

        $this -> idade = $idade;

    }

    public function getQuantidadeMembros() {

        return $this -> quantidadeMembros;

    }

    public function setQuantidadeMembros($quantidade) {

        $this -> quantidadeMembros = $quantidade;

    }
}