<?php

$numeros = array(1, 2, 3);
#  Adiciona um ou mais elementos no início de um array
array_unshift($numeros, 0);
print_r($numeros);

#  Adiciona um ou mais elementos no final de um array
array_push($numeros, 4);
print_r($numeros);

#  Retira o primeiro elemento de um array e o retorna
echo "Valor removido => " . array_shift($numeros) . "\n";
print_r($numeros);
