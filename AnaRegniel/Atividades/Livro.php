<?php
    class Livro {
        private $titulo;
        private $autor;
        private $edicao;
        private $ano;

        // Método construtor
        public function __construct($titulo, $autor, $edicao, $ano) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->edicao = $edicao;
            $this->ano= $ano;
        }

        // Métodos getters e setters
        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo() {
            $this->$titulo = titulo;
        }
           
        public function getAutor() {
            return $this->autor;
        }
    
        public function setAutor() {
            $this->autor = $autor;
        }

        public function getEdicao() {
            return $this->$edicao;
        }

        public function setEdicao() {
            $this->edicao = $edicao;
        }

        public function getAno() {
            return $this->$ano;
        }

        public function setAno() {
            $this->ano = $ano;
        }

        // Método imprimir
        public function imprimir() {
            echo "<p>Título: " . $this->titulo;
            echo "<p>Autor: " . $this->autor;
            echo "<p>Edição: " . $this->edicao;
            echo "<p>Ano: " . $this->ano;
        }
        
    }
