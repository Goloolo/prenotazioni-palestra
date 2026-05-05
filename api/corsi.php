<?php
include("../config/db.php");

$sql = "SELECT * FROM corsi";
$result = $conn->query($sql);

$corsi = [];

while ($row = $result->fetch_assoc()) {
    $corsi[] = $row;
}

echo json_encode($corsi);
?>