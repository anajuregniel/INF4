<?php
    require "Livro.php";

    // Instanciar um objeto de Carro
    $meuLivro = new Livro("Todas as suas imperfeições", "Collen Hoover", 2, 2019);

    // Invocar o método imprimir do Carro
    $meuLivro->imprimir();