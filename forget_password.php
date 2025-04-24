<?php
// Include database configuration
require_once 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email from form
    $email = $_POST['email'];

    // Check if email exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Generate reset token
        $token = bin2hex(random_bytes(16));
        $token_expires = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Update user with reset token
        $update_sql = "UPDATE users SET reset_token = ?, reset_token_expires = ? WHERE email = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("sss", $token, $token_expires, $email);
        $update_stmt->execute();

        // In a real application, you would send an email with a reset link
        // For this example, we'll just show the token
        echo "<script>alert('Password reset link has been sent to your email. Token: " . $token . "'); window.location.href='index.html';</script>";

        $update_stmt->close();
    } else {
        echo "<script>alert('Email not found!'); window.location.href='index.html';</script>";
    }

    $stmt->close();
}

$conn->close();
?>