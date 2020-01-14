<?php
include "conectare.php";

$user = $_POST['user1'];
$email = $_POST['email1'];
$produs=$_POST['produs1'];
$firma=$_POST['firma1'];
$cantitate = $_POST['cantitate1'];
// timpul la momentul actual
$data= date('Y-m-d H:i:s');

// Introducere date comanda in baza de date
$sql = "INSERT INTO comenzi (user, email, produs, firma, cantitate, dataTimp)
VALUES ('$user', '$email', '$produs', '$firma', $cantitate, '$data')";


if (mysqli_query($mysqli, $sql)) {
    // se cauta id-ul comenzii in functie de timp
    $q_myQuery = "SELECT `id` FROM `comenzi` WHERE `dataTimp` = '$data'";
    $rsmyQuery = mysqli_query($mysqli, $q_myQuery) or die(mysqli_error($mysqli));
    $row_rsmyQuery = mysqli_fetch_assoc($rsmyQuery);
    $img = $row_rsmyQuery['id'];
    // se afiseaza id-ul comenzii
    echo "Numar comanda: $img";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}


$mysqli->close();
