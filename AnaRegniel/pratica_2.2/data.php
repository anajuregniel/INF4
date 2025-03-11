<?php
    class Data {
        // Atributos
        private $dia;
        private $mes;
        private $ano;

        // Métodos de encapsulamento (getters e setters)
        public function getDia() {
            return $this->dia;
        }

        public function setDia($dia) {
            if($dia >= 1 && $dia <= 31)
                $this->dia = $dia;
            else {
                echo "<p>Valor inválido. Dia definido como 1";
                $this->dia = 1;
            }
        }

        public function getMes() {
            return $this->mes;
        }

        public function setMes($mes) {
            if($mes >= 1 && $mes <= 12)
            $this->mes = $mes;
        else {
            echo "<p>Valor inválido. Mês definido como 1";
            $this->mes = 1;
        }
        }

        public function getAno() {
            return $this->ano;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        // Método para exibir a data
        public function imprimir() {
            echo "<p>" . $this->dia . "/" . $this->mes . "/" . $this->ano;
        }
    }