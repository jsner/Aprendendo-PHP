<?php

$produto = array();

$produto['descricao'] = "Café";
$produto['estoque'] = 100;
$produto['preco'] = 7;

$objeto = new stdClass;

foreach ($produto as $chave => $valor) {
    $objeto->$chave = $valor;
}

print_r($objeto);