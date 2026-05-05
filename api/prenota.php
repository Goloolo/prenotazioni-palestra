<?php
include("../config/db.php");

$user_id = $_POST['user_id'];
$corso_id = $_POST['corso_id'];

// controllo posti
$query = "SELECT posti_disponibili FROM corsi WHERE id=$corso_id";
$result = $conn->query($query);
$row = $result->fetch_assoc();

if ($row['posti_disponibili'] > 0) {

    $conn->query("INSERT INTO prenotazioni (user_id, corso_id) VALUES ($user_id, $corso_id)");

    $conn->query("UPDATE corsi 
                  SET posti_disponibili = posti_disponibili - 1 
                  WHERE id=$corso_id");

    echo "Prenotazione effettuata";

} else {
    echo "Corso pieno";
}
?>