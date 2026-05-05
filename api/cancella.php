<?php
include("../config/db.php");

$user_id = $_POST['user_id'];
$corso_id = $_POST['corso_id'];

// cancella prenotazione
$conn->query("DELETE FROM prenotazioni 
              WHERE user_id=$user_id AND corso_id=$corso_id");

// restituisco posto
$conn->query("UPDATE corsi 
              SET posti_disponibili = posti_disponibili + 1 
              WHERE id=$corso_id");

echo "Prenotazione cancellata";
?>