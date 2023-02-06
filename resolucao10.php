<?php

$number1 = $argv[1];
$number2 = $argv[2];
$number3 = $argv[3];

$questiona = quuestionA($number1, $number2);
$questionb = quuestionB($number1, $number3);
$questionc = quuestionC($number3);

echo "O produto do dobro do primeiro com metade do segundo é {$questiona}" . PHP_EOL;
echo "A soma do triplo do primeiro com o terceiro é {$questionb}" . PHP_EOL;
echo "o terceiro elevado ao cubo é {$questionc}" . PHP_EOL;

function quuestionA($number1, $number2): float
{
    $double = $number1 * 2;
    $half = $number2/ 2;
    return $double * $half;
}

function quuestionB($number1, $number3): float
{
    return $number1 * 3 + $number3;
}

function quuestionC($number3): float
{
    return $number3 ** 3;
}