<?php
    Class HP {
        private $atributos = array("marca", "modelo", "capacidade");

        public function __construct($marca, $modelo, $capacidade) {
            $this->atributos["marca"] = $marca;
            $this->atributos["modelo"] = $modelo;
            $this->atributos["capacidade"] = $capacidade;
        }

        public function __get($marca) {
            return $this->atributos[$marca];
        }

        public function __set($marca, $modelo) {
            $this->atributos[$marca] = $modelo;
        }

        public function imprimir() {
            echo "<p>Marca: " . $this->atributos["marca"];
            echo "<p>Modelo: " . $this->atributos["modelo"];
            echo "<p>Capacidade: " . $this->atributos["capacidade"];
        }
    }