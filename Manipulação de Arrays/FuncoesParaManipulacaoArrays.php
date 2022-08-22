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

#  Extrai um elemento do final do array
array_pop($numeros);
print_r($numeros);

# Retorna um array com os elementos na ordem inversa
$reversed = array_reverse($numeros);
print_r($reversed);