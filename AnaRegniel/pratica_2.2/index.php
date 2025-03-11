<?php
require "data.php";

// Instanciar um objeto de Data
$minhaData = new Data();

// Definir os atributos da data
$minhaData->setDia(40);
$minhaData->setMes(13);
$minhaData->setAno(2025);

// Mostrar a data
$minhaData->imprimir();