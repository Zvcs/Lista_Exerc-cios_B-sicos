<?php

$money = $_GET['money'];
$hours = $_GET['hours'];

$salary = $money * $hours;

function IR($salary): float
{
    return round(0.11*$salary,2);
}

function INSS($salary): float
{
    return round(0.08*$salary,2);
}

function sindicato($salary): float
{
    return round(0.05*$salary,2);
}

function liquidSalary($IR, $INSS, $sindicato, $salary): float
{
    return $salary - $IR - $INSS - $sindicato;
}
?>

<!DOCTYPE html5>
<html>
    <header>
        <title>Resposta 14</title>
        <body>
         <?php
         $IR = IR($salary);
         $INSS = INSS($salary);
         $sindicato = sindicato($salary);
         $liquidSalary = liquidSalary($IR, $INSS, $sindicato, $salary);
          echo "O salario bruto é de R$ {$salary}" . "<br>";
          echo "O valor destinado ao IR é de R$".$IR."<br>";
          echo "O valor destinado ao INSS é de R$" . $INSS . "<br>";
          echo "O valor destinado ao sindicato é de R$" . $sindicato . "<br>";
          echo "O valor liquido é de R$" . $liquidSalary . "<br>";
         ?> 
        </body>
    </header>
</html>