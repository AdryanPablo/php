<?php

require_once "./AcoesVideo.php";

class Video implements AcoesVideo {

    private $titulo;
    private $visualizacoes;
    private $curtidas;
    private $reproduzindo;

    public function reproduzir() {

        $this -> setReproduzindo(true);

    }

    public function pausar() {

        $this -> setReproduzindo(false);

    }

    public function curtir() {

        $this -> setCurtidas($this -> getCurtidas() + 1);

    }

    public function aumentarVisualizacoes() {

        $this -> setVisualizacoes($this -> getVisualizacoes() + 1);

    }

    public function __construct($titulo) {

        $this -> setTitulo($titulo);
        $this -> setAvaliacao(1);
        $this -> setVisualizacoes(0);
        $this -> setCurtidas(0);
        $this -> setReproduzindo(false);
        
    }

    public function getTitulo() {

        return $this -> titulo;
        
    }

    public function setTitulo($titulo) {

        $this -> titulo = $titulo;

    }

    public function getVisualizacoes() {

        return $this -> visualizacoes;

    }

    public function setVisualizacoes($visualizacoes) {

        $this -> visualizacoes = $visualizacoes;

    }

    public function getCurtidas() {

        return $this -> curtidas;

    }

    public function setCurtidas($curtidas) {

        $this -> curtidas = $curtidas;

    }

    public function isReproduzindo() {

        return $this -> reproduzindo;

    }

    public function setReproduzindo($reproduzindo) {

        $this -> reproduzindo = $reproduzindo;

    }
}