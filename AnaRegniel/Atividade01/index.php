<?php
    require 'computador.php';

    // Instanciando os objetos
    $meuComputador = new Computador("HP", "Preto", "256G9", 2280);

    $meuComputador->Imprimir();

    // Modificando os objetos
    $meuComputador-> marca= "Dell";
    $meuComputador-> cor = "Cinza";
    $meuComputador-> modelo = "Inspiron 15";
    $meuComputador-> preco = 2700;

    // Método imprimir
    $meuComputador -> imprimir();

    // Método darDesconto
    $meuComputador-> darDesconto();
    $meuComputador -> imprimir();
