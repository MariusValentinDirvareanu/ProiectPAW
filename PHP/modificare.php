<?php
if(!session_id()) session_start();
include "conectare.php";

$cantitateNoua=$_POST['cant'];
$nr=$_SESSION['nrr'];

// se cauta id-ul comenzii in functie de timp
$q_myQuery = "UPDATE `comenzi` SET `cantitate` = '$cantitateNoua'  WHERE `id` = $nr";
$rsmyQuery = mysqli_query($mysqli, $q_myQuery) or die(mysqli_error($mysqli));

echo "Modificare cu succes!<br>";
echo "<a href='../formular.html'>Buy<a>";


$mysqli->close();
