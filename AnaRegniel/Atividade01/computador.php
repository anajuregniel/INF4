<?php
    class Computador {
        private $atributos = array("marca","cor","modelo","preco");

        // Método Construtor
        public function __construct($marca, $cor, $modelo, $preco) {
            $this->atributos["marca"] = $marca;
            $this->atributos["cor"] = $cor;
            $this->atributos["modelo"] = $modelo;
            $this->atributos["preco"] = $preco;
        }
        
        // Métodos mágicos 
        public function __get($atributos) {
            return $this->atributos[$atributos];
        }

        public function __set($atributos, $valor) {
            if($atributos == "preco") {
                $this->setPreco($valor);
            }
            else
                $this->atributos[$atributos] = $valor;
        }


        public function setPreco($preco) {
            if ($preco >= 0) {
                $this->atributos["preco"] = $preco;
            } else {
                echo "<p>Erro: O valor não poderá ser negativo";
            }
        }   

        // Método imprimir
        public function imprimir() {
            echo "<p>Marca: " . $this->atributos["marca"];
            echo "<p>Cor: " . $this->atributos["cor"];
            echo "<p>Modelo: " . $this->atributos["modelo"];
            echo "<p>Preço: " . $this->atributos["preco"];
        }

        // Desconto
        public function darDesconto() {
            $this->atributos["preco"] *= 0.9;  
        }
    }