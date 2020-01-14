<?php
$servername = "localhost";
$username = "webuser";
$password = 'YkMI$m6H7cN4';
$dbname = "proiectdmva";

$user = $_POST['user1'];
$produs=$_POST['produs1'];
$firma=$_POST['firma1'];
$scrurtadescriere=$_POST['scrurtadescriere1'];
$pretbucata= $_POST['pretbucata1'];
$cantitate = $_POST['cantitate1'];





$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "INSERT INTO stock (user, produs, firma, scrurtadescriere, pretbucata, cantitate)
VALUES ('$user','$produs','$firma','$scrurtadescriere',$pretbucata,$cantitate)";

if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}




$mysqli->close();
