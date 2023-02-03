<?php
namespace resolucao;

$soma = $argv[1] + $argv[2] + $argv[3];

$media = round($soma/3, 2);

echo("A média do aluno é de: {$media}");