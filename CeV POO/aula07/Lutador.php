<?php

class Lutador {

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function apresentar() {

        echo "<p>===== {$this -> getNome()} =====</p>";
        echo "<p>Nacionalidade: {$this -> getNacionalidade()}</p>";
        echo "<p>Idade: {$this -> getIdade()} anos</p>";
        echo "<p>Altura: {$this -> getAltura()} m</p>";
        echo "<p>Peso: {$this -> getPeso()} kg</p>";
        echo "<p>Categoria: {$this -> getCategoria()}</p>";
        echo "<p>====================</p>";

    }

    public function status() {

        echo "<p>===== {$this -> getNome()} =====<p>";
        echo "<p>Peso: {$this -> getPeso()}</p>";
        echo "<p>Categoria: {$this -> getCategoria()}</p>";
        echo "<p>Vitórias: {$this -> getVitorias()}</p>";
        echo "<p>Derrotas: {$this -> getDerrotas()}</p>";
        echo "<p>Empates: {$this -> getEmpates()}</p>";
        echo "<p>====================</p>";

    }

    public function ganharLuta() {

        $this -> setVitorias($this -> getVitorias() + 1);

    }

    public function perderLuta() {

        $this -> setDerrotas($this -> getDerrotas() + 1);

    }

    public function empatarLuta() {

        $this -> setEmpates($this -> getEmpates() + 1);

    }

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {

        $this -> setNome($nome);
        $this -> setNacionalidade($nacionalidade);
        $this -> setIdade($idade);
        $this -> setAltura($altura);
        $this -> setPeso($peso);
        $this -> setVitorias($vitorias);
        $this -> setDerrotas($derrotas);
        $this -> setEmpates($empates);
        
    }

    public function getNome() {

        return $this -> nome;

    }

    public function setNome($nome) {

        $this -> nome = $nome;

    }

    public function getNacionalidade() {

        return $this -> nacionalidade;

    }

    public function setNacionalidade($nacionalidade) {

        $this -> nacionalidade = $nacionalidade;

    }

    public function getIdade() {

        return $this -> idade;

    }

    public function setIdade($idade) {

        $this -> idade = $idade;

    }

    public function getAltura() {

        return $this -> altura;

    }

    public function setAltura($altura) {

        $this -> altura = $altura;

    }

    public function getPeso() {

        return $this -> peso;

    }

    public function setPeso($peso) {

        $this -> peso = $peso;
        $this -> setCategoria();

    }

    public function getCategoria() {

        return $this -> categoria;

    }

    private function setCategoria() {

        if ($this -> getPeso() < 52.5) {

            $this -> categoria = 'Inválido';

        } else if ($this -> getPeso() <= 70.3) {

            $this -> categoria = 'Leve';

        } else if ($this -> getPeso() <= 83.9) {

            $this -> categoria = 'Médio';

        } else if ($this -> getPeso() <= 120.2) {

            $this -> categoria = 'Pesado';

        } else {

            $this -> categoria = 'Inválido';

        }
    }

    public function getVitorias() {

        return $this -> vitorias;

    }

    public function setVitorias($vitorias) {

        $this -> vitorias = $vitorias;

    }

    public function getDerrotas() {

        return $this -> derrotas;

    }

    public function setDerrotas($derrotas) {

        $this -> derrotas = $derrotas;

    }

    public function getEmpates() {

        return $this -> empates;

    }

    public function setEmpates($empates) {

        $this -> empates = $empates;

    }
}