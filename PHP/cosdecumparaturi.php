<?php
$link = mysql_connect('localhost', 'webuser', 'password');
if (!$link) {
    die('Esec la conectare: ' . mysql_error());
}
echo 'Conectat cu succes';
mysql_close($link);
?>