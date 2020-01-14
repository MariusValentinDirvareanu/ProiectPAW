<?php
$servername = "localhost";
$username = "webuser";
$password = 'YkMI$m6H7cN4';
$dbname = "proiectdmva";
if(!session_id()) session_start();
$_SESSION['nrr'];


$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}