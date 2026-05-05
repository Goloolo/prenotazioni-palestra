<?php
$conn = new mysqli("localhost", "root", "", "palestra");

if ($conn->connect_error) {
    die("Errore connessione: " . $conn->connect_error);
}
?>