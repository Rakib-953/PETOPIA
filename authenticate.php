<?php
session_start();
include('database.php'); // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    // Check if the database connection is successful
    if ($conn === false) {
        die("ERROR: Could not connect to the database.");
    }

    // Check if user exists and fetch user details
    $sql = "SELECT * FROM users WHERE username = '$username' AND role = '$role'"; // Changed name to username
    $result = $conn->query($sql);

    // Check for errors in the query execution
    if ($result === false) {
        die("ERROR: Could not execute query. " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // User exists, now check password
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Password matches, start session and redirect based on role
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['user_id'] = $user['id'];

            // Redirect based on user role
            if ($user['role'] == 'admin') {
                header('Location: admin_dashboard.php');
            } elseif ($user['role'] == 'seller') {
                header('Location: sellers_dashboard.php');
            } else {
                header('Location: customer_dashboard.php');
            }
            exit();
        } else {
            // Password incorrect
            echo "Incorrect password.";
        }
    } else {
        // User not found
        echo "No user found with the provided username and role.";
    }

    // Close the connection
    $conn->close();
}
?>
