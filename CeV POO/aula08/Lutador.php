<?php

class Lutador {

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $imc;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    private $forca;
    private $invencibilidade;
    private $placar;

    public function apresentar() {

        echo "<div class='cartaApresentacao'>";

            echo "<h3>{$this -> getNome()}</h3>";
            echo "<p>Nacionalidade: {$this -> getNacionalidade()}</p>";
            echo "<p>Idade: {$this -> getIdade()} anos</p>";
            echo "<p>Altura: {$this -> getAltura()} m</p>";
            echo "<p>Peso: {$this -> getPeso()} kg</p>";
            echo "<p>IMC: " . number_format($this -> getIMC(), 2) . "</p>";
            echo "<p>Categoria: {$this -> getCategoria()}</p>";
            echo "<p>Vitórias: {$this -> getVitorias()}</p>";
            echo "<p>Derrotas: {$this -> getDerrotas()}</p>";
            echo "<p>Empates: {$this -> getEmpates()}</p>";
            echo "<p>Força: " . number_format($this -> getForca(), 2) . "</p>";
            echo "<p>Invencibilidade: {$this -> getInvencibilidade()}</p>";

        echo "</div>";

    }

    public function mostrarStatus() {

        echo "<div class='cartaStatus'>";

            echo "<h3>{$this -> getNome()}</h3>";
            echo "<p>Peso: {$this -> getPeso()}</p>";
            echo "<p>Categoria: {$this -> getCategoria()}</p>";
            echo "<p>Vitórias: {$this -> getVitorias()}</p>";
            echo "<p>Derrotas: {$this -> getDerrotas()}</p>";
            echo "<p>Empates: {$this -> getEmpates()}</p>";
            echo "<p>Placar: {$this -> getPlacar()}";

        echo "</div>";

    }

    public function podeLutar() {

        if ($this -> getCategoria() !== 'Inválido') {

            return true;

        } else {

            return false;

        }
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
        $this -> setCategoria();
        $this -> setIMC();
        $this -> setVitorias($vitorias);
        $this -> setDerrotas($derrotas);
        $this -> setEmpates($empates);
        $this -> setForca();
        $this -> setInvencibilidade();
        $this -> setPlacar(0);
        
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

    }

    public function getIMC() {

        return $this -> imc;

    }

    public function setIMC() {

        $this -> imc = ($this -> getPeso() / ($this -> getAltura()) ** 2);

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

    public function getForca() {

        return $this -> forca;

    }

    public function setForca() {

        $this -> forca = $this -> getIdade() * $this -> getIMC();

    }

    public function getInvencibilidade() {

        return $this -> invencibilidade;

    }

    public function setInvencibilidade() {

        $this -> invencibilidade = $this -> getVitorias() * 3 + $this -> getDerrotas() * -1 + $this -> getEmpates() * 1;

    }

    public function getPlacar() {

        return $this -> placar;

    }

    public function setPlacar($placar) {

        $this -> placar = $placar;

    }
}