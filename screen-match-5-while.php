<?php

echo "Bem-vindo(a) ao screen match!"
;

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 2;
$somaDeNotas = 0;

$contador = 1;
while ($argv[$contador] !=0) {
     $somaDeNotas += $argv[$contador++];
}


$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime && $anoLancamento < 2020;

echo "\n";

echo 'Nome do filme: ' . $nomeFilme; // ponto . concatena

echo "\n";

echo 'Nota do filme: ' . $notaFilme;

echo "\n";

