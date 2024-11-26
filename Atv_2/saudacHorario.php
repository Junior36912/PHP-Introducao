<?php

// 3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) 
// dependendo do horário encontrado em uma variável (inteiro representando as horas).

$horario = $argv[1];

if ($horario >= 4 and $horario < 12){
    echo "Bom dia";
}elseif($horario >= 12 and $horario < 18){
    echo "Boa tarde!";
}elseif($horario >= 18 and $horario < 22){
    echo "Boa noite!!";
}elseif($horario >= 22 and $horario < 24){
    echo "Boa madrugada!!!";
}else{
    echo "Vai dormir"; 
}