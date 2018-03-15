<?php
$fbalance=fopen('balance_monero.txt', 'r');

$balancetot=fgets($fbalance);
echo $balancetot;
fclose($fbalance);



?>