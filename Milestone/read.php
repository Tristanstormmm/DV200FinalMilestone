<?php
include 'db.php';

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

echo '<table class="table">';
echo '<thead>';
echo '<tr>';
echo '<th>NAME</th>';
echo '<th>SURNAME</th>';
echo '<th>ID NUMBER</th>';
echo '<th>DATE OF BIRTH</th>';
echo '<th>GENDER</th>';
echo '<th>RACE</th>';
echo '<th>PICTURE</th>';
echo '<th>ROLE</th>';
echo '<th>ACTIONS</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = $result->fetch_assoc()) {
    echo '<tr>';

    if ($row['id_number'] == $_GET['id_number']) {
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<td><input type="text" class="form-control" name="name" value="' . $row['name'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="surname" value="' . $row['surname'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="id_number" value="' . $row['id_number'] . '" readonly></td>';
        echo '<td><input type="date" class="form-control" name="date_of_birth" value="' . $row['date_of_birth'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="gender" value="' . $row['gender'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="race" value="' . $row['race'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="picture" value="' . $row['picture'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="role" value="' . $row['role'] . '"></td>';
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
        echo '</form>';
    } else {
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['surname'] . '</td>';
        echo '<td>' . $row['id_number'] . '</td>';
        echo '<td>' . $row['date_of_birth'] . '</td>';
        echo '<td>' . $row['gender'] . '</td>';
        echo '<td>' . $row['race'] . '</td>';
        echo '<td>' . $row['picture'] . '</td>';
        echo '<td>' . $row['role'] . '</td>';
        echo '<td>
                <a class="btn btn-primary" href="index.php?id_number=' . $row['id_number'] . '" role="button">Update</a>
                <a class="btn btn-info" href="view_employee.php?id_number=' . $row['id_number'] . '" role="button">View</a>
            </td>';
    }

    echo '<td><a class="btn btn-danger" href="delete.php?id_number=' . $row['id_number'] . '" role="button">Delete</a></td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

$conn->close();
?>
