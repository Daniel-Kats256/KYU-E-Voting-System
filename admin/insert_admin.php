<?php
// Database connection settings
include 'includes/conn.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form inputs
    $username = $_POST['username'];
    $password = $_POST['password']; // We'll hash this
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $created_on = $_POST['created_on'];

    // Handle file upload for the photo
    $photo = $_FILES['photo']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($photo);
    
    // Move uploaded file to the uploads directory
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
        echo "Photo uploaded successfully.<br>";
    } else {
        echo "Error uploading photo.<br>";
    }

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // SQL query to insert data into the admin table
    $sql = "INSERT INTO admin (username, password, firstname, lastname, photo, created_on) 
            VALUES ('$username', '$hashed_password', '$firstname', '$lastname', '$photo', '$created_on')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New admin record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
