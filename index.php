<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (str_contains($email, '@') !== false && str_contains($email, '.') !== false) {
        echo "<div class='alert alert-success'>Email valida!</div>";
    } else {
        echo "<div class='alert alert-danger'>Email non valida!</div>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

    <h1>Email Validator</h1>

    <form action="index.php" method="post">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="email1@gmail.com" required>
        <button type="submit">Submit</button>
    </form>



</body>

</html>