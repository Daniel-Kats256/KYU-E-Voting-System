<?php
include 'includes/conn.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['add'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $voter = $_POST['voters_id'];
    $filename = $_FILES['photo']['name'];
    $file_path = '';

    if (!empty($filename)) {
        $file_path = '../images/' . $filename;
        if (!move_uploaded_file($_FILES['photo']['tmp_name'], $file_path)) {
            $_SESSION['error'] = 'File upload failed.';
            // header('location: login-page.php');
            // exit();
        }
    }

    // Check if Voter ID already exists
    $sql_check = "SELECT * FROM voters WHERE voters_id = ?";
    $stmt = $conn->prepare($sql_check);
    $stmt->bind_param("s", $voter);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = 'Voter ID already exists.';
    } else {
        // Insert voter data
        $sql = "INSERT INTO voters (voters_id, password, firstname, lastname, photo) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $voter, $password, $firstname, $lastname, $filename);

        if ($stmt->execute()) {
            $_SESSION['success'] = 'Voter added successfully.';
        } else {
            $_SESSION['error'] = 'Database error: ' . $stmt->error;
        }
    }
} else {
    $_SESSION['error'] = 'Fill up add form first.';
}

header('location: login-page.php');
?>