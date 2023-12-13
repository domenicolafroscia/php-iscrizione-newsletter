<?php

session_start();

if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    header('Location: index.php'); die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <h2>Grazie per aver inserito la tua email!</h2>
    </div>

    <a href="logout.php">Esci</a>
</body>
</html>