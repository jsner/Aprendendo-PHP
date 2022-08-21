<?php

$pessoa['nome'] = 'Pablo';
$pessoa['empresa'] = 'Adianti';
$pessoa ['peso'] = 70;

#  Alterando
$pessoa['nome'] = 'Pedro';
$pessoa['empresa'] = 'Audi';
$pessoa['peso'] += 5;

#  Debug
print_r($pessoa);

$comida[] = 'Pizza';
$comida[] = 'Lasanha';
$comida[] = 'Macarrão';

#  Alteração
$comida[1] = 'Bolo de Chocolate';

#  Debug
print_r($comida);