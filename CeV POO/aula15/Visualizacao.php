<?php

require_once "./Gafanhoto.php";
require_once "./Video.php";

class Visualizacao {
    
    private $espectador;
    private $video;

    public function __construct($espectador, $video) {

        $this -> setEspectador($espectador);
        $this -> setVideo($video);
        $this -> espectador -> assistirVideo();
        $this -> video -> aumentarVisualizacoes();
        
    }

    public function getEspectador() {

        return $this -> espectador;

    }

    public function setEspectador($espectador) {

        $this -> espectador = $espectador;

    }

    public function getVideo() {

        return $this -> video;

    }

    public function setVideo($video) {

        $this -> video = $video;

    }
}