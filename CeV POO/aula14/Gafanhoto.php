<?php

require_once "./Pessoa.php";

class Gafanhoto extends Pessoa {
    
    private $login;
    private $videosAssistidos;

    public function assistirVideo() {

        $this -> setVideosAssistidos($this -> getVideosAssistidos() + 1);

    }

    public function __construct($nome, $login) {

        parent::__construct($nome);
        $this -> setLogin($login);
        
    }

    public function getLogin() {

        return $this -> login;

    }

    public function setLogin($login) {

        $this -> login = $login;

    }

    public function getVideosAssistidos() {

        return $this -> videosAssistidos;

    }

    public function setVideosAssistidos($videosAssistidos) {

        $this -> videosAssistidos = $videosAssistidos;

    }
}