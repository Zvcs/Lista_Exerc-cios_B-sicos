<?php

$squarearea = $_GET['meters'];

$cover = paintCover($squarearea);
$can = cansOptionA($cover);
$cost = costOptionA($can);

$canB = cansOptionB($cover);
$costB = costOptionB($canB);

$canc = cansOptionC($cover);
$costc = costOptionC($canc);


function paintCover($squarearea): float
{
    return 6* $squarearea;

}

function cansOptionA($liters): float
{
    $can = $liters / 18;
    if ($can % 18 == 0) {
        return $can;
    }
    return ceil($can) + 1;
}

function cansOptionB($liters):float
{
    $can = $liters / 3.6;
    if ($can % 3.6 == 0){
        return $can;
    }

    return ceil($can) + 1;
}


function cansOptionC($cover): array
{
  $sum = 0;
  $can18 = 0;
  $can36 = 0;
  while($sum < $cover){
    $sum = $sum + 18;
    $can18++;
  }
  $sum = $sum - 18;
  $sum36 = 0;
  $rest = $cover - $sum;
  while($sum36 > $rest){
    $sum36 = $sum36 + 3.6;
    $can36++;
  }
  $array = [$can18, $can36];
  return $array;

}

function costOptionA($can): float
{
    return round($can*80,2);

}

function costOptionB($can): float
{
    return round($can*25,2);

}

function costOptionC($arr): float
{
    $cost = $arr[0] * 80;
    $cost1 = $arr[1] * 25;
    return round($cost + $cost1,2);
}
?>

<!DOCTYPE html5>
<html>
    <header>
        <title>Resposta 17</title>
        <body>
         <?php
        echo "A opção A custa: R$" . $cost . "<br>";
        echo "A opção B custa: R$" . $costB . "<br>";
        echo "A opção C custa: R$" . $costc . "<br>";
         ?> 
        </body>
    </header>
</html>