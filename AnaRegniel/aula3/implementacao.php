<?php
    class Funcionario {
        // Atributos
        private $nome;
        private $idade;
        private $cargo;
        private $salario;

        // Métodos
        public function exibirNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function exibirIdade() {
            return $this->idade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function exibirCargo() {
            return $this->cargo;
        }

        public function setCargo($cargo) {
            $this->cargo = $cargo;
        }

        public function exibirSalario() {
            return $this->salario;
        }

        public function setSalario($salario) {
            $this->salario = $salario;
        }

        public function aumentarSalario($perc) {
            $this->salario += $this->salario * $perc/100;
        }

         // Método para exibir as informações
         public function imprimir() {
            echo "<p>Nome: " . $this->nome;
            echo "<p>Idade: " . $this->idade;
            echo "<p>Cargo: " . $this->cargo;
            echo "<p>Salário: " . $this->salario;
        }
    }