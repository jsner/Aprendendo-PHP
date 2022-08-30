<?php

#  Criando um objeto sem uma Class
$produto = new stdClass;
$produto->descricao = "Pão com Queijo";
$produto->estoque = 100;
$produto->preco = 7;

print_r($produto);