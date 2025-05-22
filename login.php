<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);

    // Check if user exists
    $sql = "SELECT * FROM signup WHERE username = '$username'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Compare plain-text password (use password_verify if hashed)
        if ($row['pass'] === $password) {
            echo '<script>alert("Login successful!")</script>';
            echo '<script>window.location.href = "head1.php";</script>';
        } else {
            echo '<script>alert("Incorrect password.");</script>';
            echo '<script>window.location.href = "login-form.php";</script>';
        }
    } else {
        echo '<script>alert("Username not found.");</script>';
        echo '<script>window.location.href = "login-form.php";</script>';
    }
} else {
    echo '<script>alert("Invalid request method.");</script>';
    echo '<script>window.location.href = "login-form.php";</script>';
}
?>
