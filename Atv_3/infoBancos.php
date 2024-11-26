<?php
//3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.

$contaBancaria = [
    'nomeUser' => "José Jackson Lima de Souza Júnior",
    'dataNasc' => 2005,
    'numeroConta' => "12BC3",
    'valorSaldo' => 1000.00
];

echo "Banco Aloha";
echo "\n";
echo "Numero da Conta: " . $contaBancaria['numeroConta'];
echo "\n";
echo "Nome do Úsuario: " . $contaBancaria['nomeUser'];
echo "\n";
echo "Saldo na conta: " . $contaBancaria['valorSaldo'];
