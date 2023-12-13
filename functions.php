<?php 

session_start();

if (isset($_POST['email'])) {
    $email = $_POST['email'];    
    if (str_contains($email, '@') !== false && str_contains($email, '.') !== false) {
        $_SESSION['auth'] = true;
        header('Location: ./thankyou.php'); die;
    } else {
        $error = true;
    }
}