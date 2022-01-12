<?php

class ContaBanco {

    public $numeroConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($tipo) {

        $this -> setTipo($tipo);
        $this -> setStatus(true);

        if ($this -> getTipo() == 'Corrente') {

            $this -> setSaldo(50);

        } else if ($this -> getTipo() == 'Poupança') {

            $this -> setSaldo(150);

        } else {

            echo "<p>Impossível abrir conta. Tipo inválido.</p>";

        }
    }

    public function fecharConta() {

        if ($this -> getStatus()) {

            if ($this -> saldo > 0) {

                echo "<p>Impossível fechar conta. Retire o dinheiro antes.</p>";

            } else if ($this -> saldo < 0) {

                echo "<p>Impossível fechar conta. Pague sua dívida antes.</p>";

            } else {

                $this -> setStatus(false);

            }

        } else {

            echo "<p>A conta já está inativa .</p>";

        }
    }

    public function depositar($valor) {

        if ($this -> getStatus()) {

            $this -> setSaldo($this -> getSaldo() + $valor);

        } else {

            echo "<p>Impossível depositar. Conta inativa.</p>";

        }
    }

    public function sacar($valor) {

        if ($this -> getStatus()) {

            if ($this -> getSaldo() > $valor) {

                $this -> setSaldo($this -> getSaldo() - $valor);

            } else {

                echo "<p>Impossível sacar. Saldo insuficiente.</p>";

            }

        } else {

            echo "<p>Impossível sacar. Conta inativa.</p>";

        }
    }

    public function pagarMensalidade() {

        if ($this -> getTipo() == 'Corrente') {

            $valor = 12;

        } else if ($this -> getTipo() == 'Poupança') {

            $valor = 20;

        }

        if ($this -> getStatus()) {

            $this -> setSaldo($this -> getSaldo() - $valor);

        } else {

            echo "<p>Impossível cobrar mensalidade. Conta inativa.</p>";

        }
    }

    // Método Especiais

    public function __construct() {

        $this -> setSaldo(0);
        $this -> setStatus(false);

        echo "<p>Conta criada com sucesso.</p>";

    }

    public function getNumeroConta() {

        return $this -> numeroConta;

    }

    public function setNumeroConta() {

        return $this -> numeroConta = 1;

    }

    public function getTipo() {

        return $this -> tipo;

    }

    public function setTipo($tipo) {

        return $this -> tipo = $tipo;

    }

    public function getDono() {

        return $this -> dono;

    }

    public function setDono($dono) {

        return $this -> dono = $dono;

    }

    public function getSaldo() {

        return $this -> saldo;

    }

    public function setSaldo($saldo) {

        return $this -> saldo = $saldo;

    }

    public function getStatus() {

        return $this -> status;

    }

    public function setStatus($status) {

        return $this -> status = $status;

    }
}