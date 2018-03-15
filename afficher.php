<?php
$fbalance=fopen('balance.txt', 'r');

$balancetot=fgets($fbalance);
echo $balancetot;
fclose($fbalance);



?>