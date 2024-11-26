<?php

echo "Bem-vindo(a) ao screen match!"
;

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

for ($contador = 1 ; $contador < $argc ; $contador += 1){ //(inicializacao ; condicao da repetição ; incremento
    $somaDeNotas += $argv[$contador];
}



$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime && $anoLancamento < 2020;

echo "\n";

echo 'Nome do filme: ' . $nomeFilme; // ponto . concatena

echo "\n";

echo 'Nota do filme: ' . $notaFilme;

echo "\n";

