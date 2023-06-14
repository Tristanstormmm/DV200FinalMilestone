<?php

include 'db.php';

$id_number = $_GET['id_number'];

$sql = "DELETE FROM employees WHERE id_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id_number);
$stmt->execute();

$stmt->close();
$conn->close();

header("location: doctors.php");

?>