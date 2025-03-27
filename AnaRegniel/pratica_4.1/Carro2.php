<?php
    class Carro {
        private $atributos = array("marca", "modelo", "ano");

        public function __construct($marca, $modelo, $ano) {
            $this->atributos["marca"] = $marca;
            $this->atributos["modelo"] = $modelo;
            $this->atributos["ano"] = $ano;
        }

        public function __get($nome) {
            return $this->atributos[$nome];
        }

        public function __set($nome, $valor) {
            $this->atributos[$nome] = $valor;
        }

        public function imprimir() {
            echo "<p>Marca: " . $this->atributos["marca"];
            echo "<p>Modelo: " . $this->atributos["modelo"];
            echo "<p>Ano: " . $this->atributos["ano"];
        }
    }