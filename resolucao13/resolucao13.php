<?php

$weight = $_GET['weight'];

function ticket($weight): float
{
    return $weight - 50;
}

function cost($ticket): float
{
    return $ticket * 4;
}
?>

<!DOCTYPE html5>
<html>
    <header>
        <title>Resposta 13</title>
        <body>
         <?php
         $cost = 0;
          if($weight > 50){
            $ticket = ticket($weight);
            $cost = cost($ticket);
         }
         echo "A quantidade de peixe pescada é de: ". $weight. "KG" . "<br>";
         echo "A quantidade de multa a ser paga pe de: R$" . $cost;
         ?> 
        </body>
    </header>
</html>