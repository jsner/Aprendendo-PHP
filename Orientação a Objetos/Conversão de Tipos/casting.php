<?php

#  Criando um objeto sem uma Class
$produto = new stdClass;
$produto->descricao = "Pão com Queijo";
$produto->estoque = 100;
$produto->preco = 7;

#  Objeto para array
$vetor1 = (array) $produto;
print_r($vetor1['descricao'] . "\n");

#  Array para objeto
$vetor2 = ['descricao' => 'Café', 'estoque' => 100, 'preco' => 7];
$produto2 = (object) $vetor2;
print_r($produto2->descricao);
