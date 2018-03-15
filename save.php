<?php

$balanceact =$_POST["balanceact"];

$fbalance=fopen('balance.txt', 'r');
$balancetot=fgets($fbalance);
fclose($fbalance);

$fbalance=fopen('balance.txt','a');
file_put_contents('balance.txt', '');
$balancetot+=$balanceact;
fputs($fbalance, $balancetot);
echo $balancetot;
fclose($fbalance);


/*$fbalance=fopen('balance.txt', 'r');

$balancetot=fgets($fbalance);
echo $balancetot;
fclose($fbalance);*/






?>