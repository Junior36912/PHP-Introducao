<?php

echo "Bem-vindo(a) ao screen match!"
;

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;


$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime && $anoLancamento < 2020;

echo $notaFilme;

echo "\n";
echo 'Nome do filme: ' . $nomeFilme . '\n'; // ponto . concatena

echo 'Nota do filme: $notaFilme' . '\n';

echo "\n";
$anoLancamento = $argv[1] ?? 2022; // use: php .\screen-match-2.php
echo "Ano de lançamento: " . $anoLancamento;