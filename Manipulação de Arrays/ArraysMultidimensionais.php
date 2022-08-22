<?php


$carros = array(
    'Palio' => array(
        'cor' => 'preto',
        'potencia' => '1.0',
        'opcionais' => 'Ar Cond'
    ),
    'Corsa' => array(
        'cor' => 'vermelho',
        'potencia' => '1.3',
        'opcionais' => 'MP3'
    ),
    'Gol' => array(
        'cor' => 'prata',
        'potencia' => '2.0',
        'opcionais' => 'Completo'
    ),
);

echo $carros['Palio']['cor'] . "\n";

$motos = array();
$motos['XJ6']['ano'] = 2018;
$motos['HORNET']['ano'] = 2019;

echo $motos['XJ6']['ano'] . "\n";


#  Iterando array multidimensional

foreach ($carros as $modelo => $caracteristicas) {
    echo "Modelo: $modelo \n";
    foreach ($caracteristicas as $caracteristica => $valor) {
        echo " - $caracteristica => $valor \n";
    }
}




