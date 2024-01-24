<?php
session_start();

// Pre-added manager credentials (for demonstration purposes)
$expectedUsername = "manager";
$expectedPassword = password_hash("manager123", PASSWORD_BCRYPT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Check if the entered credentials match the pre-added credentials
    if ($enteredUsername == $expectedUsername && password_verify($enteredPassword, $expectedPassword)) {
        // Authentication successful
        $_SESSION["user_type"] = "manager";
        header("Location: index.php"); // Redirect to the manager dashboard or any other page
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
</head>
<body>
    <h2>Login Result</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <a href="index.html">Go back to login</a>
</body>
</html>
