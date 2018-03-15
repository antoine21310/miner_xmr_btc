<?php

//$balanceact =$_POST["balanceact"];
$balanceact=0.0000021076;

$fbalance=fopen('balance_monero.txt', 'r');
$balancetot=fgets($fbalance);
fclose($fbalance);

$fbalance=fopen('balance_monero.txt','a');
file_put_contents('balance_monero.txt', '');
$balancetot+=$balanceact;
fputs($fbalance, $balancetot);
echo $balancetot;
fclose($fbalance);


/*$fbalance=fopen('balance.txt', 'r');

$balancetot=fgets($fbalance);
echo $balancetot;
fclose($fbalance);*/


?>