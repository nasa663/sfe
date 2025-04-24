<?php
// Include database configuration
require_once 'config.php';

// Check if token is provided
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if token exists and is not expired
    $sql = "SELECT * FROM users WHERE reset_token = ? AND reset_token_expires > NOW()";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Token is valid, show reset form
        $user = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Reset Password</title>
            <link rel="stylesheet" href="style.css">
        </head>

        <body>
            <div class="container">
                <div class="form-container">
                    <div class="form-box">
                        <h2>Reset Your Password</h2>
                        <p>Enter your new password below.</p>

                        <form action="reset_password_process.php" method="POST" class="input-group"
                            style="position: relative; left: 0;">
                            <input type="hidden" name="token" value="<?php echo $token; ?>">
                            <input type="password" name="password" class="input-field" placeholder="New Password" required>
                            <input type="password" name="confirm_password" class="input-field"
                                placeholder="Confirm New Password" required>
                            <button type="submit" class="submit-btn">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </body>

        </html>
        <?php
    } else {
        echo "<script>alert('Invalid or expired token!'); window.location.href='index.html';</script>";
    }

    $stmt->close();
} else {
    // No token provided, redirect to login page
    header("Location: index.html");
    exit();
}

$conn->close();
?>