<?php
    // Incluir o arquivo da classe
    require "ContaCorrente.php";

    // Instanciar um objeto de ContaCorrente
    $minhaConta = new ContaCorrente();

    // Definir os atributos da conta
    $minhaConta->conta = "1000-1";
    $minhaConta->agencia = "100";
    $minhaConta->nome = "Arthorias";
    $minhaConta->saldo = 500;

    // Exibir o saldo atual da conta 
    $minhaConta->imprimirSaldo();

    // Efetuar um saque
    $minhaConta->efetuarSaque(300);

    // Exibir o saldo atual da conta
    $minhaConta->imprimirSaldo();