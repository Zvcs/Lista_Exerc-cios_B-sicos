<?php
namespace resolucao;

$r = $argv[1];

calculatePerimeter($r);
calculateArea($r);

function calculatePerimeter(int $r): void
{
    echo ("O perimetro da circuferencia é de: " . round(2 * M_PI  * $r, 2) . PHP_EOL);

}

function calculateArea(int $r): void
{
    $area = round(M_PI * ($r**2), 2); 
    echo("A area da circuferencia é de: " . round(M_PI * ($r**2), 2) . PHP_EOL );
}
?>