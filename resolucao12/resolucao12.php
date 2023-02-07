<?php

$tall = $_GET['tall'];
$gender = $_GET['gender'];

function weight($tall, $gender): string
{
    if($gender == 'F') {
        return "O pesso ideial para o genêro feminino é de: " . round((62.1*$tall)-42.7, 2);
     }
     return "O pesso ideial para o genêro masculino é de: " . round((72.7*$tall)-58, 2);
}

?>

<!DOCTYPE html5>
<html>
    <header>
        <title>Resposta 13</title>
        <body>
         <?php
         $message = weight($tall, $gender);

         echo $message;
         ?> 
        </body>
    </header>
</html>