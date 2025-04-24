<?php
// Include database configuration
require_once 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!'); window.location.href='reset_password.php?token=" . $token . "';</script>";
        exit();
    }

    // Check if token exists and is not expired
    $sql = "SELECT * FROM users WHERE reset_token = ? AND reset_token_expires > NOW()";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Hash new password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Update user password and clear reset token
        $update_sql = "UPDATE users SET password = ?, reset_token = NULL, reset_token_expires = NULL WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("si", $hashed_password, $user['id']);

        if ($update_stmt->execute()) {
            echo "<script>alert('Password has been reset successfully!'); window.location.href='index.html';</script>";
        } else {
            echo "<script>alert('Error updating password!'); window.location.href='reset_password.php?token=" . $token . "';</script>";
        }

        $update_stmt->close();
    } else {
        echo "<script>alert('Invalid or expired token!'); window.location.href='index.html';</script>";
    }

    $stmt->close();
}

$conn->close();
?>