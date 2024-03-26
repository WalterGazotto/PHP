<?php
// Número real e fração
$numero = "3.5";
$fração = "1/2";

// Divida a fração em numerador e denominador
list($numerador, $denominador) = explode("/", $fração);

// Converta a fração para um número decimal
$fração_decimal = $numerador / $denominador;

// Adicione o número real e a fração
$soma = $numero + $fração_decimal;

// Exiba o resultado
echo "O número real é: $numero<br>";
echo "A fração é: $fração<br>";
echo "A fração em decimal é: $fração_decimal<br>";
echo "A soma do número real e da fração é: $soma";
?>