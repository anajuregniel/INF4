<?php
require "Carro2.php";
$meuCarro = new Carro("Ford", "Ka", "2012");
$meuCarro->imprimir();
$meuCarro->ano = 2017;
$meuCarro->imprimir();