<?php

$squarearea = $argv[1];

$cover = paintCover($squarearea);
$can = cans($cover);
$cost = cost($can);

echo "Para pintar á area é necessário gastar: {$cost}";

function paintCover($squarearea): int
{
    return 3* $squarearea;

}

function cans($liters): int
{
    $can = $liters / 18;
    if ($can % 18 == 0) {
        return $can;
    }
    return ceil($can) + 1;
}

function cost($can): int
{
    return $can*80;

}