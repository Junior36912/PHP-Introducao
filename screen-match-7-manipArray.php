<?php

echo "Bem-vindo(a) ao screen match!"
;

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$Notas = [];

for ($contador = 1 ; $contador < $argc ; $contador++){ //(inicializacao ; condicao da repetição ; incremento
     $Notas[] = (float) $argv[$contador];
}

$somaDeNotas = 0;
foreach($Notas as $nota){
     $somaDeNotas += $nota;
}

var_dump($Notas);

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime && $anoLancamento < 2020;

echo "\n";

echo 'Nome do filme: ' . $nomeFilme; // ponto . concatena

echo "\n";

echo 'Nota do filme: ' . $notaFilme;

echo "\n";

