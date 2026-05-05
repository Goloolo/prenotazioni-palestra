<?php
include("../config/db.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO utenti (nome, email, password) VALUES ('$nome', '$email', '$password')";

if ($conn->query($sql)) {
    echo "Registrazione completata";
} else {
    echo "Errore";
}
?>