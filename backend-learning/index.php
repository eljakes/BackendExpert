<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($email === "elvis@gmail.com" && $password === "12345") {
        $message = "Login Successful";
    } else {
        $message = "Invalid Login";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <?php if ($message !== ""): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>
