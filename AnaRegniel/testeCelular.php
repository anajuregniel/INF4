<?php
// Chama o arquivo Classe Celular
require "ClasseCelular.php";


// Define 
$celular = new Celular();


// Define marca, modelo e bateria
$celular->marca = "iPhone";
$celular->modelo = "iPhone 14";
$celular->bateria = 10;

// Testa se o aparelho irá ligar
$celular->ligar();

// Verifica a bateria do aparelho
$celular->verificarBateria();