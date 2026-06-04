<?php

function validateInput($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data, ENT_QUOTES, "UTF-8");

    return $data;
}

$name = "";
$email = "";
$password = "";
$errors = [];
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = validateInput($_POST["name"] ?? "");
    $email = validateInput($_POST["email"] ?? "");
    $password = validateInput($_POST["password"] ?? "");

    if (empty($name)) {
        $errors["name"] = "Name is required.";
    }

    if (empty($email)) {
        $errors["email"] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Please enter a valid email address.";
    }

    if (empty($password)) {
        $errors["password"] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors["password"] = "Password must be at least 6 characters.";
    }

    if (empty($errors)) {
        $message = "Registration Successful";
        $password = "";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixAm Artisan Registration Form</title>
</head>
<body>
    <h1>FixAm Artisan Registration Form</h1>

    <?php if (!empty($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>">
            <?php if (isset($errors["name"])) : ?>
                <p><?php echo $errors["name"]; ?></p>
            <?php endif; ?>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>">
            <?php if (isset($errors["email"])) : ?>
                <p><?php echo $errors["email"]; ?></p>
            <?php endif; ?>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>">
            <?php if (isset($errors["password"])) : ?>
                <p><?php echo $errors["password"]; ?></p>
            <?php endif; ?>
        </div>

        <button type="submit">Register</button>
    </form>
</body>
</html>
