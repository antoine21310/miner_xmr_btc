
<?php
$link = mysql_connect("localhost", "id4885083_miner", "id4885083_miner")
    or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';
mysql_close($link);
?>
