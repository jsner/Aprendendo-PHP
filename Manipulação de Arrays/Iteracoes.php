<?php

$frutas = array();

$frutas['cor'] = 'Vermelha';
$frutas['sabor'] = 'Docê';
$frutas['formato'] = 'Redonda';
$frutas['nome'] = 'Maçã';

foreach ($frutas as $chave => $fruta) {
    echo "$chave => $fruta \n";
}
