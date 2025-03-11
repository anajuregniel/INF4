<?php
    // Incluir o arquivo da classe Produto
    require "Produto.php";

    // Instanciar um objeto da classe Produto
    $meuProduto = new Produto();

    // Definir os valores dos atributos
    $meuProduto->setNome("Logitech G5");
    $meuProduto->setTipo("Mouse");
    $meuProduto->setValor(200.00);
    $meuProduto->setQuantidade(1);

    // Exibir os valores dos atributos
    echo "<p>Produto: " . $meuProduto->getNome();
    echo "<p>Tipo: " . $meuProduto->getTipo();
    echo "<p>Valor: " . $meuProduto->getValor();
    echo "<p>Quantidade: " . $meuProduto->getQuantidade();