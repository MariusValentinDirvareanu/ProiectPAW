<?php
$servername = "localhost";
$username = "webuser";
$password = 'YkMI$m6H7cN4';
$dbname = "proiectdmva";

$user = $_POST['user1'];
$email = $_POST['email1'];
$produs=$_POST['produs1'];
$firma=$_POST['firma1'];
$cantitate = $_POST['cantitate1'];
$data= date('Y-m-d H:i:s');

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "INSERT INTO comenzi (user, email, produs, firma, cantitate, dataTimp)
VALUES ('$user', '$email', '$produs', '$firma', $cantitate, '$data')";


if (mysqli_query($mysqli, $sql)) {
    $q_myQuery = "SELECT `id` FROM `comenzi` WHERE `dataTimp` = '$data'";
    $rsmyQuery = mysqli_query($mysqli, $q_myQuery) or die(mysqli_error($mysqli));
    $row_rsmyQuery = mysqli_fetch_assoc($rsmyQuery);
    $img = $row_rsmyQuery['id'];

    echo "Numar comanda: $img";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}


$mysqli->close();
