<?php
// Operações matemáticas básicas
$valor = 10;
$valor += 15;  // Equivalente a $valor = $valor + 15, atribui o valor 25 à variável $valor

$a = 10 + 5; // Soma: atribui o valor 15 à variável $a
$b = 10 - 5; // Subtração: atribui o valor 5 à variável $b
$c = 10 * 5; // Multiplicação: atribui o valor 50 à variável $c
$d = 10 / 5; // Divisão: atribui o valor 2 à variável $d
$e = 10 % 3; // Módulo: atribui o valor 1 à variável $e (o resto da divisão de 10 por 3 é 1)
$f = 10 ** 3; // Exponenciação: atribui o valor 1000 à variável $f (10 elevado a 3)

// Comparações entre valores
$a = 10; // Atribui o valor 10 à variável $a
$b = 5; // Atribui o valor 5 à variável $b
$c = 30; // Atribui o valor 30 à variável $c

$igual = $b == $a; // Verifica se $b é igual a $a. Resultado: false
$diferente = $b != $c; // Verifica se $b é diferente de $c. Resultado: true
$maior = $b > $a; // Verifica se $b é maior que $a. Resultado: false
$menorIgual = $b <= $c; // Verifica se $b é menor ou igual a $c. Resultado: true

// Comparações com conversões de tipo
$a = '1'; // String '1'
$b = 1; // Número 1

$igual = $a == $b; // Verifica se $a é igual a $b (com conversão de tipo). Resultado: true
$identico = $a === $b; // Verifica se $a é idêntico a $b (mesmo valor e tipo). Resultado: false
$diferente = $a != $b; // Verifica se $a é diferente de $b (com conversão de tipo). Resultado: false
$naoIdentico = $a !== $b; // Verifica se $a não é idêntico a $b. Resultado: true

// Operadores lógicos
$a = true;
$b = false;

$comparacao = $a && $b; // Operador AND: true e false. Resultado: false
$comparacao = $a || $b; // Operador OR: true ou false. Resultado: true

// Operador NOT
$a = true;
$negacao = !$a; // Inverte o valor de $a. Resultado: false

// Operadores de incremento
$num = 5;
$resultado = ++$num; // Incrementa $num para 6 antes de atribuir a $resultado
echo $num; // Exibe: 6
echo $resultado; // Exibe: 6

$num = 5;
$resultado = $num++; // Atribui o valor atual de $num (5) a $resultado e depois incrementa $num para 6
echo $num; // Exibe: 6
echo $resultado; // Exibe: 5
?>
