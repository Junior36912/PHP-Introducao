<?php

$temperaturaEmCelsius = $argv[1] ?? 0;
$temperaturaEmFahrenheit = $temperaturaEmCelsius * 1.8 + 32;

$mensagem = "A temperatura de " . $temperaturaEmCelsius . "°Celsius é em Fahreinheit " . $temperaturaEmFahrenheit . "°F";

echo $mensagem;