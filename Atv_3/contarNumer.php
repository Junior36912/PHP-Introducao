<?php

// 1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como 
//entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

// Array de entrada
$arrayEntrada = [1, 2, 2, 3, 4, 4, 5, 5, 6, 7, 7, 5, 3, 3];

// Usa a função array_unique para remover duplicados
$arraySemDuplicados = array_unique($arrayEntrada);

// Reorganiza os índices do array resultante
$arrayResultado = array_values($arraySemDuplicados);
echo "Array Original: ";
print_r($arrayEntrada);

echo "Array Resultante: ";
print_r($arrayResultado);


?>
