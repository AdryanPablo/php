<?php

require_once "Lutador.php";

class Luta {

    private $desafiante;
    private $desafiado;
    private $tipo;
    private $rounds;
    private $aprovada;

    public function marcarLuta($desafiante, $desafiado, $tipo, $rounds) {

        if ($desafiante -> podeLutar() && $desafiado -> podeLutar()) {

            if ($this -> isMesmaCategoria($desafiante, $desafiado)) {

                if ($this -> areLutadoresDiferentes($desafiante, $desafiado)) {

                    $this -> setAprovada(true);
                    $this -> setDesafiante($desafiante);
                    $this -> setDesafiado($desafiado);
                    $this -> setTipo($tipo);
                    $this -> setRounds($rounds);

                    echo "<p>Luta entre {$this -> getDesafiante() -> getNome()} e {$this -> getDesafiado() -> getNome()} aprovada!</p>";

                } else {

                    $this -> setAprovada(false);

                    echo "<p>Impossível marcar luta com o mesmo lutador!</p>";

                }

            } else {

                echo "<p>Impossível marcar luta com lutadores de categorias diferentes.</p>";

            }

        } else {

            echo "<p>Impossível marcar luta com lutadores que não estão em condições de lutar.</p>";

        }
    }

    public function lutarAleatoriamente() {

        if ($this -> isAprovada()) {

            echo "<h2>===== {$this -> getDesafiante() -> getNome()} vs {$this -> getDesafiado() -> getNome()} =====</h2>";
            echo "<p>Chegou a grande hora!</p>";

            echo "<p>Deste lado, o desafiante:</p>";
            $this -> desafiante -> apresentar();

            echo "<p>Do outro lado, o desafiado: </p>";
            $this -> desafiado -> apresentar();

            echo "<p>Que comece a luta!</p>";

            $vencedor = random_int(0, 2);

            switch ($vencedor) {

                case (0): // Empate

                    $this -> getDesafiante() -> empatarLuta();
                    $this -> getDesafiado() -> empatarLuta();

                    echo "<p>Empate!</p>";
                    break;

                case (1): // Vitória do desafiante

                    $this -> getDesafiante() -> ganharLuta();
                    $this -> getDesafiado() -> perderLuta();

                    echo "<p>Vitória de {$this -> getDesafiante() -> getNome()}!</p>";
                    break;

                case (2): // Vitória do desafiado

                    $this -> getDesafiante() -> perderLuta();
                    $this -> getDesafiado() -> ganharLuta();

                    echo "<p>Vitória de {$this -> getDesafiado() -> getNome()}!</p>";
                    break;
            }

        } else {

            echo "<p>A luta não pode acontecer!</p>";

        }
    }

    public function isMesmaCategoria($desafiante, $desafiado) {

        if ($desafiante -> getCategoria() === $desafiado -> getCategoria()) {

            return true;

        } else {

            return false;

        }
    }

    public function areLutadoresDiferentes($desafiante, $desafiado) {

        if ($desafiante === $desafiado) {

            return false;

        } else {
            
            return true;

        }
    }

    public function getDesafiante() {

        return $this -> desafiante;

    }

    public function setDesafiante($desafiante) {

        $this -> desafiante = $desafiante;

    }

    public function getDesafiado() {

        return $this -> desafiado;

    }

    public function setDesafiado($desafiado) {

        $this -> desafiado = $desafiado;

    }

    public function getTipo() {

        return $this -> tipo;

    }

    public function setTipo($tipo) {

        $this -> tipo = $tipo;

    }

    public function getRounds() {

        return $this -> rounds;

    }

    public function setRounds($rounds) {

        $this -> rounds = $rounds;

    }

    public function isAprovada() {

        return $this -> aprovada;

    }

    public function setAprovada($aprovada) {
        
        $this -> aprovada = $aprovada;

    }
}