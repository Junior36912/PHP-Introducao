<?php
//2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
//Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notasAluno01 = [
    4,
    4,
    1,
    0,
    4
];

echo "Calcular Média das Notas em um Array:";
echo "\n";
echo "Soma dos valores no Array: " . array_sum($notasAluno01);

echo "\n";
echo "Contar quantos valores tem dentro de uma Array: " . count($notasAluno01);

$mediaNota = array_sum($notasAluno01) / count($notasAluno01);

echo "\n";
echo "Valor da média da Nota: " . $mediaNota;


echo "\n";
if($mediaNota >= 0 && $mediaNota < 4){
    echo "Aluno reprovado!";
}elseif ($mediaNota >= 4 && $mediaNota < 6) {
    echo "Aluno de recuperação!";
}elseif  ($mediaNota >= 6 && $mediaNota < 10) {
    echo "Aluno aprovado!";
}

