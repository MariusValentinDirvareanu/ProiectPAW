<?php
if(!session_id()) session_start();
include "conectare.php";

$nr=$_SESSION['nrr'];

// se cauta id-ul comenzii in functie de timp
$q_myQuery = "DELETE FROM `comenzi` WHERE `id` = $nr";
$rsmyQuery = mysqli_query($mysqli, $q_myQuery) or die(mysqli_error($mysqli));

echo "Comanda $nr a fost anulata cu succes!<br>";
echo "<a href='../formular.html'>Magazin<a>";


$mysqli->close();
