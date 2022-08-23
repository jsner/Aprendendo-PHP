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

#  Retorna um array com os elementos na ordem inversa
$reversed = array_reverse($numeros);
print_r($reversed);

#  Combina um ou mais arrays
$a = array(1, 2, 3);
$b = array('a', 'b', 'c');
$c = array_merge($a, $b);

print_r($c);

#  Retorna todas as chaves ou uma parte das chaves de um array
#  Segundo parametro => Se especificado, somente chaves contendo este valor são retornadas. 
$array = array(0 => 100, "cor" => "vermelho");
print_r(array_keys($array));

$array = array("azul", "vermelho", "verde", "azul", "azul");
print_r(array_keys($array, "azul"));

#  Retorna todos os valores de um array
print_r(array_values($array));

#  Retorna a quantidade de elementos de um array
echo count($array) . "\n";

#  Verifique se um array possui um determinado valor
$bebidas = ['refrigerante', 'suco', 'agua', 'vodka'];

if (in_array('vodka', $bebidas)) {
    echo " Vodka, temos! \n";
}

#  Ordena um array pelo seu valor
$numeros_array = array(9,8,7,6,5,4,3,2,1);
#sort($numeros_array);
print_r($numeros_array);

#  Ordena um array pelo seu valor, mantendo a associação de indices.
asort($numeros_array);
print_r($numeros_array);

#  Ordena um array pelo seu indice

$carro ['potencia'] = '1.0';
$carro['ano'] = 'branco';
$carro['modelo'] = 'celta';
$carro['opcionais'] = 'ar quente';
ksort($carro);
print_r($carro);

#  Converte um string em um array
$string = '01/01/2001';
print_r(explode('/', $string));

#  Converte um array para string
$array2 = [10, 5, 2016];
print_r(implode('/', $array2));