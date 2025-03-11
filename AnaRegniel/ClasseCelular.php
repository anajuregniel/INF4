<?php
    class Celular {
       //Atributos
       public $marca;
       public $modelo;
       public $bateria;


        // Método para ligar o celular
        public function ligar() {
            if ($this->bateria > 0) {
                echo "O celular irá ligar. ";
            } else {
                echo "Não foi possível ligar o Celular. ";
            }
        }

        // Verificar bateria do celular
        public function verificarBateria() {
            echo "O nivel de bateria é: " . $this->bateria . "%";
        }

    }