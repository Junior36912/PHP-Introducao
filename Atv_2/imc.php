<?php

//2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$peso = $argv[1] ?? 0;

$altura = $argv[2] ?? 0;

$imc = $peso / ($altura ** 2);

echo "Seu IMC é: " . $imc . "\n";

if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso.\n";
} elseif ($imc >= 18.5 && $imc < 24.9) {
    echo "Classificação: Peso normal.\n";
} elseif ($imc >= 25 && $imc < 29.9) {
    echo "Classificação: Sobrepeso.\n";
} elseif ($imc >= 30 && $imc < 34.9) {
    echo "Classificação: Obesidade Grau 1.\n";
} elseif ($imc >= 35 && $imc < 39.9) {
    echo "Classificação: Obesidade Grau 2.\n";
} else {
    echo "Classificação: Obesidade Grau 3.\n";
}
?>