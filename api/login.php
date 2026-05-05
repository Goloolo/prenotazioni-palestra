<?php
include("../config/db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM utenti WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        echo "Login OK - ID: " . $user['id'];
    } else {
        echo "Password errata";
    }
} else {
    echo "Utente non trovato";
}
?>