<?php
// Start session
session_start();

// Include database configuration
require_once 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;

    // Prepare SQL statement
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['logged_in'] = true;

            // Set cookie if remember me is checked
            if ($remember) {
                $token = bin2hex(random_bytes(16));
                setcookie('remember_token', $token, time() + (86400 * 30), "/"); // 30 days

                // Store token in database (you would need to add a remember_token column to your users table)
                // This is a simplified example
                // $update_token = "UPDATE users SET remember_token = ? WHERE id = ?";
                // $stmt = $conn->prepare($update_token);
                // $stmt->bind_param("si", $token, $user['id']);
                // $stmt->execute();
            }

            // Redirect to dashboard
            header("Location: Homepage.php");
            exit();
        } else {
            echo "<script>alert('Invalid password!'); window.location.href='index.html';</script>";
        }
    } else {
        echo "<script>alert('User not found!'); window.location.href='index.html';</script>";
    }

    $stmt->close();
}

$conn->close();
?>