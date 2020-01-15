<?php

if (!session_id()) {
    session_start();
}
include "conectare.php";

$nr = $_POST['numarcom'];
$_SESSION['nrr']=$nr;

// se cauta id-ul comenzii in functie de timp
$q_myQuery = "SELECT `*` FROM `comenzi` WHERE `id` = $nr";
$rsmyQuery = mysqli_query($mysqli, $q_myQuery) or die(mysqli_error($mysqli));
$row_rsmyQuery = mysqli_fetch_assoc($rsmyQuery);
$nume = $row_rsmyQuery['user'];
$produs=$row_rsmyQuery['produs'];
$firma=$row_rsmyQuery['firma'];
$cantitate=$row_rsmyQuery['cantitate'];


if ($nume=="") {
    echo "Comanda nu exista!";
} else {
    // se afiseaza id-ul comenzii
    echo nl2br("Numar comanda: $nr \n
Nume: $nume\n
Produs: $produs\n
Firma: $firma\n
Cantitate: $cantitate");

    // Modificare cantitate comanda
    echo '<form action="modificare.php" method="post">
Cantitate noua: <input type="number" name="cant" required><br>
<input type="submit" value="Modifica!">
</form>';

    echo "<br><br>";

    // Buton de anulare comanda
    echo '<form action="stergere.php" method="post">
<input type="submit" value="Anulare comanda">
</form>';
}

$mysqli->close();
