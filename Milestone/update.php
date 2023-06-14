<?php

include 'db.php';

$id_number = $_POST['id_number'];
$surname = $_POST['surname'];
$name = $_POST['name'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$race = $_POST['race'];
$picture = $_POST['picture'];
$role = $_POST['role'];

// Prepare the SQL statement with placeholders
$sql = "UPDATE employees SET surname = ?, name = ?, date_of_birth = ?, gender = ?, race = ?, picture = ?, role = ? WHERE id_number = ?";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the parameters
$stmt->bind_param("ssssssss", $surname, $name, $date_of_birth, $gender, $race, $picture, $role, $id_number);

// Execute the statement
$stmt->execute();

// Close the statement and database connection
$stmt->close();
$conn->close();

// Redirect back to the dashboard.php page
header("location: doctors.php");


?>