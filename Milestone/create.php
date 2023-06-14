<?php

include 'db.php';

$surname = $_POST["surname"];
$name = $_POST["name"];
$date_of_birth = $_POST["date_of_birth"];
$gender = $_POST["gender"];
$race = $_POST["race"];
$picture = $_POST["picture"];
$role = $_POST["role"];

// Prepare the SQL statement with placeholders
$sql = "INSERT INTO employees (surname, name, date_of_birth, gender, race, picture, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind the values to the prepared statement parameters
$stmt->bind_param("sssssss", $surname, $name, $date_of_birth, $gender, $race, $picture, $role);

// Execute the prepared statement
$stmt->execute();

$stmt->close();
$conn->close();

header("location: doctors.php");

?>