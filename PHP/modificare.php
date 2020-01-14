<?php
if(!session_id()) session_start();
include "conectare.php";

$cantitateNoua=$_POST['cant'];
$nr=$_SESSION['nrr'];

// se cauta comanda dupa id si se modifica cantitatea
$q_myQuery = "UPDATE `comenzi` SET `cantitate` = '$cantitateNoua'  WHERE `id` = $nr";
$rsmyQuery = mysqli_query($mysqli, $q_myQuery) or die(mysqli_error($mysqli));

echo "Comanda $nr a fost modificata cu succes!<br>";
echo "<a href='../formular.html'>Magazin<a>";


$mysqli->close();
