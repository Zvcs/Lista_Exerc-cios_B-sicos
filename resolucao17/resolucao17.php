<?php

$download = $_GET['download'];
$mbps = $_GET['mbps'];

function estimatedTimeSeconds($download, $mbps): float
{
    return round($download / $mbps, 2);
}
?>

<!DOCTYPE html5>
<html>
    <header>
        <title>Resposta 17</title>
        <body>
         <?php
         $time = estimatedTimeSeconds($download, $mbps);
         echo "Aproximadamente: " . gmdate("H:i:s", $time);
         ?> 
        </body>
    </header>
</html>