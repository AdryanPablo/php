<?php

require_once "./Publicacao.php";
require_once "./Pessoa.php";

class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totalPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;

    public function detalhes() {

        echo "<hr>";
        echo "<p>Título: {$this -> getTitulo()}</p>";
        echo "<p>Autor: {$this -> getAutor()}</p>";
        echo "<p>Total Páginas: {$this -> getTotalPaginas()}</p>";
        echo "<p>Página Atual: {$this -> getPaginaAtual()}</p>";
        echo "<p>Aberto: {$this -> isAberto()}</p>";
        echo "<p>Leitor: {$this -> getLeitor() -> getNome()}</p>";

    }

    public function abrir() {

        if ($this -> isAberto() == false) {

            $this -> setAberto(true);

        } else {

            echo "<p>O livro já está aberto.</p>";

        }
    }

    public function fechar() {

        if ($this -> isAberto()) {

            $this -> setAberto(false);

        } else {

            echo "<p>O livro já está fechado.</p>";

        }
    }

    public function folhear($pagina) {

        if ($this -> isAberto()) {

            if ($pagina > 0 && $pagina <= $this -> getTotalPaginas()) {

                $this -> setPaginaAtual($pagina);

            } else {

                echo "<p>Impossível folhear. Página inválida.</p>";
                
            }

        } else {

            echo "<p>Impossível folhear. O livro está fechado.</p>";

        }
    }

    public function avancarPagina() {

        if ($this -> isAberto()) {

            if ($this -> getPaginaAtual() < $this -> getTotalPaginas()) {
                
                return $this -> setPaginaAtual($this -> getPaginaAtual() + 1);

            } else {

                $this -> fechar();

            }

        } else {

            echo "<p>Impossível avançar página. O livro está fechado.</p>";

        }
    }

    public function voltarPagina() {

        if ($this -> isAberto()) {

            if ($this -> getPaginaAtual() > 1) {
                
                return $this -> setPaginaAtual($this -> getPaginaAtual() - 1);

            } else {

                $this -> fechar();

            }

        } else {

            echo "<p>Impossível voltar página. O livro está fechado.</p>";

        }
    }

    public function __construct($titulo, $autor, $totalPaginas, $leitor) {

        $this -> setTitulo($titulo);
        $this -> setAutor($autor);
        $this -> setTotalPaginas($totalPaginas);
        $this -> setAberto(false);
        $this -> setPaginaAtual(0);
        $this -> setLeitor($leitor);
        
    }

    public function getTitulo() {

        return $this -> titulo;

    }

    public function setTitulo($titulo) {

        $this -> titulo = $titulo;

    }

    public function getAutor() {

        return $this -> autor;

    }

    public function setAutor($autor) {

        $this -> autor = $autor;

    }

    public function getTotalPaginas() {

        return $this -> totalPaginas;

    }

    public function setTotalPaginas($totalPaginas) {

        $this -> totalPaginas = $totalPaginas;

    }

    public function getPaginaAtual() {

        return $this -> paginaAtual;

    }

    public function setPaginaAtual($paginaAtual) {

        $this -> paginaAtual = $paginaAtual;

    }

    public function isAberto() {

        return $this -> aberto;
        
    }

    public function setAberto($aberto)  {

        $this -> aberto = $aberto;

    }

    public function getLeitor() {

        return $this -> leitor;

    }

    public function setLeitor($leitor) {

        $this -> leitor = $leitor;

    }
}