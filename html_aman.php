<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure HTML</title>
</head>
<body>
    <h2>Secure HTML Form</h2>
    <form method="post" action="html_aman.php">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "<p>Input: $input</p>";
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email: $email</p>";
        } else {
            echo "<p>Invalid email address</p>";
        }
    }
    ?>
</body>
</html>
