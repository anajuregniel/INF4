<?php
// Inclui o arquivo Implementação
require "implementacao.php";

// Instanciar um objeto de Informações
$meuFuncionario = new Funcionario();

// Define os atributos
$meuFuncionario->setNome("Ana");
$meuFuncionario->setIdade(18);
$meuFuncionario->setCargo("Estudante");
$meuFuncionario->setSalario(10.00);


// Aumentar salário do Funcionário
$meuFuncionario->aumentarSalario(10);

// Mostrar as informações
$meuFuncionario->imprimir();
