<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Replace these values with your actual MySQL database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itsmine_app";

    // Get the data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL statement to insert data
    $sql = "INSERT INTO cobacoba (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data added successfully!";
    } else {
        echo "Error adding data: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
