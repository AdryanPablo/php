<?php

require_once "Lutador.php";

class Luta {

    private $desafiante;
    private $desafiado;
    private $tipo;
    private $aprovada;

    public function marcarLuta($desafiante, $desafiado, $tipo) {

        if ($desafiante -> podeLutar() && $desafiado -> podeLutar()) {

            if ($this -> isMesmaCategoria($desafiante, $desafiado)) {

                if ($this -> areLutadoresDiferentes($desafiante, $desafiado)) {

                    $this -> setAprovada(true);
                    $this -> setDesafiante($desafiante);
                    $this -> setDesafiado($desafiado);
                    $this -> setTipo($tipo);

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

    public function lutar() {

        if ($this -> isAprovada()) {

            echo "<section class='luta'>";

                if ($this -> getTipo() === 'Aleatória') {

                    $this -> apresentarLutadores();

                    echo "<p>Que comece a luta aleatória!</p>";

                    $this -> desafiante -> setPlacar(random_int(0, 2));
                    $this -> desafiado -> setPlacar(random_int(0, 2));

                    $this -> quemVenceu();

                } else if ($this -> getTipo() === 'Mérito') {

                    $this -> apresentarLutadores();

                    echo "<p>Que comece a luta por mérito!</p>";

                    $this -> desafiante -> setPlacar(0);
                    $this -> desafiado -> setPlacar(0);

                    $this -> compararForca($this -> desafiante -> getForca(), $this -> desafiado -> getForca());
                    $this -> compararInvencibilidade($this -> desafiante -> getInvencibilidade(), $this -> desafiado -> getInvencibilidade());

                    $this -> quemVenceu();

                } else {

                    echo "</section>";
                    echo "<p>Tipo de luta inválido!</p>";

                }

            echo "</section>";

        } else {

            echo "<p>A luta não pode acontecer!</p>";

        }
    }

    public function apresentarLutadores() {

        echo "<h2>{$this -> getDesafiante() -> getNome()} vs {$this -> getDesafiado() -> getNome()}</h2>";
        
        echo "<section class='apresentacao'>";

            echo "<article class='apresentacaoDesafiante'>";

                echo "<p>Deste lado, o desafiante: </p>";

                $this -> desafiante -> apresentar();

            echo "</article>";

            echo "<article class='apresentacaoDesafiado'>";

                echo "<p>Do outro lado, o desafiado: </p>";
                
                $this -> desafiado -> apresentar();

            echo "</article>";

        echo "</section>";

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

    public function compararForca($forcaDesafiante, $forcaDesafiado) {

        if ($forcaDesafiante > $forcaDesafiado) {
                    
            $this -> desafiante -> setPlacar($this -> desafiante -> getPlacar() + 1);

        } else if ($forcaDesafiante < $forcaDesafiado) {

            $this -> desafiado -> setPlacar($this -> desafiado -> getPlacar() + 1);

        } else {

            $this -> desafiante -> setPlacar($this -> desafiante -> getPlacar() + 1);
            $this -> desafiado -> setPlacar($this -> desafiado -> getPlacar() + 1);

        }
    }

    public function compararInvencibilidade($invencibilidadeDesafiante, $invencibilidadeDesafiado) {

        if ($invencibilidadeDesafiante > $invencibilidadeDesafiado) {

            $this -> desafiante -> setPlacar($this -> desafiante -> getPlacar() + 1);

        } else if ($this -> desafiante -> getInvencibilidade() < $this -> desafiado -> getInvencibilidade()) {

            $this -> desafiado -> setPlacar($this -> desafiado -> getPlacar() + 1);
            
        } else {

            $this -> desafiante -> setPlacar($this -> desafiante -> getPlacar() + 1);
            $this -> desafiado -> setPlacar($this -> desafiado -> getPlacar() + 1);

        }
    }

    public function quemVenceu() {

        if ($this -> desafiante -> getPlacar() > $this -> desafiado -> getPlacar()) { // Vitória do desafiante

            $this -> getDesafiante() -> ganharLuta();
            $this -> getDesafiado() -> perderLuta();

            echo "<p>Vitória de {$this -> getDesafiante() -> getNome()}!</p>";

        } else if($this -> desafiante -> getPlacar() < $this -> desafiado -> getPlacar()) { // Vitória do desafiado.

            $this -> getDesafiante() -> perderLuta();
            $this -> getDesafiado() -> ganharLuta();

            echo "<p>Vitória de {$this -> getDesafiado() -> getNome()}!</p>";

        } else {

            $this -> getDesafiante() -> empatarLuta();
            $this -> getDesafiado() -> empatarLuta();

            echo "<p>Empate!</p>";

        }

        $this -> desafiante -> mostrarStatus();
        $this -> desafiado -> mostrarStatus();

    }

    // Métodos Especiais

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

    public function isAprovada() {

        return $this -> aprovada;

    }

    public function setAprovada($aprovada) {
        
        $this -> aprovada = $aprovada;

    }
}