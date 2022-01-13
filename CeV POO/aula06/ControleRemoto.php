<?php

require_once "Controlador.php";

class ControleRemoto implements Controlador {

    private $volume;
    private $volumeAuxiliar;
    private $ligado;
    private $reproduzindo;

    public function __construct() {

        $this -> setVolume(50);
        $this -> setLigado(false);
        $this -> setReproduzindo(false);
                
    }

    public function ligar() {

        $this -> setLigado(true);
        
        echo "<p>Ligando...</p>";

    }

    public function desligar() {

        $this -> setLigado(false);

        echo "<p>Desligando...</p>";

    }

    public function abrirMenu() {

        if ($this -> isLigado()) {

            echo "<p>====================</p>";
            echo "<p>Aparelho ligado</p>";

            if ($this -> isReproduzindo()) {

                echo "Reproduzindo conteúdo";

            } else {

                echo "Conteúdo pausado";
            }

            echo "<p>Volume: {$this -> getVolume()}.</p>";
            echo "<p>====================</p>";

        } else {

            echo "Impossível abrir menu. Aparelho desligado.";

        }
    }

    public function fecharMenu() {

        if ($this -> isLigado()) {

            echo "<p>Fechando menu...</p>";

        } else {

            echo "<p>Impossível fechar menu. Aparelho desligado.</p>";

        }
    }

    public function aumentarVolume() {

        if ($this -> isLigado()) {

            $this -> setVolume($this -> getVolume() + 5);
            
            echo "Volume: {$this -> getVolume()}";

        } else {

            echo "<p>Impossível aumentar volume. Aparelho desligado.</p>";

        }
    }

    public function diminuirVolume() {

        if ($this -> isLigado()) {

            $this -> setVolume($this -> getVolume() - 5);

            echo "<p>Volume: {$this -> getVolume()}</p>";

        } else {

            echo "<p>Impossível diminuir volume. Aparelho desligado.</p>";

        }
    }

    public function mutar() {

        if ($this -> isLigado()){

            $this -> setVolumeAuxiliar();
            $this -> setVolume(0);

            echo "<p>Mudo!</p>";

        } else {

            echo "<p>Impossível mutar. Aparelho desligado.</p>";

        }
    }

    public function desmutar() {

        if ($this -> isLigado()) {

            $this -> setVolume($this -> getVolumeAuxiliar());

            echo "<p>Volume: {$this -> getVolume()}</p>";

        } else {

            echo "<p>Impossível desmutar. Aparelho desligado.</p>";

        }
    }

    public function reproduzir() {

        if ($this -> isLigado()) {

            $this -> setReproduzindo(true);

            echo "<p>Reproduzindo...</p>";

        } else {

            echo "<p>Impossível reproduzir. Aparelho desligado.</p>";

        }
    }

    public function pausar() {

        if ($this -> isLigado()) {

            $this -> setReproduzindo(false);

            echo "<p>Pausado!</p>";

        } else {

            echo "<p>Impossível pausar. Aparelho desligado.</p>";

        }
    }

    // Métodos Especiais

    private function getVolume() {

        return $this -> volume;

    }

    private function setVolume($volume) {

        $this -> volume = $volume;

    }

    private function getVolumeAuxiliar() {

        return $this -> volumeAuxiliar;

    }

    private function setVolumeAuxiliar() {

        $this -> volumeAuxiliar = $this -> getVolume();

    }

    private function isLigado() {

        return $this -> ligado;

    }

    private function setLigado($ligado) {

        $this -> ligado = $ligado;

    }

    private function isReproduzindo() {

        return $this -> reproduzindo;

    }

    private function setReproduzindo($reproduzindo) {

        $this -> reproduzindo = $reproduzindo;

    }
}