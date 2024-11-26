<?php

$userBanco = [
    'nomeUser' => "José Jackson Lima de Souza Júnior",
    'valorSaldo' => 1000.00,
    'numerConta' => "12AB3C",
];

$sair = TRUE;

while ($sair){

    echo "*********************************************";
    echo "\n";
    echo "Usuario: " . $userBanco['nomeUser'];
    echo "\n";
    echo "Saldo: " . $userBanco['valorSaldo'];
    echo "\n";
    echo "*********************************************";
    echo "\n";

    echo "ENTRADAS: ";
    echo "\n";
    echo "1. Consultar saldo atual";
    echo "\n";
    echo "2. Sacar valor";
    echo "\n";
    echo "3. Depositar valor";
    echo "\n";
    echo "4. Sair";

    echo "\n";
    echo "*********************************************";
    echo "\n";

    echo "Digite um número: ";
    $numero = (float) fgets(STDIN);

    echo "*********************************************";
    echo "\n";

    if($numero == 1){
        echo "Saldo atual é: " . $userBanco['valorSaldo'];
        echo "\n";
    } elseif ($numero == 2) {
        echo "Quanto você deseja sacar: ";
        $valorSaque = (float) fgets(STDIN);
        
        if ($valorSaque > $userBanco['valorSaldo']){
            echo "Valor indisponivel em Conta!";
        } elseif ($valorSaque <= $userBanco['valorSaldo'] && $valorSaque > 0){
            $userBanco['valorSaldo'] -= $valorSaque;
            echo "Valor atual em banco: " . $userBanco['valorSaldo'];
        }else{
            echo "Digite um valor válido!";
        }
        echo "\n";
        
    } elseif ($numero == 3) {
        echo "Quanto você deseja depositar: ";
        $valorDeposito = (float) fgets(STDIN);
        if ($valorDeposito > 0){
            $userBanco['valorSaldo'] += $valorDeposito;
            echo "Valor atual em banco: " . $userBanco['valorSaldo'];
        }else{
            echo "Insira um valor válido!";
        }
        
        echo "\n";

    } elseif ($numero == 4){
        echo "SAINDO DO SISTEMA...";
        $sair = FALSE;
        echo "\n";

    }else{
        echo "Digite um valor válido!";
    }
    echo "\n";
}

echo "\n";
