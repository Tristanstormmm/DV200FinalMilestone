<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <div id="header">
            <h1>Employee Details</h1>
        </div>
        
        <div class="details">
            <?php
            include 'db.php';

            // Check if the employee ID is provided in the URL
            if (isset($_GET['id_number'])) {
                $id_number = $_GET['id_number'];

                // Fetch the employee details from the database
                $sql = "SELECT * FROM employees WHERE id_number = '$id_number'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $employee = $result->fetch_assoc();

                    // Display the employee details
                    echo '<div class="employee-details">';
                    echo '<div class="employee-info">';
                    echo '<p><strong>Name:</strong> ' . $employee['name'] . '</p>';
                    echo '<p><strong>Surname:</strong> ' . $employee['surname'] . '</p>';
                    echo '<p><strong>ID Number:</strong> ' . $employee['id_number'] . '</p>';
                    echo '<p><strong>Date of Birth:</strong> ' . $employee['date_of_birth'] . '</p>';
                    echo '<p><strong>Gender:</strong> ' . $employee['gender'] . '</p>';
                    echo '<p><strong>Race:</strong> ' . $employee['race'] . '</p>';
                    echo '<p><strong>Role:</strong> ' . $employee['role'] . '</p>';
                    echo '</div>';
                    echo '<img src="' . $employee['picture'] . '" alt="Employee Picture" class="employee-picture">';
                    echo '</div>';
                } else {
                    echo '<p>No employee found with the provided ID.</p>';
                }
            } else {
                echo '<p>No employee ID provided.</p>';
            }

            $conn->close();
            ?>

            <a class="btn btn-primary btn-back" href="index.php" role="button">Back to Employees</a>
        </div>

    </div>
</body>

</html>